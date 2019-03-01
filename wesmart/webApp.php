<!DOCTYPE html>
<html class="no-js">
<head>
<!-- Basic Page Needs
        ================================================== -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="images/logo.png" >
<title>WESMARTIFY RESOURCES</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
        ================================================== -->
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!-- Template CSS Files
        ================================================== -->
<link rel="stylesheet" href="plugins/animate-css/animate.css">

<!-- Fancybox -->
<!-- template main css file -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
	.feature i{
		color: #9c27b0;
		font-size: 20px !important;
	}
	body{
		font-size: 20px !important;
		font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	}
	.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
		.qnty-input{
			width: 70px;
			display: inline-block;
			text-align: center;
		}
	</style>
	</head>
<body style="background-image:url(images/poly_bgr.jpg)">
<!--
        ==================================================
        Header Section Start
        ================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container-fluid">
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
                        <a href="index.php" >
                            <img src="images/logo.png" class="img-responsive" width="140px;">
                        </a>
                    </div>
					<!-- /logo -->
                </div>
                <!-- main menu --> 
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.php" class="fa fa-home" > Home</a>
                            </li>
                            <li><a href="about.php" class="fa fa-pencil-square"> About</a></li>
                            <li><a href="brand.php"><i class="fa fa-trophy"></i> Custom Logo Design</a></li>
							<li class="dropdown">
                               <a href="index.php" class="dropdown-toggle" data-toggle="dropdown"> Services<span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a  href="mobileapp.php"> Mobile Application <i class="fa fa-mobile-phone"></i> </a></li>
                                        <li><a  href="card.php"> Business Card Design <i class="fa fa-id-card"></i> </a></li>
										<li><a href="softdev.php"> Software Development. <i class="fa fa-code"></i></a></li>
										<li><a href="webDev.php"> Web Development & Designing <i class="fa fa-desktop"></i></a></li>
                                        <li><a href="webApp.php"> Web Application <i class="fa fa-laptop"></i></a></li>
										<li><a href="graphics.php"> Graphic Design <i class="fa fa-paint-brush"></i></a></li>
										<li><a href="we_maintenance.php">Website Maintenance <i class="fa fa-gears"></i></a> </li>
                                    <li><a href="wordpress.php"> Wordpress Web Development <i class="fa fa-wordpress"></i></a></li>
                                    <li><a href="videoanimation.php"> Video Animation and Editing <i class="fa fa-video-camera"></i></a></li>
                                    </ul>
                                </div>
                            </li>
							<li>
								<a href="single-portfolio.php" class="fa fa-gear"> Process</a>
                            </li>
                            <!-- <li><a href="gallery.html">Gallery</a></li>-->
                            <li><a href="Privacy.php" class="fa fa-expeditedssl"> Privacy</a></li>
                            <li><a href="refund.php" class="fa fa-undo"> RefunD/Return</a></li>
                            <li><a href="delivery.php" class="fa fa-undo"> Delivery</a></li>
                             <li><a href="contact.php" class="fa fa-phone-square"> Contact</a></li>
								<li>
								<a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
									<span class="fa fa-shopping-cart"></span>
									<span class="badge"></span>
									<span class="total_price">MYR 0.00</span>
								</a>
							</li>
			<div id="popover_content_wrapper" style="display: none">
				<span id="cart_details"></span>
				<div align="right">
					<a href="payment.php" class="btn btn-primary" id="check_out_cart">
					<span class="fa fa-shopping-cart"></span> Check out
					</a>
					<a href="#" class="btn btn-default" id="clear_cart">
					<span class="fa fa-trash-o trash"></span> Clear
					</a>
				</div>
			</div>
			<div id="display_item">
  </div>
</ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2>Service</h2>
          <ol class="breadcrumb">
            <li> <a href="index.html"> <i class="fa fa-home"></i> Home </a> </li>
            <li class="active">Service</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
	<?php

//fetch_item.php

include('database_connection.php');

$query = "SELECT * From tbl_product WHERE id = '5'";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '
<section id="feature">
  <div class="container">
    <div class="section-heading">
      <div class="text-center fa fa-desktop icon3 "></div>
      <h1 class="title wow fadeInDown moreservcie" data-wow-delay=".3s"><strong>'.$row["name"].'</strong></h1>
      <hr style="    height: 3px;width: 100%; background: #C0B5B6;">
    </div>
    <div class="col-md-12">
	  <div class="row">
		
      <center><div class="col-lg-12 col-sm-12 "> <img src="images/about/'.$row["image"].'"  class="float-right img-responsive " style="margin-bottom: 5%;"> </div> </center> 
      <p class="wow fadeInDown" data-wow-delay=".5s">A web application is any PC program that plays out a particular capacity by utilising a web program as its customer. The web application can be as primary as a message board or a contact shape on a site or as unpredictable as a word processor or a multi-player portable gaming application that you download to your telephone. </p>
		
		
      <p class="wow fadeInDown" data-wow-delay=".5s">A web application diminishes the designer of the duty of building a customer for a particular sort of PC or a specific practical framework, so anybody can utilise the web application along as he or she wants. Since the customer keeps running a web program, the client could be utilising an IBM-perfect or a Mac. They can be running Windows XP or Windows Vista. They can even be using Internet Explorer or Firefox; however, a few applications require a particular Web program. </p>
		
	<p class="wow fadeInDown" data-wow-delay=".5s">Web applications usually utilise a mix of server-side content (ASP, PHP, and so on) and customer side content (HTML, JavaScript, and so forth.) to build up the application. 
