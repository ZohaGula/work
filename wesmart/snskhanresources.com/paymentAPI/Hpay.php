<center>Loading...</center>
<?php
// echo "<pre>";
// var_dump($_POST);
/*
    MerchantKey = “apple”
    MerchantCode = “M00003”
    RefNo = “A00000001” // orderID
    Amount = “1.00” (Note: Remove the “.” and “,” in the string before hash)
    Currency = “MYR”
    The hash would be calculated on the following string:
    appleM00003A00000001100MYR
*/

if( isset($_POST['hpayconfirm']) ){

    $orderid      = $_POST['orderid']."TM".time().rand(1111,9999);

    $split_amount = str_replace(
        ".", 
        "",
        str_replace(
            ",", 
            '', 
            str_replace("MYR", '', $_POST['amount'])
            // str_replace("MYR", '', "1.00")
        ) 
    );
    
    $split_amount_currency = str_replace(
        ",", 
        '', 
        str_replace("MYR", '', $_POST['amount'])
    );
    // $split_amount_currency = "1.00";
    // echo $split_amount;

    $token              = "mzXikXdxQ8M14621".$orderid;
    $currency           = "MYR";
    $signature          = $token.$split_amount.$currency;
    $generateSignature  = iPay88_signature($signature);


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


    $fulName        = $_POST['​bill_name'];
    $_date          = $_POST['_date'];
    $amount         = $split_amount_currency;
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
    $service_name   = htmlspecialchars($_POST['serviceTitle3']);
    $paymentGateway = "Hpay";

    $sql = "INSERT INTO sands_table (fullname, _DOB, amount, phone,currency , _email,_address,postalCode,city,state,country , _dateTime , secretCode,service_name, order_id, sending_signature, paymentGateway) 
                VALUES ('$fulName','$_date','$amount','$phone','$currencyCode', '$email', '$address', '$postalCode', '$city', '$state', '$country', '$_dateTime', '$secret','$service_name', '$orderid', '$generateSignature', '$paymentGateway')" or die('error in data'.mysqli_error());
            
    $run_insert = mysqli_query($con,$sql);
    // die($sql);
    if($run_insert){        
    
        echo '
        <FORM method="post" id="ePayment" name="ePayment" action="https://www.mobile88.com/ePayment/entry.asp">
            <INPUT type="hidden" name="MerchantCode" value="M14621">
            <INPUT type="hidden" name="PaymentId" value="">
            <INPUT type="hidden" name="RefNo" value="'.$orderid.'">
            <INPUT type="hidden" name="Amount" value="'.$split_amount_currency.'">
            <INPUT type="hidden" name="Currency" value="MYR">
            <INPUT type="hidden" name="ProdDesc" value="'.$_POST["serviceTitle3"].'">
            <INPUT type="hidden" name="UserName" value="'.$_POST["​bill_name"].'">
            <INPUT type="hidden" name="UserEmail" value="'.$_POST["​bill_email"].'">
            <INPUT type="hidden" name="UserContact" value="'.$_POST["bill_mobile"].'">
            <INPUT type="hidden" name="Remark" value="">
            <INPUT type="hidden" name="Lang" value="UTF-8">
            <INPUT type="hidden" name="Signature" value="'.$generateSignature.'">
            <INPUT type="hidden" name="ResponseURL" value="https://snskhanresources.com/response.php">
            <INPUT type="hidden" name="BackendURL" value="https://snskhanresources.com/backend_response.php">
        </FORM>
        <script>
            var form = document.querySelector("#ePayment");
            form.submit();
        </script>
        ';
    }
    else{
        die("Something went wrong.");
    }
}
else{
    header("Location:../index.php");
}


/**
 * Hash
 */
function iPay88_signature($source)
{
    return base64_encode(hex2bin(sha1($source)));
}

if (!function_exists('hex2bin')){
    function hex2bin($hexSource)
    {
        for ($i=0;$i<strlen($hexSource);$i=$i+2)
        {
          $bin .= chr(hexdec(substr($hexSource,$i,2)));
        }
      return $bin;
    }
}