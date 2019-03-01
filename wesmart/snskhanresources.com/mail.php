<?php

if(!empty($_POST['data']))
{

    require 'lib/PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = '*';
    $mail->SMTPAuth = '*'; 
    $mail->Username = '*';
    $mail->Password = '*';          
    $mail->SMTPSecure = '*';                           
    $mail->Port = '*';                                   

    $mail->setFrom('*', '*');
    $mail->addAddress('*', '*');   

    //=== Tested this
    $originalbase = $base;
    //=== or this
    $base = explode('data:application/pdf;base64,', $_POST['data']);
    $mail->addStringAttachment($originalbase, "name.pdf", "base64", "application/pdf");

    $mail->isHTML(true);                              

    $mail->Subject = '*';
    $mail->Body    = '*';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

} else echo "No Data Found"; 

?>