The customer side content manages the introduction of the data while the server-side content handles all the hard stuff like putting away and recovering the data.  </p>
		
		
		<h3 ><strong>To what extent have Web Applications Been Around us? </strong></h3>
	<p class="wow fadeInDown" data-wow-delay=".5s">Web applications have been around us since before the World Wide Web picked up standard notoriety. </p>
		
	<p class="wow fadeInDown" data-wow-delay=".5s">For instance, Larry Wall created Perl, a popular server-side scripting dialect, in 1987. That was seven years previously the web indeed began picking up notoriety outside of scholastic and innovation circles.   </p>
	<p class="wow fadeInDown" data-wow-delay=".5s">The primary standard web applications were straightforward; however, the late 90s saw a push toward more unpredictable web applications. These days, a considerable number of Americans utilise web application to record their salary charges on the web, perform web-based keeping money undertakings and stay in contact with companions and friends and family thus significantly more.  </p>
		
		<p class="wow fadeInDown" data-wow-delay=".5s">Web improvement, in general, is an essential part of the web-based business achievement, as without a site the world could never think about a business items or administrations. With regards to advancing your business image now a days, web application improvement is consistently turning into the pattern for online business organisations around the world.  </p>
		
		<p class="wow fadeInDown" data-wow-delay=".5s">Ordinary programming based applications and frameworks remain introduced on clients work areas while Web applications utilise a site to improve their performance. There are various advantages for organisations who are using web improvement applications.  </p>
		
<h3 class="wow fadeInDown" data-wow-delay=".5s"> <strong>Simple Maintenance. </strong></h3>
		<p class="wow fadeInDown" data-wow-delay=".5s">By having a web application, you wipe out the need to perform refreshes on every clients work area. Keeping up and refreshing should be possible specifically onto a server and these updates can be sent proficiently to clients PCs.  </p>
		<h3 class="wow fadeInDown" data-wow-delay=".5s"> <strong>Cross-Platform Capabilities </strong></h3>
		<p class="wow fadeInDown" data-wow-delay=".5s">Web applications are an excellent choice for clients of all platforms, for example, Windows, Mac and so forth. With the assortment of Internet programs accessible for utilising these days, for example, Internet Explorer, Firefox and Bing (to give some cases), clients sometimes keep running into issues with programming similarity. </p>
		<h3 class="wow fadeInDown" data-wow-delay=".5s"> <strong>Save Money  </strong></h3>
		<p class="wow fadeInDown" data-wow-delay=".5s">Organisations are continually searching for approaches to eliminate working costs so associating electronic applications. Web applications help organisations from purchasing expensive tools for programming, keep up various frameworks and performing tedious updates on websites.</p>
		<center>
		<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control quantity qnty-input" value="1" />
													 <button 
													class="pay fa btn btn-success add_to_cart" 
													name="add_to_cart"
													data-orderId="ID00'.$row["id"].'" 
													data-MYRCode="'.$row["price"] .'" 
													data-serviceTitle="'.$row["name"].'"
													id="'.$row["id"].'"
												>
													Add To Cart &#xf218 '.$row["price"] .' MYR
												</button>
												
												<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
												<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"] .'" />
	 </div>
	  </div>
  </div>
</section><center>	';
	}
	echo $output;
}?>
<!-- /#feature --> 
<!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
<section id="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h2>
          <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">With <strong><a style="color: #fff" href="#">WESMARTIFY RESOURCES</a></strong> you are all set to launch your new website, application.
            Are you ready for that?</p>
          <a href="contact.php" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Us</a> </div>
      </div>
    </div>
  </div>
</section>
<!--
            ==================================================
            Footer Section Start
            ================================================== -->
<footer id="footer">
  <div class="container">
    <div class="col-md-8">
      <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> All Rights Reserved <strong><a style="color: #fff" href="index.html">WESMARTIFY RESOURCES.</a></strong></p>
    </div>
  </div>
</footer>
<!-- /#footer --> 

<!-- Template Javascript Files
	================================================== --> 
<!-- jquery --> 
<script src="plugins/jQurey/jquery.min.js"></script> 
<script src="js/action.js"></script> 
<!-- Form Validation --> 
<script src="plugins/form-validation/jquery.form.js"></script> 
<script src="plugins/form-validation/jquery.validate.min.js"></script> 

<!-- bootstrap js --> 
<script src="plugins/bootstrap/bootstrap.min.js"></script> 
<!-- wow js --> 
<script src="plugins/wow-js/wow.min.js"></script> 
<!-- slider js --> 
<script src="plugins/slider/slider.js"></script> 
<!-- Fancybox --> 
<script src="plugins/facncybox/jquery.fancybox.js"></script> 
<!-- template main js --> 
<script src="js/main.js"></script>
</body>
</html>