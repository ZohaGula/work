<!DOCTYPE html>
<html class="no-js">
<head>
<!-- Basic Page Needs
        ================================================== -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="images/logo.png" >>
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
	.feature i{
		color: #9c27b0;
		font-size: 20px !important;
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
<?php
include('database_connection.php');
$query = "SELECT * From tbl_product WHERE id = '7'";
$statement = $connect->prepare($query);
if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		 ?>
	
<section id="feature">
  <div class="container">
    <div class="section-heading">
      <div class="text-center fa fa-gears icon1"></div>
      <h1 class="title wow fadeInDown moreservcie" data-wow-delay=".3s"><strong>Website Maintenance</strong></h1>
      <hr style="    height: 3px;width: 100%; background: #C0B5B6; ">
    </div>
    <div class="col-md-12">
	  <div class="row">
		<?php $output .='
      <center><div class="col-lg-12 col-sm-12 "> <img src="images/about/'.$row["image"].'"  class="float-right img-responsive " style="margin-bottom: 5%;"> </div> </center>';?> 
      <p class="wow fadeInDown" data-wow-delay=".5s"><strong>Site support is the way toward playing out every one of the undertakings essential to stay up with the latest and in first, working request, so it works and shows up effectively with the most recent web programs and cell phones. </strong> </p>
		
      <p class="wow fadeInDown" data-wow-delay=".5s">Little to medium measured organisations who do not have the staff to do support errands on their site is an ideal contender for this administration. Taking a shot at their website is not a piece of day by day activities as they have to tend to maintain their business. Setting aside the opportunity to figure out how to do web composition and support legitimately is not a decent interest in time as they require their staff to take a shot at different things. </p>
		
	<p class="wow fadeInDown" data-wow-delay=".5s">More prominent estimated organisations may likewise profit by enlisting out site upkeep since then the work does not sit at the base of the IT "Department's plan for the day. The work is done professionally (up to models) and rapidly with the goal that the site and business advantage. </p>
		
		<h3><strong>The significance of Website Maintenance </strong></h3>
	<p class="wow fadeInDown" data-wow-delay=".5s">Site upkeep is imperative to any business, paying little respect to measure. Your site is an overall window into your business, and it can profoundly affect how the estimation of your item or administration is seen. A very much kept up site is necessary for continuous administration ventures. All organisations require consistent site upkeep to draw in and hold clients, keep up web crawler rankings and present new data, items, and administrations to the general population. Site upkeep is likewise required to keep up the estimation of the site after some time. </p>
		
	<p class="wow fadeInDown" data-wow-delay=".5s">A very much kept up site pulls in new clients and keeps up the intrigue levels of existing clients. Your site ought to be client focused and kept significant by routinely reviving the substance and guaranteeing that client contact focuses are in excellent working request.  </p>
		
	<p class="wow fadeInDown" data-wow-delay=".5s">Regularly watch that contact shapes work, address and telephone number postings are refreshed and items, administrations and value records are present and right.  </p>
	<p class="wow fadeInDown" data-wow-delay=".5s">Site upkeep is basic to web index rankings. Websites with old substance rank lower in web search tool postings. Some web search tools, including Google, check your page's "if-altered since" HTTP header to decide if it merits slithering. Neglecting to make visit adjustments could make you be pushed beneath dynamic rivals in the postings and cost your business after some time. </p>
		
		<h3><strong>Advantages of using our services</strong></h3>
		<p class="wow fadeInDown" data-wow-delay=".5s"> 
		<i class="fa fa-quote-left"></i><strong>Our site support programs guarantee that your site is continuously present and your undertaking remains inside spending plan. Our standard program incorporates content updates, refresh pictures, and support using phone and email.  It likewise includes updating, altering, or changing existing pages to stay up with the latest. </strong>
		<i class="fa fa-quote-right"></i>
		</p>
		<p class="wow fadeInDown" data-wow-delay=".5s">Sites are not planned to be static. The estimation of a training site is the capacity to keep up current data online at a reasonable cost. We accept that you will need to reexamine a few or the majority of your pages after some time, and also adding extra site pages as indicated by your business needs. To help you in keeping up current data on the web, we offer a few choices for site support.</p>
		<center><?php $output .='<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control quantity qnty-input" value="1" />
													 <button 
													class="pay fa btn  add_to_cart" 
													name="add_to_cart"
													data-orderId="ID00'.$row["id"].'" 
													data-MYRCode="'.$row["MYR_price"] .'" 
													data-serviceTitle="'.$row["name"].'"
													id="'.$row["id"].'" style="background: #9c27b0; color:white;"
												>
													Add To Cart	&#xf218 '.$row["MYR_price"] .' MYR
												</button>
												
												<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
												<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["MYR_price"] .'" />
  </div></center>
	  </div>
  </div>
</section>	';
	}
	echo $output;
}?> 
    </div>
	  </div>
  </div>
</section>
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