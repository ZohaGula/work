<?php

    // var_dump($_REQUEST);exit;

	if (!isset($_GET['token'])) {
		echo 'Missing token parameter!';
		return;
	}

	require_once ('./paymentAPI/functions.php');

	$wpcTestMode = false;
	//$wpcMerchantUserName = 'wvd_lindquistke460n0uwbe70d47vwr';     //Replace it by your vendor user name
	//$wpcMerchantSecretKey = 'LKykWm21Ypl|05N5CldeiKPKJrbPPiYx^tRVPUXKfeJgkslWOz62gWNZkZL5eFDc4q4Uh_AwcgMwJ4ptDvwTogPIcwOq7nDcOH31FExSUgkzkK|YcvOAMzfY1|k9mXm7';   //Replace it by your vendor secret key
	$wpcMerchantUserName = 'wvd_lindquistke460n0uwbe70d47vwr';     //Replace it by your vendor user name
	#$wpcMerchantSecretKey = '2q|nfzH_EINbZgow5_^H0M35VlV^D1bGsb|HLHFllpxhFVNLSLoSurXlNPkmQw|eH^WpGxL^Wefy5|fYLENb2HxPsS7fk7u^6nnMV4KNi-ioZxiH72S9JlY892nuaSsg';
	$wpcMerchantSecretKey = 'd7qNx|jlVVKBPrCuJ9|-8T1XpXUSu|EI61sD0MZWDFtp32TNcTJkIKe3D4W43wNaxbOyYJqxlUWpXM85BRqfyEj8JbcNI-Yc7JK1o7zK^s5Vad_L1n_z^gHIsUs7QmjY';   
	if ($wpcTestMode) {
		//TEST MODE ENDPOINT
		$wpcEndpoint = 'https://securetest.worldpaymentscorp.com/redirect-service';
	} else {
		//LIVE MODE ENDPOINT
		// $wpcEndpoint = 'https://secure.worldpaymentscorp.com/redirect-service';
		$wpcEndpoint = 'https://secure.nnber.com/redirect-service';
	}

	//Get the transaction detail from Secure WorldPaymentsCor
	$purchaseDetailsEndpoint = $wpcEndpoint.'/purchase-details';

	$token = $_GET['token'];

	$params =  array(
		'merchantName' => $wpcMerchantUserName,
		'merchantSecretKey' => $wpcMerchantSecretKey,
		'token' => $token,
	);
	$params['sig'] = generateSignatureWpc($purchaseDetailsEndpoint, $params, $wpcMerchantSecretKey);

	$reply = callWpc($purchaseDetailsEndpoint, $params, $errorCode, $errorMessage);

    //var_dump($reply);exit;

	if ($reply != null && $reply->isSuccessful == 'true') {
		echo '
			<script> 
				var WPCErrorState = false;
				var transactionId =  "'.$reply->transactionId.'" ;  
				var token = "'.$reply->token.'";  
				var requestId =  "'.$reply->requestId.'" ; 
			</script>';
	}
	else {
		if (count($reply)) {
		    $errorMsg = @$reply->errorMessage;
		    
		    $errorMsg = $errorMsg ? $errorMsg : $reply->message;
		    
		    //var_dump($errorMsg);exit;
		    
			echo '
				<script> 
					var WPCErrorState = true;
					var errorCode = "'.$reply->errorCode.'";  
					var errormessage = "'.$errorMsg.'";
				</script>';
		
		}
		else if (!empty($errorMessage)) {
			echo '
				<script> 
					var WPCErrorState = true;
					var errorCode = "'.$errorCode.'"
					var errormessage = "'.$errorMessage.'"
				</script>';
		}
		elseif( $reply == null ) {
		    echo '
				<script> 
					var WPCErrorState = true;
					var errorCode = "unknown"
					var errormessage = "Payment is not valid yet."
				</script>';
		}
	}
?>


<!DOCTYPE HTML>
<html>

<head>
	<title> S&S Khan Resources</title>
	<link rel="shortcut icon" href="images/Final1.png" style="height: 80px;" type="image/x-icon" />
	<script src="js/jquery-1.11.0.min.js"></script>
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />


	<style>
		h1{
			text-align : center;
		}
		h3{
			margin-top : 1em;
		}
		.wrapperEl{
			width: 70%;
			min-width : 60em;
			margin : 4em auto;
			padding : 1.5em;
			background-color: rgba(255, 255, 255, 0.5);
			border-radius: 0.5em;
		}
		.wrapperEl.Error{
			box-shadow: 0 0 2em red;
		}
		.wrapperEl.Success{
			box-shadow: 0 0 2em darkgreen;
		}
	</style>

	<script>
		
		$(function(){
			var $responseViewer = $("#responseViewer");
			if(window.WPCErrorState){
				$responseViewer.html(" <h1>Your transaction has been failed due to an Error.</h1> <br> <h3>Error Description : "+ window.errormessage +"</h3> <h3>Error Code : "+ window.errorCode +"</h3> ").addClass("Error");
			} else {
				$responseViewer.html(" <h1>Transaction Done Successfully.</h1> <br> <h3>Transaction ID : "+ window.transactionId +"</h3> <h3>Token : "+ window.token +"</h3> <h3>Request ID : "+ window.requestId +"</h3> ").addClass("Success");
			}

			$(".wrapperEl").addClass("wow bounceInRight animated");

			setTimeout(function() {
				window.location.href = "/";
			}, 15000);
		});
	</script>
</head>


<body>
	<div class="banner">
		<div class="container">
			<div class="banner-main">
				<div class="logo" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInLeft;">
					<a href="index.html">
						<img src="images/Final1.png" height="80px;">
					</a>
					<p style="color: white; font-family: cursive;"> We are a dedicated gathering with broad experience of business and specialized operations out in the open part and business
						affiliations.
					</p>
				</div>

				<div class="clearfix"> </div>
			</div>
			
			<div class="wrapperEl">

				<div id="responseViewer"></div>

			</div>	

		</div>
	</div>



</body>

</html>