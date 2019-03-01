<?php
    if ( empty($_POST) )
    {
        echo "Stop : Access Not Valid";
        die;
    }
    
	$trx = array();	
    $trx['words']                     = $_POST['WORDS'];
    $trx['amount']                    = $_POST['AMOUNT'];
    $trx['transidmerchant']           = $_POST['TRANSIDMERCHANT'];
    $trx['result_msg']                = $_POST['RESULTMSG'];            
    $trx['verify_status']             = $_POST['VERIFYSTATUS'];      


    echo "Continue";
?>