<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="images/logo.png" >
    <title>WESMARTIFY RESOURCES</title>
    <meta name="description" content="We smartly deal your needs">
    <meta name="keywords" content="Smart solutions to financial or or software products">
    <meta name="author" content="wesmartify">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Template CSS Files
    ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- template main css file -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <script src="js/jquery.min.js"></script>

    <?php

        if(isset($_POST['TxnMessage'])){
            $msg = strtoupper($_POST['TxnMessage']);
            $con = mysqli_connect('localhost', 'wesmarti_user', 'wesmartify_user' , 'wesmarti_db') or die('not connected'.mysqli_error());
            $update_query = "";
            if($msg == "TRANSACTION+FAILED" || $msg == "TRANSACTION FAILED"){
                $update_query ="UPDATE orders SET paymentstatus=-1 WHERE id=". $_POST['PaymentID'];
            } else {
                $update_query ="UPDATE orders SET paymentstatus=1 WHERE id=". $_POST['PaymentID'];
            }
            mysqli_query($con, $update_query);
            echo '<script>console.log( TxnID ' + $_POST['TxnID'] + ')</script>';
        }
    ?>
    <script>
    var txnMessage  = ""
    var txnID       = ""
    var isTransactionFailed = false;
    try{
        txnMessage  = '<?php echo $_POST['TxnMessage'];?>';
        txnID       = '<?php echo $_POST['TxnID'];?>';
    } catch (e){
        console.log("error ", e);
    }




    $(function(){

        setTimeout(function() {
            window.location.href = "/";
        }, 8 * 1000);

        if(txnMessage && (["TRANSACTION+FAILED", "TRANSACTION FAILED"].indexOf(txnMessage.toUpperCase()) > -1) ){
            isTransactionFailed = true;

            var newMessage = "<h1>Transaction failed</h1><p>Sorry for your inconvenience, due to an error your transaction has been failed.</p>";
            if(txnID){
                newMessage += "<p> Transaction ID : "+ txnID +".</p>"
            }

            $("div.privacy_heading").html(newMessage);
        }

        if(isTransactionFailed){
            $("div.privacy_heading").addClass("ErrorFields");
        }
    });

    </script>



    <style>
    .privacy_heading{
        font-family: 'Raleway', sans-serif;
        font-weight: 300;
        color: grey;
        margin-top:10em;
        text-align:center;
    }
    .privacy_heading.ErrorFields{
        color: red;
        font-size: 1.4em;
        font-weight:bold;
    }
    </style>


</head>
<body>

        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.html" >
                            <img src="images/logo.png" class="img-responsive" width="140px;" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html" class="fa fa-home" >Home</a>
                    </li>
                    <li><a href="about.html" class="fa fa-pencil-square">About</a></li>
                    <li class="dropdown">
                        <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Services<span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a  href="mobileapp.html">Mobile Application <i class="fa fa-mobile-phone"></i> </a></li>
                                <li><a href="seo.html">SEO Services <i class="fa fa-search"></i></a></li>
                                <li><a href="softdev.html">Software Development. <i class="fa fa-code"></i></a></li>
                                <li><a href="webDev.html">Web Development & Designing <i class="fa fa-desktop"></i></a></li>
                                <li><a href="webApp.html">Web Application <i class="fa fa-laptop"></i></a></li>
                                <li><a href="graphics.html">Graphic Design <i class="fa fa-paint-brush"></i></a></li>
                                <li><a href="we_maintenance.html">Website Maintenance <i class="fa fa-gears"></i></a> </li>
                            <li><a href="wordpress.html">Wordpress Web Development <i class="fa fa-wordpress"></i></a></li>
                            <li><a href="videoanimation.html">Video Animation and Editing <i class="fa fa-video-camera"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="single-portfolio.html" class="fa fa-gear">Process</a>
                    </li>
                    <!-- <li><a href="gallery.html">Gallery</a></li>-->
                    <li><a href="Privacy.html" class="fa fa-expeditedssl">Privacy Policy</a></li>
                    <li><a href="refund.html" class="fa fa-undo">Refund Policy</a></li>
                        <li><a href="contact.php" class="fa fa-phone-square">Contact</a></li>
                </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>   



    <div class="privacy_heading"><h1>Payment Successful</h1><p>Thanks for showing your confidence on us.</p></div>        		
</body>
</html>
