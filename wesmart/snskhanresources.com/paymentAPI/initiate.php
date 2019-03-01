<?php

require_once ('functions.php');

// var_dump($_POST);

if( isset($_POST['jpaySubmit']) ){

    $orderid      = $_POST['orderid']."TM".time().rand(1111,9999);

    $con = mysqli_connect('localhost', 'snskhan_dbuser', 'snskhan_dbuser123' , 'snskhan_Db') or die('not connected'.mysqli_error());
    // $con = mysqli_connect('localhost', 'root', 'root' , 'sandskha_db') or die('not connected'.mysqli_error());
    if(!$con){
        die("Invalid mysql credentials");
    } 
    if(!mysqli_select_db($con, 'snskhan_Db')){
        die("Invalid db credentials");
    }
    // if(!mysqli_select_db($con, 'sandskha_db')){
    //     die("Invalid db Name");
    // }


    $fulName        = $_POST['fulName'];
    $_date          = $_POST['_date'];
    $amount         = $_POST['amount'];
    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $currencyCode   = 'MYR';
    $address        = $_POST['Address'];
    $postalCode     = $_POST['postalCOde'];
    $city           = $_POST['city'];
    $state          = $_POST['state'];
    $country        = $_POST['country'];
    $_dateTime      = date("F d, Y h:i:s A");
    $secret         = htmlspecialchars($_POST['secret']);
    $service_name   = htmlspecialchars($_POST['serviceTitle']);
    $paymentGateway = "jpay";

    $sql = "INSERT INTO sands_table (fullname, _DOB, amount, phone,currency , _email,_address,postalCode,city,state,country , _dateTime , secretCode,service_name, order_id, sending_signature, paymentGateway) 
                VALUES ('$fulName','$_date','$amount','$phone','$currencyCode', '$email', '$address', '$postalCode', '$city', '$state', '$country', '$_dateTime', '$secret','$service_name', '$orderid', '$generateSignature', '$paymentGateway')" or die('error in data'.mysqli_error());
            
    $run_insert = mysqli_query($con,$sql);
    // die($sql);
    if($run_insert){        
        
        //World Payments Corp Config
        $wpcTestMode = false;
        //$wpcMerchantUserName = 'wvd_lindquistke460n0uwbe70d47vwr';     //Replace it by your vendor user name
        //$wpcMerchantSecretKey = 'LKykWm21Ypl|05N5CldeiKPKJrbPPiYx^tRVPUXKfeJgkslWOz62gWNZkZL5eFDc4q4Uh_AwcgMwJ4ptDvwTogPIcwOq7nDcOH31FExSUgkzkK|YcvOAMzfY1|k9mXm7';   //Replace it by your vendor secret key
        $wpcMerchantUserName = 'wvd_lindquistke460n0uwbe70d47vwr';     //Replace it by your vendor user name
        #$wpcMerchantSecretKey = '2q|nfzH_EINbZgow5_^H0M35VlV^D1bGsb|HLHFllpxhFVNLSLoSurXlNPkmQw|eH^WpGxL^Wefy5|fYLENb2HxPsS7fk7u^6nnMV4KNi-ioZxiH72S9JlY892nuaSsg';   //Replace it by your vendor secret key
        $wpcMerchantSecretKey = 'd7qNx|jlVVKBPrCuJ9|-8T1XpXUSu|EI61sD0MZWDFtp32TNcTJkIKe3D4W43wNaxbOyYJqxlUWpXM85BRqfyEj8JbcNI-Yc7JK1o7zK^s5Vad_L1n_z^gHIsUs7QmjY';   //Replace it by your vendor secret key
        if ($wpcTestMode) {
            //TEST MODE ENDPOINT
            $wpcEndpoint = 'https://securetest.worldpaymentscorp.com/redirect-service';
        } else {
            //LIVE MODE ENDPOINT
            //$wpcEndpoint = 'https://secure.worldpaymentscorp.com/redirect-service';
            $wpcEndpoint = 'https://secure.nnber.com/redirect-service';
        }
        
        //Request token from wpc redirect service
        $requestTokenEndpoint = $wpcEndpoint.'/request-token';
        
        //Build request parameters
        $params =  array(
            'merchantName' => $wpcMerchantUserName,
            'merchantSecretKey' => $wpcMerchantSecretKey,
            'merchantToken' => time(),                                  //You can change it by your unique token builder
            'merchantReferenceCode' => 'Your ordered services details',  //Replace it by your description
            'userEmail' => $_POST["email"],                           //Replace it by your buyer email
            'amount' => (float)$_POST["amount"],                                           //Replace it by your total amount
            'currencyCode' => $_POST["currencyCode"],                                    //Replace it by your currency code
            'returnUrl' => 'https://snskhanresources.com/worldPaymentsCorpResponse.php?wpcAction=success',   //Replace it by your return call back url
            'cancelUrl' => 'https://snskhanresources.com/worldPaymentsCorpResponse.php?wpcAction=error',   //Replace it by your cancel call back url
            'item_0_amt' => (float)$_POST["amount"], //Replace it by your amount of item_1
            'item_0_name' => $_POST["serviceTitle"], //Replace it by your name of item_1
            'item_0_qty' => '1'
        );
        $params['sig'] = generateSignatureWpc($requestTokenEndpoint, $params, $wpcMerchantSecretKey);
        
        //Call to Secure WorldPaymentsCorp Service to request token
        // echo $errorMessage;
        $reply = callWpc($requestTokenEndpoint, $params, $errorCode, $errorMessage);
        
        // echo $errorMessage;
        
        if ($reply != null && $reply->isSuccessful == 'true') {
            //Did request token successfully!
        
            $token = $reply->token;
        
            //Redirect your buyer to the Secure WorldPaymentsCorp Webscreen to make payment
            $redirectEndpoint = $wpcEndpoint.'/webscreen?token='.$token;
        
            header('Location:'.$redirectEndpoint);
        
            //After the buyer charged, the Secure WorldPaymentsCorp will redirect to your return callback url
            //If the buyer cancel payment, the Secure WorldPaymentsCorp will redirect to your cancel callback url
        }
        else {
            //Error handling
        
            if ($reply) {
                echo '<p>We\'ve got some errors retrieving from WPC service.</p>';
                echo '<p>- Error Code: ' . $reply->errorCode . '</p>';
                echo '<p>- Error Message: ' . $reply->message . '</p>';
                if (isset($reply->errorField)) {
                    echo '<p>- Error Field: ' . $reply->errorField . '</p>';
                }
            }
            else if (!empty($errorMessage)) {
                echo '<p>We\'ve got some errors when connecting to Secure WPC service.</p>';
                echo '<p>- Error Code: ' . $errorCode . '</p>';
                echo '<p>- Error Message: ' . $errorMessage . '</p>';
            }
        
        }
        
    }
    else{
        die("Something went wrong.");
    }
}
else{
    header("Location:../index.php");
}



