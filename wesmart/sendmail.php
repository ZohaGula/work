
	<?php

$u_name   = htmlspecialchars($_POST['name']);
$product    = htmlspecialchars($_POST['product']);
$userIP    = htmlspecialchars($_POST['userIP']);
$txtmessage     = htmlspecialchars($_POST['message']);
$Phone     = htmlspecialchars($_POST['phone']);    
$emailAddress   = htmlspecialchars($_POST['email']);

$to      = '';
$subject = '[WESMARTIFY EMAIL]';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To: WESMARTIFY RESOURCES <support@wesmartifyresources.com>' . "\r\n";
$headers .= 'From: WESMARTIFY RESOURCES  <support@wesmartifyresources.com>' . "\r\n" .
	'Reply-To: support@wesmartifyresources.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
$message  = '<br><br>';
$message.='<p style="text-align:center; color:#d10303">Hello <strong>WESMARTIFY RESOURCES,</strong> <br>'.$u_name.' have contacted you , Here\'s detail below. </p>';
$message .= '<table cellspacing="0" cellpadding="8" class="table bordered" style="width:100%; margin :auto;" border="1" border-color="gray">';

$message .= '<tr><th style="background-color:#d10303;">Product Name : </th> <td style="background: dimgray; width=100%">'. $product .'</td></tr>';
$message .= '<tr><th style="background-color:#d10303;">Email Address : </th> <td style="background: dimgray;width=100%"">'. ((strlen($emailAddress) > 0) ? $emailAddress : "Not provided") .'</td></tr>';
$message .= '<tr><th  style="background-color:#d10303;">User IP : </th> <td style="background: dimgray;width=100%">'. $userIP .'</td></tr>';
$message .= '<tr><th style="background-color:#d10303;">Phone : </th> <td style="background: dimgray;width=100%">'. $Phone .'</td></tr>';
$message .= '<tr><th style="background-color:#d10303;">Message : </th> <td style="background: dimgray;width=100%">'. $txtmessage .'</td></tr>';    
$message .= '</table>';

mail($to, $subject, $message, $headers);
$response_msg = array ("status"=>true);

echo json_encode($response_msg);
?> 	
	<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			table, th, td {
				    border-collapse: collapse;

}
		table th{
				width:100%;
				background: #d10303;
				color: white !important;
				font-weight: bold;
				border-bottom: red outset 2px;
			}
			table td{
				background: #333;
				border-bottom: white outset 2px;
				color : white !important;
			}
			@media (max-width: 736px) {
			table, th, td {
    border: 1px solid red;
}
		table th{
				background: #d10303;
				color: white;
				font-weight: bold;
				border-bottom: white outset 2px;
			}
		</style>
	</head>
</html>
