<?php

// echo "<pre>";
// var_dump($_REQUEST);

$refno 			= $_REQUEST["RefNo"];
$merchantcode 	= !empty($_REQUEST["MerchantCode"]) ? $_REQUEST["MerchantCode"] : 0;
$paymentid 		= !empty($_REQUEST["PaymentId"]) ? $_REQUEST["PaymentId"] : 0;
$amount 		= !empty($_REQUEST["Amount"]) ? $_REQUEST["Amount"] : 0;
$ecurrency 		= !empty($_REQUEST["Currency"]) ? $_REQUEST["Currency"] : 0;
$remark 		= !empty($_REQUEST["Remark"]) ? $_REQUEST["Remark"] : 0;
$transid 		= !empty($_REQUEST["TransId"]) ? $_REQUEST["TransId"] : 0;
$authcode 		= !empty($_REQUEST["AuthCode"]) ? $_REQUEST["AuthCode"] : 0;
$estatus 		= !empty($_REQUEST["Status"]) ? $_REQUEST["Status"] : 0;
$errdesc 		= !empty($_REQUEST["ErrDesc"]) ? $_REQUEST["ErrDesc"] : 0;
$signature 		= !empty($_REQUEST["Signature"]) ? $_REQUEST["Signature"] : 0;

if( !empty($refno) ){
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

    $sql 	= "SELECT * FROM sands_table WHERE order_id = '".$refno."' AND payment_status = 'pending' LIMIT 1";
    $result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    $row = mysqli_fetch_assoc($result);

	    # validation
	    if( $row['amount'] == $amount ){
	    	
	    	# update 
	    	$usql = "UPDATE sands_table SET gateway_signature = '".$signature."', payment_status = 'processing', TransId = '".$transid."', PaymentId = '".$paymentid."', status_code = '".$estatus."', comment = '".$errdesc."' WHERE id =".$row['id'];

	    	$uresult = mysqli_query($con, $usql);

	    	if ($uresult === TRUE) {
	    		# success payment
	    		if( $estatus == 1 ){
	    			$usql = "UPDATE sands_table SET payment_status = 'success' WHERE id =".$row['id'];

	    			$uresult = mysqli_query($con, $usql);

	    			echo "<center>PAYMENT SUCCESSFULL</center>";
	    		}
	    		else{
	    			echo "<center>".$errdesc."</center>";
	    		}	    		
	    	}
	    	else{
	    		echo "<center>FAILED !! Something went wrong.</center>";
	    	}
	    }
	    else{
	    	echo "<center>INVALID AMOUNT</center>";
	    }

	}
	else {
	    echo "<center>INVALID ORDER</center>";
	}

}
else{
	// invalid trx
	echo "<center>INVALID TRANSACTION</center>";
}

echo "<br><center><a href='index.php'>BACK</a></center>";

echo '
	<script>
		setTimeout(function(){
			if( confirm("Do you want to go back to home page ?") ){
				window.location.href = "index.php";
			}
		}, 2000);
	</script>
';