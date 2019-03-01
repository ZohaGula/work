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
		$sql = "SELECT * FROM secretkeys WHERE isactive = 1 AND secretcode = '".$_POST['secret']."' LIMIT 1";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			die(json_encode([
				'status' => 1
			]));
	
		} else {
			die(json_encode([
				'status' => 0
			]));	
		}
	}

?>