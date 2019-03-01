<?php

/**
 * Helper function to generate a signature string for Secure WorldPaymentsCorp request
 * @param string $endpoint
 * @param array $params
 * @param string $secretKey
 * @return string
 */
function generateSignatureWpc($endpoint, $params, $secretKey)
{
    ksort($params);
    $sig = $endpoint.'?'.http_build_query($params);
    return hash_hmac('sha512', $sig, $secretKey, false);
}

/**
 * Helper function to call to Secure WorldPaymentsCorp service
 * @param string $endpoint
 * @param array $params
 * @param integer $errorNo
 * @param string $errorMessage
 * @return mixed|null
 */
function callWpc($endpoint, $params, &$errorNo = 0, &$errorMessage = '')
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));

    $resultString = curl_exec ($ch);
    
    // var_dump($resultString);exit;

    if (curl_errno($ch)) {
        $errorNo = curl_errno($ch);
        $errorMessage = curl_error($ch);
        curl_close($ch);
        
        // exit;
        return null;
    }

    curl_close($ch);

    return json_decode($resultString);
}