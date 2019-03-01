<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><!-- Basic Page Needs
        ================================================== -->
		<link rel="icon" href="images/logo.png" >
	<title>WESMARTIFY RESOURCES</title>
	<meta name="description" content=""><meta name="keywords" content=""><meta name="author" content=""><!-- Mobile Specific Metas
        ================================================== --><meta name="format-detection" content="telephone=no"><meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" id="bootstrap-css" rel="stylesheet" /><!------ Include the above in your HEAD tag ----------><!-- Template CSS Files
        ================================================== --><!-- Twitter Bootstrs CSS --><!-- Ionicons Fonts Css --><!-- animate css -->
	<link href="plugins/animate-css/animate.css" rel="stylesheet" /><!-- Fancybox --><!-- template main css file -->
	<link href="css/style.css" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
	<style type="text/css">.fa-heartbeat, .fa-heart{
		color: #d10303;
	}
		.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
	.fa-check{
		color: goldenrod;
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
<body style="background-image:url(images/poly_bgr.jpg)"><!--
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
	<li><a href="index.html">Home </a></li>
	<li class="active">Service</li>
</ol>
</div>
</div>
</div>
</div>
</section>
	<?php
include('database_connection.php');
$query = "SELECT * From tbl_product WHERE id = '6'";
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
<div class="text-center fa fa-paint-brush icon4 "></div>

<h1 class="title wow fadeInDown moreservcie" data-wow-delay=".3s"><strong>Graphic Design</strong></h1>

<hr style="    height: 3px;width: 100%; background: #C0B5B6;" /></div>

<div class="col-md-12">
<div class="row">
<center>
<div class="col-lg-12 col-sm-12 "><img class="float-right img-responsive" src="images/about/graphic.jpg" style="margin-bottom: 5%;" /></div>
</center>

<p class="wow fadeInDown" data-wow-delay=".5s">Graphic design is an art, planning or designing ideas through visual or textual content. It can take physical or virtual form and may contain words, images or graphics. The graphic design can be a small project like designing a postal stamp, but it may also be a significant state project.Graphic design has begun to be used much with technological development.</p>

<p>A very much made visual depiction idea empowers a business to support deals; along these lines augmenting business reach.</p>

<h3><strong>So what precisely is a design?</strong></h3>

<p>The word designs have been gotten from the word &#39;diagram&#39; which impliesa visual which is exact and legitimate by count. Planning in designs includes creative and proficient orders to put over a message.</p>

<p>It involves synergising the many-sided quality of a point or a brief with visual straightforwardness. It is tied in with mixing investigation with innovative reasoning.</p>

<p>In this procedure, it includes an optical creator who consolidates words, pictures, and typography and page format systems to get the last outcome.</p>

<h3><strong>So why is realistic outlining critical for your business?</strong></h3>

<p>Realistic Designing is something beyond style. It is past inventive ideas or graphical representations. It is more than what it would appear that or how it functions. It is tied in with changing the procedure of configuration thinking into legitimate business comes about. We can call it the GRAPHIC ADVANTAGE!!</p>

<h4><strong>We refer to top five reasons of having a visual originator for your business:</strong></h4>

<p><strong>1 : Makes a solid impression </strong> Amazing visual computerisation must leave an effect on the group of seekers in the primary example. Furthermore, the best way to do this is making a capable visual communication.</p>

<p><strong>2 : Building a brand personality </strong> It is critical for your business to build up a brand image, to emerge from the contenders and help set up your particular character. Each company has its quality thus you would not have any desire to seem as though any other individual.</p>

<p><strong>3 : It passes on your data </strong> The more significant part of the circumstances it so happens that words cannot viably move on data. Alternatively, on the other hand, instead, it should be possible all the more strikingly with pictures. It is in such circumstances visual originators can assume a vital part in passing on data. Your business is perplexing with numerous items, sizes, hues and sizes and many different elements which are accessible. This can at some point demonstrate somewhat complex in passing on the exact data. Decent visual computerisation can convey your offerings as reports, graphs, and delineations.</p>

<p><strong>4 : Decent visual communication can portray a story </strong> It is vital that individuals get a vibe of what the business resembles beforethey choose to go for an item. An insightful outline catches the group of onlookers&#39; or a potential client&#39;s consideration. The idea of the sustainablepower source is entirely not quite the same as an adornments outline idea. IKF made a well-thoroughly considered system for both the areas which were starkly not quite the same as each other and made designs asneeds are.</p>
<center>
<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control quantity qnty-input" value="1" />
													 <button 
													class="pay fa btn add_to_cart" 
													name="add_to_cart"
													data-orderId="ID00'.$row["id"].'" 
													data-MYRCode="'.$row["MYR_price"] .'" 
													data-serviceTitle="'.$row["name"].'"
													id="'.$row["id"].'" style="background: #ff9800; color:white;"
												>
													Add To Cart &nbsp;&nbsp;&nbsp;	&#xf218 '.$row["MYR_price"] .' MYR
												</button>
												
												<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
												<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["MYR_price"] .'" />
 </div>
	  </div>
  </div><center>
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

<p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">With <strong><a href="#" style="color: #fff">WESMARTIFY RESOURCES</a></strong> you are all set to launch your new website, application. Are you ready for that?</p>
<a class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms" href="contact.php">Contact With Us</a></div>
</div>
</div>
</div>
</section>
<footer id="footer">
<div class="container">
<div class="col-md-8">
<p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> All Rights Reserved <strong><a href="index.html" style="color: #fff">WESMARTIFY RESOURCES</a></strong></p>
</div>
</div>
</footer>
<!-- /#footer --><!-- Template Javascript Files
	================================================== --><!-- jquery --><script src="plugins/jQurey/jquery.min.js"></script><!-- Form Validation -->
	================================================== --><!-- jquery --><script src="js/action.js"></script><!-- Form Validation -->
	<script src="plugins/form-validation/jquery.form.js"></script><script src="plugins/form-validation/jquery.validate.min.js"></script><!-- bootstrap js -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script><!-- wow js --><script src="plugins/wow-js/wow.min.js"></script><!-- slider js -->
	<script src="plugins/slider/slider.js"></script><!-- Fancybox --><script src="plugins/facncybox/jquery.fancybox.js"></script><!-- template main js -->
	<script src="js/main.js"></script></body>
</html>