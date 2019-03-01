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
$query = "SELECT * From tbl_product WHERE id = '8'";
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
      <div class="text-center fa fa-video-camera icon2"></div>
      <h1 class="title wow fadeInDown moreservcie" data-wow-delay=".3s"><strong>'.$row["name"].'</strong></h1>
      <hr style="    height: 3px;width: 100%; background: #C0B5B6; ">
    </div>
    <div class="col-md-12">
	  <div class="row">
		
      <center><div class="col-lg-12 col-sm-12 "> <img src="images/about/'.$row["image"].'"  class="float-right img-responsive " style="margin-bottom: 5%;"> </div> </center> 
      <p class="wow fadeInDown" data-wow-delay=".5s"><i class="fa fa-quote-left"></i> <strong>Content is tied in with telling a story. Regardless of whether it is an anecdote about your item, your clients, or perhaps consistency changes, your objective as a substance crafter is to share a message that forces, influences, and persuades people to make a move.  </strong> </p>
 <p class="wow fadeInDown" data-wow-delay=".5s"><strong>However, the story is just in the same class as its execution. </strong> </p>
		
    <p class="wow fadeInDown" data-wow-delay=".5s"> <strong>Consider it. If you have an incredible story, yet convey it ineffectively, your group of clients is more averse to make a move. That is the place energised video can help.   <i class="fa fa-quote-right"></i></strong> </p>
		
		
      <p class="wow fadeInDown" data-wow-delay=".5s">Animated video is a rich, drawing in medium, that is practical, simple to oversee, and will enable your key focuses on popping. It offers anyone the advantages of a visual medium with considerably littler asset prerequisites than you may anticipate.  </p>
		
	<p class="wow fadeInDown" data-wow-delay=".5s">With animated recordings, you are allowed to do whatever you need. Give your creative ability a chance to run wild! It enables you to bring any idea, regardless of how perplexing or out of this world, to existence effortlessly. </p>
		
		
		<h4 ><strong>You can offer to set to your thoughts </strong></h4>
	<p class="wow fadeInDown" data-wow-delay=".5s">The animation begins on a close-up of a man, at that point zooming out to demonstrate a horde of individuals, at that point impacting up into the stratosphere for the BIG best view. Furthermore, to make it strides facilitate you zoom out to demonstrate our whole cosmic system.  </p>
		<p><strong>It puts that one friendless individual you began within context is not that right? </strong></p>
		
	<h4 class="wow fadeInDown" data-wow-delay=".5s"><strong>You can outwardly speak to extract thoughts   </strong></h4>
		
	<p class="wow fadeInDown" data-wow-delay=".5s">Maybe one of the most significant advantages of utilising animated video is the straightforwardness with which you can outwardly catch different views.   </p>
	<p class="wow fadeInDown" data-wow-delay=".5s">Consider the possibility that you needed to catch something essential or perhaps something conceptual. It gets somewhat more difficult, is not that right? With an animated video, you can undoubtedly catch hard-to-speak to thoughts on a screen without requirements. </p>
		
		<h4 class="wow fadeInDown" data-wow-delay=".5s"> 
		<strong>You can oversee video creation </strong>
		</h4>
		<p class="wow fadeInDown" data-wow-delay=".5s">If you have ever shot a no-frills video, you are likely mindful it is a confused and in some cases disappointing procedure. You need to stress over the area, performers, props, gear, sets, and that is not, in any case, considering the climate! </p>
		
<h4 class="wow fadeInDown" data-wow-delay=".5s"> <strong>With an animated video, you are not obliged by any of these elements.  </strong></h4>
		<p class="wow fadeInDown" data-wow-delay=".5s">You can switch foundations, moving characters, and even include props with a straightforward snap, simplified. This makes it simple to test distinctive approaches to impart your message.  </p>
		
<h4 class="wow fadeInDown" data-wow-delay=".5s"> <strong>Animated recordings are more visual. </strong></h4>
		<p class="wow fadeInDown" data-wow-delay=".5s">The first importance purpose behind utilising animated video is that its rich media. Recordings, as a rule, are made out of pictures that make up precious media minutes.  </p>
		<p class="wow fadeInDown" data-wow-delay=".5s">This visual medium interests to the faculties and offers a simple and successful approach to impart essential messages. Also, best of all, visuals are devoured significantly efficiently than content, and leave an enduring effect on your group of onlookers. </p>
<h4 class="wow fadeInDown" data-wow-delay=".5s"> <strong>Animated recordings slice through the advanced "commotion." </strong></h4>
		<p class="wow fadeInDown" data-wow-delay=".5s">Content stun is genuine, and a noteworthy test is confronting all associations. However, with the consistently expanding nearness of "commotion" in the advanced space, content makers need to figure out how to separate their substance from everything else out there. </p>
		<center>
		<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control quantity qnty-input" value="1" />
													 <button 
													class="pay fa btn btn-info add_to_cart" 
													name="add_to_cart"
													data-orderId="ID00'.$row["id"].'" 
													data-MYRCode="'.$row["MYR_price"] .'" 
													data-serviceTitle="'.$row["name"].'"
													id="'.$row["id"].'"
												>
													Add To Cart &#xf218 '.$row["MYR_price"] .' MYR
												</button>
												
												<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
												<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["MYR_price"] .'" />
 </div><center>
	  </div>
  </div>
</section>	';
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