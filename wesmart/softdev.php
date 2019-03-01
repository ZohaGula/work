<?php 
include('database_connection.php'); 
$query = "SELECT * FROM tbl_product ORDER BY id";
$statement = $connect->prepare($query);
?>

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
	
	.fa-check, .fa-quote-left, .fa-quote-right{
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

$query = "SELECT * From tbl_product WHERE id = '2'";

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
      <div class="text-center fa fa-code icon1"></div>
      <h1 class="title wow fadeInDown moreservcie" data-wow-delay=".3s"><strong>Software Development</strong></h1>
      <hr style="    height: 3px;width: 100%; background: #C0B5B6;">
    </div>
    <div class="col-md-12">
	  <div class="row">
    <center><div class="col-lg-12 col-sm-12 "> <img src="images/about/'.$row["image"].'"  class="float-right img-responsive " style="margin-bottom: 5%;"> </div> </center> 
      <p class="wow fadeInDown" data-wow-delay=".5s"><strong><i class="fa fa-quote-left"></i> Software development is the way of programming through progressive stages in a methodical approach. This procedure incorporates the real composition of code as well as the arrangement of necessities and targets, the plan of what is to be coded, and affirmation that what is created has met goals.  </strong> <i class="fa fa-quote-right"></i> </p>
		
      <p class="wow fadeInDown" data-wow-delay=".5s">Before frameworks advancement techniques appeared, the development of new frameworks or items was regularly completed by utilising the experience and instinct of administration and specialised workforce. The complexity of present-day structures and PC items long back made the need clear for some precise software development process.</p>
	<h3><strong>Phases of Software Development </strong></h3>
	<div class="col-md-6">
		<p><strong>1 : <i class="fa fa-check"></i></strong>Identification of required programming.</p>	
	<p><strong>2 : <i class="fa fa-check"></i></strong>Analysis of the product necessities.</p>	
	<p><strong>3 : <i class="fa fa-check"></i></strong>Detailed particular of the product necessities.</p>		
		</div>
		<div class="col-md-6">
		<p><strong>4 : <i class="fa fa-check"></i></strong>Software plan.</p>	
	<p><strong>5 : <i class="fa fa-check"></i></strong>Programming.</p>	
	<p><strong>6 : <i class="fa fa-check"></i></strong>Testing.</p>	
	<p><strong>7 : <i class="fa fa-check"></i></strong>Maintenance.</p>	
	</div>
	<p class="wow fadeInDown" data-wow-delay=".5s">As a rule, the development of business software is a consequence of an interest in the commercial centre, while venture programming development emerges from a need or an issue inside the enterprise environment. </p>
	<p class="wow fadeInDown" data-wow-delay=".5s"><strong>The software development process is guided continuously by some systematic software development methods (SDM). Referred to by various terms, including process models, improvement guidelines, and software 
development lifecycle models (SDLC), software development techniques include similar advancement stages: </strong></p>
		
	<p class="wow fadeInDown" data-wow-delay=".5s"><strong>1</strong><i class="fa fa-check"></i>The current framework is assessed, and its lacks distinguished, as a rule through meeting framework clients and bolster workforce.  </p>
	<p class="wow fadeInDown" data-wow-delay=".5s"><strong>2</strong><i class="fa fa-check"></i>The new framework necessities are characterised. Individually, the insufficiencies in the current framework must be tended to with particular proposition for development.  </p>
	<p class="wow fadeInDown" data-wow-delay=".5s"><strong>3</strong><i class="fa fa-check"></i>The proposed framework is planned. Plans are laid out concerning the physical development, equipment, working structures, programming, correspondences, and security issues.   </p>
	<p class="wow fadeInDown" data-wow-delay=".5s"><strong>4</strong><i class="fa fa-check"></i>The new framework is created. The new parts and projects must be gottenand introduced. Clients of the structure must be prepared in its utilisation, and all parts of an execution must be tried. If essential, changes must be made at this stage.  </p>
	<p class="wow fadeInDown" data-wow-delay=".5s"><strong>5</strong><i class="fa fa-check"></i>The framework is put into utilisation. This should be possible in different ways. The new frame can stage in, as indicated by application or area, and the old framework slowly supplanted. Now and again, it might be more practical to close down the ancient context and execute the new frame at the same time. </p>
	<p class="wow fadeInDown" data-wow-delay=".5s"><strong>6</strong><i class="fa fa-check"></i>Once the new framework is up and running for a moment, it ought to be comprehensively assessed. Upkeep must be kept up thoroughly at all times. Users of the structure ought to be staying up with the latest concerning the most recent changes and methodology.  </p>
	<p class="wow fadeInDown" data-wow-delay=".5s"><strong>7</strong><i class="fa fa-check"></i>The frameworks advancement life cycle demonstrate created as an organised way to deal with data framework improvement that aide every one of the procedures required from an underlying plausibility ponders through to the upkeep of the completed application. SDLC models adopt an assortment of strategies for improvement.  </p>
		
		
	<p class="wow fadeInDown" data-wow-delay=".5s">The benefits of Software Development for your BusinessAt WESMARTIFY RESOURCES, we have built custom software applications and systems for business pioneers in an extensive variety of enterprises, and we have some expertise in creating custom software which will enablethe more significant part of your business system to convey flawlessly. Ourspecialists will work intimately with you to decide wasteful aspects of yourpresent work process to make an all-encompassing arrangement that tends to your centre issues. </p>
		
<p class="wow fadeInDown" data-wow-delay=".5s">We can coordinate your needs into a single custom programming arrangement that will be less demanding to overseewhile additionally better addressing your necessities. Given our broad experience, we have likely chipped away at ventures like yours previously and can offer a proficient and financially savvy answer for your concern.
Hide Sidebar
Comments</p> <center>
<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control quantity qnty-input" value="1" />
													 <button 
													class="pay fa btn  add_to_cart" 
													name="add_to_cart"
													data-orderId="ID00'.$row["id"].'" 
													data-MYRCode="'.$row["MYR_price"] .'" 
													data-serviceTitle="'.$row["name"].'"
													id="'.$row["id"].'" style="background: #9c27b0; color:white;"
												>
													Add To Cart &nbsp;&nbsp;&nbsp;	&#xf218 '.$row["MYR_price"] .' MYR
												</button>
												
												<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
												<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["MYR_price"] .'" />
		  
    </div>
	  </div>
  </div>
</section> 	<center>';
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
	
<script>
						$(document).ready(function(){
							load_product();

							load_cart_data();

							function load_product()
							{
								$.ajax({
									url:"i",
									method:"POST",
									success:function(data)
									{
										$('#display_item').html(data);
									}
								});
							}

							function load_cart_data()
							{
								$.ajax({
									url:"fetch_cart.php",
									method:"POST",
									dataType:"json",
									success:function(data)
									{
										$('#cart_details').html(data.cart_details);
										$('.total_price').text(data.total_price);
									
										$("#amount").val(data.total_price + " MYR");
										$("#amount1").val(data.total_price + " MYR");
														
										$('.badge').text(data.total_item);
									}
								});
							}

							$('#cart-popover').popover({
								html : true,
								container: 'body',
								content:function(){
									return $('#popover_content_wrapper').html();
								}
							});

							$(document).on('click', '.add_to_cart', function(){
								var product_id = $(this).attr("id");
								var product_name = $('#name'+product_id+'').val();
								var product_price = $('#price'+product_id+'').val();
								var product_quantity = $('#quantity'+product_id).val();
								var action = "add";
								if(product_quantity > 0)
								{
									$.ajax({
										url:"action.php",
										method:"POST",
										data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
										success:function(data)
										{
											load_cart_data();
											//alert("Item has been Added into Cart");
										}
									});
								}
								else
								{
									alert("lease Enter Number of Quantity");
								}
							});

							$(document).on('click', '.delete', function(){
								var product_id = $(this).attr("id");
								var action = 'remove';
								if(confirm("Are you sure you want to remove this product?"))
								{
									$.ajax({
										url:"action.php",
										method:"POST",
										data:{product_id:product_id, action:action},
										success:function()
										{
											load_cart_data();
											$('#cart-popover').popover('hide');
											//alert("Item has been removed from Cart");
										}
									})
								}
								else
								{
									return false;
								}
							});

							$(document).on('click', '#clear_cart', function(){
								var action = 'empty';
								$.ajax({
									url:"action.php",
									method:"POST",
									data:{action:action},
									success:function()
									{
										load_cart_data();
										$('#cart-popover').popover('hide');
										//alert("Your Cart has been clear");
									}
								});
							});
						});

						$(document).on("click", "#check_out_cart", function(){
							$(".popover").hide();
						}); </script>
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