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
	.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
	.fa-heartbeat, .fa-heart{
		color: #d10303;
	}
	.fa-check{
		color: forestgreen;
		font-size: 22px;
	}
	body{
		font-size: 20px !important;
		font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	}.qnty-input{
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
<!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
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
<!-- 
================================================== 
    Service Page Section  Start
================================================== -->
	
	<?php

//fetch_item.php

include('database_connection.php');

$query = "SELECT * From tbl_product WHERE id = '9'";

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
      <div class="text-center fa fa-wordpress icon5"></div>
      <h1 class="title wow fadeInDown moreservcie" data-wow-delay=".3s"> '.$row["name"].'</h1>
      <hr style="height: 3px;width: 100%; background: #C0B5B6;">
    </div>
    <div class="col-md-12">
	  <div class="row">
	
      <center><div class="col-lg-12 col-sm-12 "> <img src="images/'.$row["image"].'" height="400px" class="float-right img-responsive " style="margin-bottom: 5%;"> </div> </center> 
      <p class="wow fadeInDown" data-wow-delay=".5s"><strong>Exploit the propelled techniques for working together and construct most grounded stages in this present time of globalisation and a neck-to-neck rivalry. </strong> </p>
      <p class="wow fadeInDown" data-wow-delay=".5s">Today WordPress is one of the most well-known website development toolsby numerous organisations on the web. In the time of its reality, WordPress has turned into a fundamental piece of the network, controllingaround 25% of all sites.</p>
	<p class="wow fadeInDown" data-wow-delay=".5s">It gives you unbelievable specialised help to tweak a website that best suits your business purposes. It takes into account your business online advancement activity with content administration framework offices. WordPress enables the clients to design a very adaptable site of their inclination, and this way makes it a perfect solution. </p>
		
	<p class="wow fadeInDown" data-wow-delay=".5s">Incredibly, WordPress Development open doors for an extraordinary number of substantial and little ventures to refresh, alter, change or adjust the substance of their site in the most advantageous way. In case you are searching for a backend framework that takes into account adaptability, expandability and customisation, WordPress is by a long shot and away the best decision out there. If you intend to build your WordPress site, at that point, you can enlist a dependable seaward Website Designing and Development Company.</p>
	<p class="wow fadeInDown" data-wow-delay=".5s">There is an extensive variety of organisations accessible in the market, but WordPress has the most affordable rates. In any case, Do not squander your opportunity to look through the best one on the web, necessarily get in touch with us.</p>
	<p class="wow fadeInDown" data-wow-delay=".5s">Our dedicated site engineers practice to include security into a custom website composition. We comprehend your business needs and necessities. Contract Dedicated WordPress Developers of 
WESMARTIFY RESOURCES and pump up your business image in web all around.</p>
		
		<h3><strong>WordPress benefits:</strong> </h3>
		<h4><strong>It offers an all-inclusive stage </strong></h4>
		
	<p class="wow fadeInDown" data-wow-delay=".5s">WordPress underpins a ton of utilisation and programming dialects. This makes it simple to ace. Regardless of whether you plan to construct a site with it or you need to make a blog, you will get the opportunity to utilise asimilar dashboard. </p>
	<p class="wow fadeInDown" data-wow-delay=".5s">Our Website specialist has the ability and practical experience in several areas, for example, Graphic Design, Client Management, Front End 
Development, Back End/Server Side Development and User End Designer. Whichever part a website specialist represents our specialist are happy to help you succeed in your business. </p>
		
	<h4><strong>It is allowed to utilise </strong></h4>	
	<p class="wow fadeInDown" data-wow-delay=".5s">You are allowed to use all WordPress offices. It does not require any instalment or permit to utilise it. The main downsides of free WordPress facilitating are constrained storage room, no video stockpiling and WordPress.com is joined to the web domains that are built.</p>
		<h4><strong>It offers to distribute accommodation </strong></h4>
		     	
		<p class="wow fadeInDown" data-wow-delay=".5s"> In case you want to compose your web content or your blog article, you can spread it with only a single tick. It is as simple as that. This is one reason WordPress is pronounced to be the best administration framework. </p>
		
		<h4><strong>Site design improvement </strong></h4>
		
<p class="wow fadeInDown" data-wow-delay=".5s">There are a large number of sites on the web now, and more are as yet being facilitated. In this way, building a website is not sufficient. Improvingit for web indexes is similarly as vital as creating the site. Building up yoursite on WordPress improves its SEO, and your website will rank higher in Google search.
</p>
		<h4><strong>Simple Content Management </strong></h4>
<p class="wow fadeInDown" data-wow-delay=".5s">Site improvement will get you better use of your website. Indeed, no organisation can get by on negligible activity. It is their requests that will stay within the business. So content is imperative. WordPress is the perfect solution to improve your content.  
</p><center>
		<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control quantity qnty-input" value="1" />
													 <button 
													class="pay fa btn btn-danger add_to_cart" 
													name="add_to_cart"
													data-orderId="ID00'.$row["id"].'" 
													data-MYRCode="'.$row["MYR_price"] .'" 
													data-serviceTitle="'.$row["name"].'"
													id="'.$row["id"].'"
												>
													Add To Cart	&#xf218 '.$row["MYR_price"] .' MYR
												</button>
												<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
												<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["MYR_price"] .'" />
												<center></div>
	  </div>
  </div>
</section>	';
	}
	echo $output;
}?>
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