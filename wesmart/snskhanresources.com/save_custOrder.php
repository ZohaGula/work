
<?php
		
$con = mysqli_connect('localhost', 'wesmarti_snsUser', 'snskhan@321' , 'wesmarti_sns_Db') or die('not connected'.mysqli_error());
// $con = mysqli_connect('localhost', 'root', 'root' , 'sandskha_db') or die('not connected'.mysqli_error());
if(!$con){
	#echo "<script> swal('Oops !','Error in Database Connection', 'error');</script>";
	#die("unable to connect to server");
	echo array("status" => false, "message" => "Invalid User Credentials");
	die("Invalid db credentials");
} 
if(!mysqli_select_db($con, 'wesmarti_sns_Db')){
	echo array("status" => false, "message" => "Invalid User Credentials");
	die("Invalid db credentials");
}
$response_msg = array ("status"=>false);

$fulName = $_POST['fulName'];
$_date = $_POST['_date'];
$amount = $_POST['amount'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$currencyCode = $_POST['currencyCode'];
$address = $_POST['Address'];
$postalCode = $_POST['postalCOde'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$_dateTime = date("F d, Y h:i:s A");
$secret = htmlspecialchars($_POST['secret']);
$service_name = htmlspecialchars($_POST['serviceTitle']);
$paymentGateway = htmlspecialchars($_POST['paymentGateway']);

/*if($secret=="36247548"){
		echo "<script> swal('Oops !', 'Error in Code', 'error');</script>";
		die();
}*/

$sql = "INSERT INTO sands_table (fullname, _DOB, amount, phone,currency , _email,_address,postalCode,city,state,country , _dateTime , secretCode,service_name, paymentGateway) 
			VALUES ('$fulName','$_date','$amount','$phone','$currencyCode', '$email', '$address', '$postalCode', '$city', '$state', '$country', '$_dateTime', '$secret','$service_name' ,'$paymentGateway')" or die('error in data'.mysqli_error());
		
		$run_insert = mysqli_query($con,$sql);

	if($run_insert){
		$response_msg = array ("status"=>true, "data" => mysqli_insert_id($con));
	}
	else{
		$response_msg['message'] = mysqli_error($con);
	}


	echo json_encode($response_msg);
?>