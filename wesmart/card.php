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
		.qnty-input{
			width: 70px;
			display: inline-block;
			text-align: center;
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
            <li> <a href="index.php"> <i class="fa fa-home"></i> Home </a> </li>
            <li class="active">Service</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
	<?php include('database_connection.php');
$query = "SELECT * From tbl_product WHERE id = '3'";
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
      <div class="text-center fa fa-id-card icon5"></div>
      <h1 class="title wow fadeInDown moreservcie" data-wow-delay=".3s"><strong><?php echo $row["name"] ?></strong></h1>
      <hr style="height: 3px;width: 100%; background: #C0B5B6;">
    </div>
    <div class="col-md-12">
	  <div class="row">
		
      <center><div class="col-lg-12 col-sm-12 "> <img src="images/about/<?php echo $row["image"] ?>" height="400px" class="float-right img-responsive " style="width:60%;"> </div> </center> 
      <p class="wow fadeInDown" data-wow-delay=".5s"><strong>Get a custom business card design for your business at <strong>WESMARTIFY RESOURCES</strong>, the #1 custom business card design service with hundreds of creative and professional business card designers. Our community of professional designers are ready to create the perfect business card for you. Businesses across the globe have used Wesmartifyresources to get the right business card for their business. You can join them, simply start a business card design project today and get a business card you’ll love.</p>
	<p class="wow fadeInDown" data-wow-delay=".5s">Most business cards are boring. They just are, there’s no getting around it. In highly saturated industries, however, a well-designed business card is central to making your brand stand out. And we’re not talking crazy, unrealistic designs; a properly designed card doesn’t just look good, it’s highly functional. This is the balance of branding.</p>
		  
	<p class="wow fadeInDown" data-wow-delay=".5s">A unique business card is the key to being memorable—and being memorable is what’s going to make that client, customer, or colleague choose your card out of the pile and reach out to do business.</p>	  
		
	<h1 class="wow fadeInDown text-center" data-wow-delay=".5s"><strong>OUR DESIGN PHASES</strong> </h1>
	
		  <div class="col-md-4"> <img src="images/about/whychoose.png" class="img-responsive"></div>
		  <div class="col-md-8">
			  <h4 class="wow fadeInDown" data-wow-delay=".5s"><strong><i class="fa fa-file"></i>  CUSTOMER FILE</strong> </h4>
		<p class="wow fadeInDown" data-wow-delay=".5s">You will need to provide us your information, files such as logo, photo etc. (we only accept vector format for logo) </p>
<h4 class="wow fadeInDown" data-wow-delay=".5s"><strong> <i class="fa fa-lightbulb-o"></i> IDEA + BRAINSTORM</strong> </h4>
	<p class="wow fadeInDown" data-wow-delay=".5s">We understand your target market, industry, and style you are looking for</p>
	<h4 class="wow fadeInDown" data-wow-delay=".5s"><strong> <i class="fa fa-paint-brush"></i> DESIGN</strong> </h4>
	<p class="wow fadeInDown" data-wow-delay=".5s"> Our professional designer will start designing based on the customer's information</p>
	<h4 class="wow fadeInDown" data-wow-delay=".5s"><strong> <i class="fa fa-refresh"></i> REVISIONS</strong> </h4>
	<p class="wow fadeInDown" data-wow-delay=".5s">  We will modify the designs according to customer's request</p>
	<h4 class="wow fadeInDown" data-wow-delay=".5s"><strong><i class="fa fa-clock-o"></i> TURNAROUND TIME  </strong></h4>
	<p class="wow fadeInDown" data-wow-delay=".5s">1-3 business days for initial design concepts</p>
		 <center>
		  <?php $output .= '<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control quantity qnty-input" value="1" />
													 <button 
													class="pay fa btn btn-danger add_to_cart" 
													name="add_to_cart"
													data-orderId="ID00'.$row["id"].'" 
													data-MYRCode="'.$row["MYR_price"] .'" 
													data-serviceTitle="'.$row["name"].'"
													id="'.$row["id"].'"
												>
													Add To Cart &nbsp;&nbsp;&nbsp;	&#xf218 '.$row["MYR_price"] .' MYR
												</button>
												
												<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
												<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["MYR_price"] .'" />
  
  </div>
  </div></div></div>
</section>';	}
	echo $output;
}?>
	</center>		
    

</section>
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