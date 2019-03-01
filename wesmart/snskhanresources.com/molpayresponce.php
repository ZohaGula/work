<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.9, user-scalable=no" />
    <title>S&S Khan Resources</title>
    <link rel="shortcut icon" href="images/Final1.png" style="height: 80px;" type="image/x-icon" />

</head>
<style>
    #Box {
        border: 2px solid;
        width: 50%;
        margin: 0 auto;
        margin-top: 15%
    }

    .btn {
        width: 100%;
        margin: 0 auto;
    }

    dt {
        font-size: 1.5em
    }

    dd {
        font-size: 1.5em
    }

    p {
        width: 200px;
        margin-left: 40%;
        display: block;
    }

    dl dt {
        margin-left: 0;
    }

    .button {
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .button3 {
        background-color: white;
        color: black;
        border: 2px solid;
        width: 20%
    }

    #msg {
        width: 20px;
        margin: 0 auto
    }
</style>

<body>
     <div id="Box">
        <img src="images/Final1.png" alt="" width="100">
        <div class="alert alert-warning">
            <strong id="msg"></strong>
        </div>
        <dl class="dl-horizontal">
            <dt>Order&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID</dt>
            <dd id="order_id"></dd>
            <dt>Transaction ID</dt>
            <dd id="tranId"></dd>

        </dl>
    </div>
    <br />
    <br />
    <div class="btn">
        <a href="https://snskhanresources.com/"><button class="button button3">Go Back</button></a>
    </div>
   
     <?php
$vkey ="6f20baca4db6186dbd954b9523be8690"; //Replace xxxxxxxxxxxx​ with your MOLPay Secret_Key
/********************************
*Don't change below parameters
********************************/
$tranID = $_POST['tranID'];
$orderid = $_POST['orderid'];
$status = $_POST['status'];
$domain = $_POST['domain'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$appcode = $_POST['appcode'];
$paydate = $_POST['paydate'];
$skey = $_POST['skey'];
/***********************************************************
* To verify the data integrity sending by MOLPay
************************************************************/
$key0 = md5( $tranID.$orderid.$status.$domain.$amount.$currency );
$key1 = md5( $paydate.$domain.$key0.$appcode.$vkey );
if( $skey != $key1 ) $status= -1; // Invalid transaction.

?>
    <script>
      var status = "<?php echo $status; ?>";
      var orderID = "<?php echo $orderid; ?>";
      var transID = "<?php echo $tranID; ?>";
      var date = "<?php echo $paydate; ?>";
        if(status === "-1"){
            window.location = "https://snskhanresources.com"
        }
        else if(status === "11"){
            document.getElementById('msg').innerHTML = "Your Payment Is Failed ⚠⚠";
            document.getElementById('order_id').innerHTML = orderID;
            document.getElementById('tranId').innerHTML = transID;
        }
        else if(status === "22"){
            document.getElementById('msg').innerHTML = "Your Payment Is Pending";
            document.getElementById('order_id').innerHTML = orderID;
            document.getElementById('tranId').innerHTML = transID;
        }
        else{
            document.getElementById('msg').innerHTML = "Your payment has been processed successfully ✓✓";
            document.getElementById('order_id').innerHTML = orderID;
            document.getElementById('tranId').innerHTML = transID;
        }
        

    </script>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />


</body>

</html>