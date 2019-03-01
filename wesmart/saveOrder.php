<?php

	$con = mysqli_connect('localhost', 'wesmarti_user', 'wesmartify_user' , 'wesmarti_db') or die('not connected'.mysqli_error());
	if(!$con){
		die(json_encode([
			'status' => 0,
			`message` => "Invalid db credentials"
		]));	
	} 
	if(!mysqli_select_db($con, 'wesmarti_db')){
		die(json_encode([
			'status' => 0,
			`message` => "Invalid db credentials"
		]));	
	} else {
		$response_msg = array ("status"=>false);
		$fullname = $_POST['fulName'];
		$_date = $_POST['birthDate'];
		$amount = $_POST['amount'];
		$email = $_POST['emailField'];
		$phone = $_POST['phone'];
		$currencyCode = $_POST['currencyCode'];
		$address = $_POST['address'];
		$postalCode = $_POST['postalCode'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		$secretcode = $_POST['secret'];
		$_dateTime = date("F d, Y h:i:s A");

		$sql = "INSERT INTO orders ".
				"(fullname, DOB, amount, currency, phone, email, address, postalcode, city, state, country, secretcode) VALUES ".
				"(\"$fullname\", \"$_date\", \"$amount\", \"$currencyCode\", \"$phone\", \"$email\", \"$address\", \"$postalCode\", \"$city\", \"$state\", \"$country\", \"$secretcode\")" 
				or die('error in data'.mysqli_error());

		$run_insert = mysqli_query($con,$sql);

		if($run_insert){
			$response_msg = array ("status"=>true, "data" => mysqli_insert_id($con));
		}
		else{
			$response_msg['message'] = mysqli_error($con);
			$response_msg['sql'] = $sql;
		}

		echo json_encode($response_msg);	
	}
?>