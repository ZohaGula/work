<?php

	$u_name   = htmlspecialchars($_POST['u_name']);
	$product    = htmlspecialchars($_POST['product']);
	$userIP    = htmlspecialchars($_POST['userIP']);
    $txtmessage     = htmlspecialchars($_POST['message']);
    $Phone     = htmlspecialchars($_POST['Phone']);    
	$emailAddress   = htmlspecialchars($_POST['emailAddress']);

    $to      = '';
    $subject = '[SNS KHAN RESOURCES] Contact Message';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'To: Rahat Gul <rahatgul114@icloud.com>' . "\r\n";
    $headers .= 'From: SNS KHAN RESOURCES <support@snskhanresources.com>' . "\r\n" .
        'Reply-To: support@snskhanresources.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $message  = '<br><br>';
    $message .= '<table border="1" cellspacing="0" cellpadding="8">';
    $message .= '<tr><th style="text-align:left; background="#5fd097;">User Name : </th> <td>'. $u_name .'</td></tr>';
    $message .= '<tr><th style="text-align:left; background="#5fd097;">Product Name : </th> <td>'. $product .'</td></tr>';
    $message .= '<tr><th style="text-align:left; background="#5fd097;">Email Address : </th> <td>'. ((strlen($emailAddress) > 0) ? $emailAddress : "Not provided") .'</td></tr>';
    $message .= '<tr><th style="text-align:left; background="#5fd097;">User IP : </th> <td>'. $userIP .'</td></tr>';
    $message .= '<tr><th style="text-align:left; background="#5fd097;">Phone : </th> <td>'. $Phone .'</td></tr>';
    $message .= '<tr><th style="text-align:left; background="#5fd097;">Message : </th> <td>'. $txtmessage .'</td></tr>';    
    $message .= '</table>';
    mail($to, $subject, $message, $headers);
	$response_msg = array ("status"=>true);

    echo json_encode($response_msg);
?> 