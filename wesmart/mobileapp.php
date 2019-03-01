<?php 
include('database_connection.php'); 
$query = "SELECT * FROM tbl_product ORDER BY id";

?>
<!DOCTYPE html>
<html >
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
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

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
		color: forestgreen;
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
<!-- 
================================================== 
    Service Page Section  Start
================================================== -->
<?php 	
	include('database_connection.php');

$query = "SELECT * From tbl_product WHERE id = '1'";

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
      <div class="text-center fa fa-mobile icon3"></div>
      <h1 class="title wow fadeInDown moreservcie" data-wow-delay=".3s"><strong>Mobile Applications</strong></h1>
      <hr style="    height: 3px;width: 100%; background: #C0B5B6;">
    </div>
    <div class="col-md-12">
	  <div class="row">
		
      <center><div class="col-lg-12 col-sm-12 "> <img src="images/about/'.$row["image"].'" height="400px" class="float-right img-responsive " style="margin-bottom: 5%;"> </div> </center> 
      <p class="wow fadeInDown" data-wow-delay=".5s">A mobile application otherwise referred to as an app, is software designed to operate on mobile devices like smartphones or tablets. Such applications have a variety of different software running on our computers, but that is convenient and useful even for smartphones. </p>
      <p class="wow fadeInDown" data-wow-delay=".5s">Applications are usually small and indispensable software that has less functionality than other PC software. </p>
	<p class="wow fadeInDown" data-wow-delay=".5s">The development of mobile applications is a new trend in modern technology. It is even revolving around the business world. Since through mobile applications, we can all now have access to different software that makes our lives easier.</p>
	<p class="wow fadeInDown" data-wow-delay=".5s">Mobile applications are developed based on the demand and accessories they offer in mobile devices. Mobile applications are shared in web-based and native. Web-based applications are those that are based on different desktop software, and native apps are those applications that are specifically designed for mobile devices.</p>
		<h3><strong>Mobile Apps, a technology Revolution</strong> </h3>
		
	<p class="wow fadeInDown" data-wow-delay=".5s">Every one of these aptitudes may apply similarly to the re-outline or an update of a current website. </p>
	<p class="wow fadeInDown" data-wow-delay=".5s">Our Website specialist has the ability and practical experience in several areas, for example, Graphic Design, Client Management, Front End 
Development, Back End/Server Side Development and User End Designer. Whichever part a website specialist represents our specialist are happy to help you succeed in your business. </p>
	<p class="wow fadeInDown" data-wow-delay=".5s">Our high performing Web Designers have to master web-related aptitudes.In any case, to exceed expectations, they have a solid handle of copyright law and a very much created specific code of morals. They comprehend imaginative esteems and assume individual liability for being always at the cutting edge of patterns and web innovation. They are receptive to customers and can work in organised and unstructured groups and gatherings. These characteristics empower our Web Designers to contribute and exploit this quickly, creating part of present-day correspondences innovation.</p>
		
		
		
		<h3><strong>Your benefits from this service:</strong> </h3>
     	
		<p class="wow fadeInDown" data-wow-delay=".5s"><i class="fa fa-quote-left" style="color: forestgreen;"></i> Mobile apps have changed their way of life. Therefore, for many businesses, they are essential. This has led to a large number of companies developing mobile apps. The development of mobile applications has already influenced customers to have constant access to the services they want.</p>
<p class="wow fadeInDown" data-wow-delay=".5s">Also, the development of mobile applications has also changed the ways of business acquisition and development. </p>
<p class="wow fadeInDown" data-wow-delay=".5s">Now through smartphones, we can shop online, reserve travel tickets, or make online payments. </p>
<p class="wow fadeInDown" data-wow-delay=".5s">For us as a company that we offer this service, we consider mobile application development a revolution in the digital and technological era. <i class="fa fa-quote-right" style="color: forestgreen;"></i></p>
		<h3><strong>How can you benefit from our Mobile Application Services?</strong></h3>
	
		
<p class="wow fadeInDown" data-wow-delay=".5s"><strong>1 : </strong><i class="fa fa-check"></i>Clients do not need to wait. Mobile apps offer faster access to customers to their interests or products. While in the desktop browser, it takes a longer time.</p>
		
<p class="wow fadeInDown" data-wow-delay=".5s"><strong>2 : </strong><i class="fa fa-check"></i>Apps are built for your business. Apps enable businesses to expand their brand. Mobile apps allow you always to be close to the client, building trust and relationship with customers.</p>
<p class="wow fadeInDown" data-wow-delay=".5s"><strong>3 : </strong><i class="fa fa-check"></i>Better customer engagement. If your business has a mobile app, it means you are constantly connected to your client. Clients tend to launch their apps to connect to their businesses or needs, so it is essential for your business to have a mobile app.</p>
<p class="wow fadeInDown" data-wow-delay=".5s"><strong>4 : </strong><i class="fa fa-check"></i>Applications reduce the cost. Mobile applications diminish the need to send SMS as they make communication more comfortable with the customer.</p>
	<h3><strong>What to consider before developing a mobile app?</strong></h3>
<p class="wow fadeInDown" data-wow-delay=".5s">Purpose of your App. You need to be clear about the use of your application. Deselect your application to serve as an informational tool, marketing, as a communication tool, or to transact through your app.</p>
<p class="wow fadeInDown" data-wow-delay=".5s">Your business needs. Mobile apps are not for every business, so before you make a decision, you need to look at your needs. If you need a multi-
function app and have a website that requires your clients to log in, then amobile app is reasonable.You should appreciate well how popular your application may be. To achieve a level of satisfaction, you need to have a professional team that will guide you how to promote your app and gets more downloads.
</p>
		<div class="float-right">
		<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control quantity qnty-input" value="1" />
													 <button 
													class="pay fa btn btn-success add_to_cart" 
													name="add_to_cart"
													data-orderId="ID00'.$row["id"].'" 
													data-MYRCode="'.$row["MYR_price"] .'" 
													data-serviceTitle="'.$row["name"].'"
													id="'.$row["id"].'">
													Add To Cart &#xf218 '.$row["MYR_price"] .' MYR
												</button>
												<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
												<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["MYR_price"] .'" />
		</div>
    </div>
	  </div>
  </div>
</section> 	';
	}
	echo $output;
}
?>
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
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-modal.js"></script>
</body>
</html>