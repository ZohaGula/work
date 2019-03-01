<?php

    if ( empty($_POST) )
	{
		echo "Stop : Access Not Valid";
		die;
    }

    // echo '<pre>';
    // var_dump($_POST);
    
    //exit;
    
    $trx['words']                = $_POST['WORDS'];
	$trx['amount']               = $_POST['AMOUNT'];
	$trx['transidmerchant']      = $_POST['TRANSIDMERCHANT']; 
	$trx['PURCHASECURRENCY']     = $_POST['PURCHASECURRENCY']; 
    $trx['status_code']          = $_POST['STATUSCODE'];
    $trx['TRANSIDMERCHANT']      = $_POST['TRANSIDMERCHANT'];
    

    $message = '';

$con = mysqli_connect('localhost', 'snskhan_dbuser', 'snskhan_dbuser123' , 'snskhan_Db') or die('not connected'.mysqli_error());
// $con = mysqli_connect('localhost', 'root', 'root' , 'sandskha_db') or die('not connected'.mysqli_error());
if(!$con){
	#echo "<script> swal('Oops !','Error in Database Connection', 'error');</script>";
	#die("unable to connect to server");
	echo array("status" => false, "message" => "Invalid User Credentials");
	die("Invalid db credentials");
} 
if(!mysqli_select_db($con, 'snskhan_Db')){
	echo array("status" => false, "message" => "Invalid User Credentials");
	die("Invalid db credentials");
}

    if( $trx['status_code'] == '0000' ){
        $amt =  (int) $trx['amount'];
        $sql = "SELECT * FROM sands_table WHERE id = {$trx['TRANSIDMERCHANT']} AND amount = {$amt}";
        $query = mysqli_query($con,$sql);

        if ($query->num_rows > 0) {
            $usql = "UPDATE sands_table SET status_code={$trx['status_code']}, payment_status = 'success' WHERE id={$trx['TRANSIDMERCHANT']}";
            if (mysqli_query($con, $usql)) {
                $message = 'Your payment has been successfull';
            }
        }

        // var_dump( $query );
    }
    else{
        $usql = "UPDATE sands_table SET status_code={$trx['status_code']}, payment_status = 'failed/error', comment = 'Your payment has been hold, something went wrong!' WHERE id={$trx['TRANSIDMERCHANT']}";
        if (mysqli_query($con, $usql)) {
            $message = 'Your payment has been hold, something went wrong!';
        }
    }

    echo "<h4>".$message."</h4>";

?>

<script>    
    setTimeout(() => {
        window.location.href = '../';
    }, 3000);
</script>