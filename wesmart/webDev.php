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
	
	.fa-heartbeat, .fa-heart{
		color: #d10303;
	}
	.fa-check{
		color: goldenrod;
		font-size: 22px;
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
	<?php
include('database_connection.php');

$query = "SELECT * From tbl_product WHERE id = '4'";

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
      <div class="text-center fa fa-laptop icon2"></div>
      <h1 class="title wow fadeInDown moreservcie" data-wow-delay=".3s"><strong>'.$row["name"].'</strong></h1>
      <hr style="    height: 3px;width: 100%; background: #C0B5B6; ">
    </div>
    <div class="col-md-12">
	  <div class="row">
		
      <center><div class="col-lg-12 col-sm-12 "> <img src="images/about/'.$row["image"].'" height="400px" class="float-right img-responsive" style="margin-bottom: 5%;"> </center> 
      <p class="wow fadeInDown" data-wow-delay=".5s">Website composition includes a wide range of aptitudes and trains in the creation and support of websites. The conventional varieties of the abilities required by a web engineer are many, regularly to the point it is troublesome for a website specialist to exceed expectations in all angles. Thus, a group may cover the Web Design process, with every individual from the group having their particular qualities, claims to fame and part inthe improvement procedure. </p>
      <p class="wow fadeInDown" data-wow-delay=".5s">Website architecture includes executing particular arrangements that takeafter the business principles and goals laid out by the customer. Website specialists build up an expert association with their customers, communicating with them to build up comprehension of the necessities and change over these into a site particular. </p>
	<p class="wow fadeInDown" data-wow-delay=".5s">A solid plan and relational abilities, combined with inquiring about procedures and a grip of target groups of onlookers, markets, and patterns, will guarantee to start customer fulfilment and believability for the Web Designer.</p>
	<p class="wow fadeInDown" data-wow-delay=".5s">Having finished the website arranging and outline, the Web Designer at that point coordinates the site with outsider apparatuses and stages. Amidthe advancement procedure website, specialists plan and build up the databases, do projects, tests and troubleshoot the site. The present pattern is likewise to incorporate the site into Social Media and exploit the use these cutting-edge stages bring. </p>
	<p class="wow fadeInDown" data-wow-delay=".5s">Every one of these aptitudes may apply similarly to the re-outline or an update of a current website. </p>
	<p class="wow fadeInDown" data-wow-delay=".5s">Our Website specialist has the ability and practical experience in several areas, for example, Graphic Design, Client Management, Front End 
Development, Back End/Server Side Development and User End Designer. Whichever part a website specialist represents our specialist are happy to help you succeed in your business. </p>
	<p class="wow fadeInDown" data-wow-delay=".5s">Our high performing Web Designers have to master web-related aptitudes.In any case, to exceed expectations, they have a solid handle of copyright law and a very much created specific code of morals. They comprehend imaginative esteems and assume individual liability for being always at the cutting edge of patterns and web innovation. They are receptive to customers and can work in organised and unstructured groups and gatherings. These characteristics empower our Web Designers to contribute and exploit this quickly, creating part of present-day correspondences innovation.</p>
		
		
		
		<h3><strong>Your benefits from this service:</strong> </h3>
     	
		<p class="wow fadeInDown" data-wow-delay=".5s"><i class="fa fa-check" style="color: #5bc0de;"></i> The digital era has brought significant changes to the business. Here at WESMARTIFY RESOURCES, We are committed to bringing you the best services in Website Development and Design. </p>
<p class="wow fadeInDown" data-wow-delay=".5s"><i class="fa fa-check" style="color: #5bc0de;"></i> We have long experience in this industry, and we have earned the trust of our clients. Our intention is a partner of your success and helps you grow your business with the latest technology and web development tools. </p>
<p class="wow fadeInDown" data-wow-delay=".5s"><i class="fa fa-check" style="color: #5bc0de;"></i>We aim to be part of your success and your business development. This can be easily achieved by consulting with our experts and reviewing your business needs. </p>
		
<p class="wow fadeInDown" data-wow-delay=".5s"><strong>So do not waste your time, but contact our support team and we will be happy to assist you and offer our services.
 </strong></p><center>
				<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control quantity qnty-input" value="1" />
													 <button 
													class="pay fa btn btn-info add_to_cart" 
													name="add_to_cart"
													data-orderId="ID00'.$row["id"].'" 
													data-MYRCode="'.$row["price"] .'" 
													data-serviceTitle="'.$row["name"].'"
													id="'.$row["id"].'"
												>
													Add To Cart &nbsp;&nbsp;&nbsp;	&#xf218 '.$row["price"] .' MYR
												</button>
												
												<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
												<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"] .'" />
				
    </div>
	  </div>
  </div></center>
</section>	';
	}
	echo $output;
}?>
<!-- /#feature --> 
<!-- 
================================================== 
    Works Section Start
================================================== --> 
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