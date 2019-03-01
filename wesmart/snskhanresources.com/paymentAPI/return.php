<?php

if (!isset($_GET['token'])) {
    echo 'Missing token parameter!';
    return;
}

require_once ('functions.php');

//World Payments Corp Config
$wpcTestMode = true;
$wpcMerchantUserName = '<your_merchant_user_name>'; //Replace it by your merchant user name
$wpcMerchantSecretKey = '<your_merchant_secret_key>'; //Replace it by your merchant secret key
if ($wpcTestMode) {
    //TEST MODE ENDPOINT
    $wpcEndpoint = 'https://securetest.worldpaymentscorp.com/redirect-service';
} else {
    //LIVE MODE ENDPOINT
    $wpcEndpoint = 'https://secure.worldpaymentscorp.com/redirect-service';
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

//Call to Secure WorldPaymentsCorp Service to get the transaction details
$reply = callWpc($purchaseDetailsEndpoint, $params, $errorCode, $errorMessage);

if ($reply != null && $reply->isSuccessful == 'true') {
    //Charged successfully!

    echo '<p>Successfully charged!</p>';
    echo '<p>Timestamp: '.$reply->timestamp.'</p>';
    echo '<p>Transaction ID: '.$reply->transactionId.'</p>';
    echo '<p>Token: '.$reply->token.'</p>';
    echo '<p>Request ID: '.$reply->requestId.'</p>';
}
else {
    //Error handling
    if ($reply) {
        echo '<p>We\'ve got some errors retrieving from WPC service.</p>';
        echo '<p>- Error Code: ' . $reply->errorCode . '</p>';
        echo '<p>- Error Message: ' . $reply->message . '</p>';
        if (isset($reply->errorField)) {
            echo '<p>- Error Field: ' . $reply->errorField . '</p>';
        }
    }
    else if (!empty($errorMessage)) {
        echo '<p>We\'ve got some errors when connecting to Secure WPC service.</p>';
        echo '<p>- Error Code: ' . $errorCode . '</p>';
        echo '<p>- Error Message: ' . $errorMessage . '</p>';
    }
}