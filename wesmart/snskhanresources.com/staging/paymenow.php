<?php
    if( ! isset($_POST['_pay']) ){
        header('Location:index.php');
    }

    $data_id = $_POST['data_id'];
    $serviceTitle = $_POST['serviceTitle'];
    $amount = $_POST['amount'];
    $fulName = $_POST['fulName'];
    $Address = $_POST['Address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $postalCOde = $_POST['postalCOde'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $currencyCode = $_POST['currencyCode'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h5>Loading...</h5>
    </center>
    
<form action="http://staging.doku.com/Suite/Receive" method="post" id="ckout">
    <input name="MALLID" type="hidden" value="5472" >
    <input name="BASKET" type="hidden" value="<?php echo $serviceTitle; ?>" >
    <input name="CHAINMERCHANT" type="hidden" value="NA" >
    <input name="AMOUNT" type="hidden" value="<?php echo $amount; ?>" >
    <input name="PURCHASEAMOUNT" type="hidden" value="<?php echo $amount; ?>" >
    <input name="TRANSIDMERCHANT" type="hidden" value="<?php echo $data_id; ?>" >
    <input name="WORDS" type="hidden" value="bf60356e2e41eff0d561c88e8b4386dc496b48ff" >
    <input name="CURRENCY" type="hidden" value="360" >
    <input name="PURCHASECURRENCY" type="hidden" value="360" >
    <input name="COUNTRY" type="hidden" value="<?php echo $country; ?>" >
    <input name="SESSIONID" type="hidden" value="<?php echo $data_id; ?>" >
    <input name="REQUESTDATETIME" type="hidden" value="<?php echo time(); ?>" >
    <input name="NAME" type="hidden" value="<?php echo $fulName; ?>" >
    <input name="EMAIL" type="hidden" value="<?php echo $email; ?>">
    <input name="PAYMENTCHANNEL" type="hidden" value="15" >
</form

    <script src="js/jquery-1.11.0.min.js"></script>
    <script>
        // $("#ckout").submit();
        document.getElementById("ckout").submit();
    </script>
</body>
</html>
