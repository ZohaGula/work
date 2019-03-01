<?php   


if( isset($_POST['molpaySubmit']) ){

    $orderid      = $_POST['orderid']."TM".time().rand(1111,9999);

    $con = mysqli_connect('localhost', 'wesmarti_snsUser', 'snskhan@321' , 'wesmarti_sns_Db') or die('not connected'.mysqli_error());
    // $con = mysqli_connect('localhost', 'root', 'root' , 'sandskha_db') or die('not connected'.mysqli_error());
    if(!$con){
        die("Invalid mysql credentials");
    } 
    if(!mysqli_select_db($con, 'wesmarti_sns_Db')){
        die("Invalid db credentials");
    }
    // if(!mysqli_select_db($con, 'sandskha_db')){
    //     die("Invalid db Name");
    // }


    $fulName        = $_POST['​bill_name'];
    $_date          = $_POST['_date'];
    $amount         = $_POST['amount'];
    $email          = $_POST['​bill_email'];
    $phone          = $_POST['bill_mobile'];
    $currencyCode   = 'MYR';
    $address        = $_POST['addr'];
    $postalCode     = $_POST['zipcode'];
    $city           = $_POST['city'];
    $state          = $_POST['state'];
    $country        = $_POST['s_country'];
    $_dateTime      = date("F d, Y h:i:s A");
    $secret         = htmlspecialchars($_POST['secret']);
    $service_name   = htmlspecialchars($_POST['serviceTitle2']);
    $paymentGateway = "molpay";

    $sql = "INSERT INTO sands_table (fullname, _DOB, amount, phone,currency , _email,_address,postalCode,city,state,country , _dateTime , secretCode,service_name, order_id, sending_signature, paymentGateway) 
                VALUES ('$fulName','$_date','$amount','$phone','$currencyCode', '$email', '$address', '$postalCode', '$city', '$state', '$country', '$_dateTime', '$secret','$service_name', '$orderid', '$generateSignature', '$paymentGateway')" or die('error in data'.mysqli_error());
            
    $run_insert = mysqli_query($con,$sql);
    // die($sql);
    if($run_insert){        
        $orderid    = $_POST['orderid'];
        $amount     = $_POST['amount'];
        $merchantID = "snskhan";
        $verifykey  = "6e9b7870a0c35497aafca651ecf4cc17";
        $vcode      = md5( $amount.$merchantID.$orderid.$verifykey );   

        while ( list($k,$v) = each($_POST) ) 
            {
                $postData[]= $k."=".$v;
                // echo $k."=".$v;
            }
            $postdata 	=implode("&",$postData);
            $postdata = $postdata . '&vcode='.$vcode;
            $url 		="https://www.onlinepayment.com.my/MOLPay/pay/snskhan/?";
            
            header('Location: '.$url .$postdata);
    }
    else{
        die("Something went wrong.");
    }
}
else{
    header("Location:../index.php");
}

/*
if(isset($_POST)){

    $orderid    = $_POST['orderid'];
    $amount    = $_POST['amount'];
    $merchantID = "snskhan";
    $verifykey = "6e9b7870a0c35497aafca651ecf4cc17";
    $vcode = md5( $amount.$merchantID.$orderid.$verifykey );   
    while ( list($k,$v) = each($_POST) ) 
		{
			$postData[]= $k."=".$v;
            // echo $k."=".$v;
		}
		$postdata 	=implode("&",$postData);
        $postdata = $postdata . '&vcode='.$vcode;
		$url 		="https://www.onlinepayment.com.my/MOLPay/pay/snskhan/?";
		
        header('Location: '.$url .$postdata);
}*/

?> 

