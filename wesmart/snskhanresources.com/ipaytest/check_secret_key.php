<?php

if( isset($_POST['secret']) ){
	$con = mysqli_connect('localhost', 'snskhan_dbuser', 'snskhan_dbuser123' , 'snskhan_Db') or die('not connected'.mysqli_error());
// 	$con = mysqli_connect('localhost', 'root', 'root' , 'sandskha_db') or die('not connected'.mysqli_error());
	if(!$con){
	    die("Invalid mysql credentials");
	} 
	if(!mysqli_select_db($con, 'snskhan_Db')){
	    die("Invalid db credentials");
	}
// 	if(!mysqli_select_db($con, 'sandskha_db')){
// 	    die("Invalid db Name");
// 	}

	$sql 	= "SELECT * FROM snskhan_subscription WHERE type = 'snskhanresources' AND code = '".$_POST['secret']."' LIMIT 1";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) {
		die(json_encode([
			'status' => 1
		]));	
	}
	else{
		die(json_encode([
			'status' => 0
		]));
	}
}	
else{
	die(json_encode([
		'status' => 0
	]));
}