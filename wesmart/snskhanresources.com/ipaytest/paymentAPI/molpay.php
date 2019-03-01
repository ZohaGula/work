<?php   


if(isset($_POST)){

    $orderid    = $_POST['orderid'];
    $amount    = $_POST['amount'];
    $merchantID = "snskhan";
    $verifykey = "6e9b7870a0c35497aafca651ecf4cc17";
    $vcode = md5( $amount.$merchantID.$orderid.$verifykey );   
    while ( list($k,$v) = each($_POST) ) 
		{
			$postData[]= $k."=".$v;
            // echo $k."=".$v;
		}
		$postdata 	=implode("&",$postData);
        $postdata = $postdata . '&vcode='.$vcode;
		$url 		="https://www.onlinepayment.com.my/MOLPay/pay/snskhan/?";
		
        header('Location: '.$url .$postdata);
}

?> 

