<?php 

// ini_set('display_errors', 1);

// ini_set('display_startup_errors', 1);

// error_reporting(E_ALL);



include('database_connection.php'); 

$query = "SELECT * FROM tbl_product ORDER BY id";			

$statement = $connect->prepare($query);

?>



<!DOCTYPE HTML>

<html>



<head>

	<title> S&S Khan Resources</title>

	<link rel="shortcut icon" href="images/Final1.png" style="height: 80px;" type="image/x-icon" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- BOOTSTRAPE ICONS -->

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

	<!-- Custom Theme files -->

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Custom Theme files -->

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





	<!-- start-smoth-scrolling -->

	<!-- animated-css -->

	<style>

		body p,

		h3,

		h4,

		h1,

		h2 {

			font-family: 'Raleway' !important;

		}



		.errField {

			border-bottom: 3px outset red !important;

		}



		.errFields {

			border-bottom: 3px red outset !important;

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



		.img-space{

			margin: 35px 0;

		}



		.services img{

			max-width:100%;

		}

		#spay{

			display: none

		}

		#btn1{

			text-align: center;

			color: 'blue' !important;

			width: 20%

		}



	</style>

	

	<!--Start of Tawk.to Script--

    <script type="text/javascript">

    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

    (function(){

    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];

    s1.async=true;

    s1.src='https://embed.tawk.to/5b4b8c7891379020b95edff3/default';

    s1.charset='UTF-8';

    s1.setAttribute('crossorigin','*');

    s0.parentNode.insertBefore(s1,s0);

    })();

    </script>

    <!--End of Tawk.to Script-->

</head>



<body>

	<!--banner start here-->

	<div class="banner">

		<div class="container">

			<div class="banner-main">

				<div class="logo wow bounceInLeft" data-wow-delay="0.1s">

					<a href="index.html">

						<img src="images/Final1.png" height="80px;">

					</a>

					<p style="color: white; font-family: 'Raleway';"> We are a dedicated gathering with broad experience of business and specialized operations out in the open part and business

						affiliations.

					</p>

				</div>

				<div class="top-nav-w3layouts">

					<div class="menu">

						<a href="#" id="m_nav_menu" class="navicon"></a>

						<div class="toggle">

							<ul id="m_nav_list" class="toggle-menu">

								<li class="m_nav_item  fa fa-home">

									<a href="index.html" class="active"> Home</a>

								</li>

								<li class="m_nav_item fa fa-info-circle">

									<a href="#about" class="navicon1 scroll "> About</a>

								</li>

								<li class="m_nav_item fa fa-handshake-o">

									<a href="#services" class="navicon1 scroll "> Services</a>

								</li>

								<li class="m_nav_item fa fa-camera-retro">

									<a href="#gallery" class="navicon1 scroll"> Gallery</a>

								</li>

								<li class="m_nav_item fa fa-undo">

									<a href="#refund" class="navicon1 scroll">Delivery & Refund</a>

								</li>



								<li class="m_nav_item fa fa-lock">

									<a href="#privacy" class="navicon1 scroll"> Privacy</a>

								</li>

								<li class="m_nav_item fa fa-phone">

									<a href="#contact" class="navicon1 scroll"> Contact</a>

								</li>

							</ul>

						</div>

					</div>

					<script src="js/jquery-1.11.0.min.js"></script>

					<script type="text/javascript">

						jQuery(document).ready(function ($) {

							$(".scroll").click(function (event) {

								event.preventDefault();

								$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);

							});

						});

					</script>

					<!-- //end-smoth-scrolling -->

					<!-- animated-css -->

					<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">

					<script src="js/wow.min.js"></script>

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

										$("#amount4").val(data.total_price);



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

								console.log({product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity})

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

							// $("#paymnt").show()

						});







						new WOW().init();

						$(function () {

							$(document).on("click", ".pay", function () {

								var self = $(this);

								//var amountInUSD = self.attr("data-code");

								var amountInMYR = self.attr("data-MYRcode");

								var serviceTitle = self.attr("data-serviceTitle");

								var orderId = self.attr("data-orderId");

								//$("#curreny").attr("data-selectedMYR", amountInMYR).attr("data-selectedUSD", amountInUSD);

								$("#amount").val(amountInMYR + "MYR");

								$("#amount1").val(amountInMYR + "MYR");

								$("#amount3").val(amountInMYR + "MYR");

								$("#amount4").val(amountInMYR);

								$("#serviceTitle").val(serviceTitle);

								$("#serviceTitle2").val(serviceTitle);

								$("#serviceTitle3").val(serviceTitle);

								$("#orderid").val(orderId);

								$("#orderid3").val(orderId);



								$('html,body').animate({ scrollTop: $('#navbar-cart').offset().top }, 1000);

								

								/*setTimeout(function(){

									$('#cart-popover').popover('hide');

								}, 100);

								setTimeout(function(){

									$('#cart-popover').trigger('click');

								}, 2000);*/

							});

							/*$(document).on("change", "#curreny", function () {

								var self = $(this);

								var selectedVal = self.val();

								if (selectedVal === "MYR") {

									$("#amount").val(self.attr("data-selectedMYR"));

								} else {

									$("#amount").val(self.attr("data-selectedUSD"));

								}

							});*/



							/*$("#confirm").on("click", function () {





								var validationsPassed = true;

								var self = $(this);



								var obj = {

									fulName: $("#fulName").val().trim(),

									birthDate: $("#birthDate").val().trim(),

									amount: $("#amount").val().trim(),

									emailField: $("#emailField").val().trim(),

									phone: $("#phone").val().trim(),

									//curreny: $("#curreny").val(),

									Address: $("#Address").val().trim(),

									PostalCode: $("#PostalCode").val().trim(),

									city: $("#city").val().trim(),

									state: $("#state").val().trim(),

									country: $("#country").val().trim(),

								};

								var sec = $('#secret').val();



								var isValid = 0;

								$.ajax({

									type: "post",

									url: "check_secret_key.php",

									data: {

										secret:sec

									},

									async: false,

									success: function (success) {

										success = JSON.parse(success);

										debugger;

										if (success.status === 0 ) {

											swal("Uh !", "You Entered Incorrect Subscription Code !", "error");

											if (sec == "") {

												var $el = $("#secret");

												$el.addClass("errField");

												validationsPassed = false;

											}

											validationsPassed = false;

											return false;

										}

										else{

											isValid = 1;

											console.log('valid');

											// $("#paymentForm").submit();

											return true;

										}													

									},

									error: function () {

										canSubmit = 0;

										swal("Uh !", "Something went wrong with subscription code !", "error");

									}

								});





								for (var keys in obj) {

									if (!obj[keys]) {

										var $el = $("#" + keys);

										$el.addClass("errField");

										validationsPassed = false;

									}

								}

								if (!validationsPassed) {

									return;

								}



								if (!validateEmail(obj.emailField)) {

									var $el = $("#emailField");

									$el.addClass("errField");

									validationsPassed = false;

									return;

								}



								var isAggree = $("#checkBox_isAggree").prop("checked");



								if (!isAggree) {

									var $el = $("#para_isAggree");

									$el.addClass("errField");

									validationsPassed = false;

									return;

								}

								

								var poption = $('select[name="paymenMethod"]').val();



								if( poption == 'other' ){

									/*var dataObj = $("#paymentForm").serializeArray();

									self.attr("disabled", true);

									$.ajax({

										type: "post",

										url: "save_custOrder.php",

										data: dataObj,

										success: function (success) {

											success = JSON.parse(success);

											// debugger;

											if (!success.status) {

												self.removeAttr("disabled");

												return alert(success.message || "Error received from server");

											}

											$("#paymentForm").submit();

										},

										error: function () {

											self.removeAttr("disabled");

											console.log(" Error in sending data ");

										}

									});*/

								/*}

								

								console.log(isValid);

								

								if(isValid == 1){

								    $("#paymentForm").submit();

								}

								else{

								    return false;

								}



								// $("#paymentForm").submit();



							});*/

							

							

							$(document).on("change", '#checkBox_isAggree', function () {

								var $el = $("#para_isAggree");

								self.removeClass("errField");

							})



							$(document).on("focus", '.errField', function () {

								var self = $(this);

								self.removeClass("errField");

							})

							

							function validateEmail(email) {

								var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

								return re.test(email);

							}

						})

					</script>

					<!-- menu-js -->



					<script>

						$('.navicon').on('click', function (e) {

							e.preventDefault();

							$(this).toggleClass('navicon--active');

							$('.toggle').toggleClass('toggle--active');

						});

					</script>

					<script>

						$('.navicon1').on('click', function (e) {

							e.preventDefault();

							$('.toggle').toggleClass('toggle--active');

							$('.navicon').toggleClass('navicon--active');

						});

					</script>

					<!-- //menu-js -->

				</div>

				<div class="clearfix"> </div>

			</div>

		</div>

	</div>

	<!--banner end here-->

	<!--about start here-->

	<style>

		#about h2,

		h3 {

			color: #398AA2;

			;

		}



		#services h1,

		h3 {

			color: #398AA2;

			font-weight: bold;

		}



		#about p {

			color: dimgray;

			line-height: 30px;

			font-family: san Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif' !important;

		}

	</style>

	<div class="about" id="about">

		<div class="container">



			<h2 class="col-md-12 text-center">About Us</h2>

			<div class="col-md-12">

				<p>Wіth thе hесtіс lіfеѕtуlеѕ experienced tоdау, wе understand thаt vеrу fеw реорlе hаvе thе tіmе оr indeed thе іnсlіnаtіоn

					tо manage thеіr fіnаnсіаl аffаіrѕ effectively. Thаt’ѕ hаrdlу surprising аѕ the fіnаnсіаl world wе lіvе іn іѕ соmрlеx

					and fast-changing. Hоwеvеr, аt оnе tіmе оr another most оf uѕ wіll nееd tо ѕееk fіnаnсіаl аdvісе. At <i>S&S KHAN RESOURCES</i>					wе have a wіdе range оf expertise аnd knowledge, dеvеlореd оvеr mаnу уеаrѕ, tо hеlр people – bоth individually аnd іn

					business – fulfill thеіr аіmѕ аnd aspirations, аѕ well аѕ оffеrіng that all important ‘peace of mind’ fоr thе futurе.

				</p>

				<p>Our ultіmаtе gоаl іѕ tо еnѕurе the best financial future fоr уоu and your fаmіlу. As аn іndереndеnt practice, <i>S&S KHAN RESOURCES</i>					provides a реrѕоnаlіzеd сlіеnt experience lіkе nо оthеr, delivering rеаl value аnd exceptional ѕеrvісе bаѕеd оn knоwlеdgе,

					truѕt, and combined fіnаnсіаl industry еxреrіеnсе. We believe сlіеntѕ dеѕеrvе mоrе thаn generalist сараbіlіtіеѕ аnd

					a unіvеrѕаl, rigid аррrоасh tо thе mаrkеtѕ, so wе custom buіlt a tеаm оf Advіѕоrѕ capable of mаnаgіng vіrtuаllу every

					аѕресt of уоur fіnаnсіаl wеll-bеіng. Experts frоm mаnу different сарасіtіеѕ ѕеrvе еасh сlіеnt'ѕ portfolio, rеѕultіng

					іn thе creation оf a comprehensive уеt flexible рrоgrаm that rеflесtѕ a truе understanding of уоur unique nееdѕ аnd

					tоdау'ѕ еvеr-сhаngіng mаrkеt соndіtіоnѕ.

				</p>

				<p>Thіѕ commitment аnd dedication to each and еvеrу client rеlаtіоnѕhір are increasingly rаrе асrоѕѕ thе financial services

					industry, but at <i>S&S KHAN RESOURCES</i>, іt remains оur hіghеѕt priority аnd the mеthоd bу whісh wе achieve uncommon

					rеѕultѕ. </p>

				<hr width="50%" style="background: #92928C; height: 2px;">

				<h2 class="text-center">How We Arе Different</h2>

				<h3>Focused оn Yоu </h3>

				<p>Thе соmраnу’ѕ success іѕ fueled by fосuѕіng еxсluѕіvеlу аnd оbjесtіvеlу оn the nееdѕ and gоаlѕ of аdvіѕоrѕ whо wаnt tо

					gain ассеѕѕ tо superior орроrtunіtіеѕ tо ѕеrvе thеіr сlіеntѕ аnd grоw their fіnаnсіаl іnсоmеѕ fаѕtеr. We view our clients’

					buѕіnеѕѕеѕ frоm аll аnglеѕ tо gain an undеrѕtаndіng оf іmроrtаnt іѕѕuеѕ аnd frustrations аnd аѕk рrоvосаtіvе quеѕtіоnѕ.

					We lіѕtеn саrеfullу with аn еxреrt еаr, аnd wіll nеvеr wаѕtе аnуоnе’ѕ valuable time. Whеthеr thе gоаl іѕ mоnеtіzіng

					a рrасtісе, асhіеvіng greater іndереndеnсе, сrеаtіng a succession plan, аcquіrіng оr selling a рrасtісе, оr all of thе

					аbоvе, we hаvе a well-established trасk rесоrd оf ѕuссеѕѕ. </p>

				<p>Wе аrе not “trаdіtіоnаl” fіnаnсіаl advisors іn thе ѕеnѕе thаt wе do nоt ѕеll аnу financial рrоduсtѕ, i.e. investments,

					аnnuіtіеѕ, оr lіfе іnѕurаnсе. While wе mау rесоmmеnd vаrіоuѕ fіnаnсіаl рrоduсtѕ as part оf our соnѕultіng ѕеrvісеѕ,

					wе do nоt ассерt аnу referral fees оr соmmіѕѕіоnѕ from оthеr fіnаnсіаl рrоfеѕѕіоnаlѕ. Our сlіеntѕ соmе to uѕ ѕtrісtlу

					for independent аnd оbjесtіvе fіnаnсіаl соnѕultіng and аdvісе. We charge our сlіеntѕ fоr our соnѕultіng, ассоuntіng,

					аnd tаx ѕеrvісеѕ. </p>

				<h3>Why plan?</h3>

				<p>If you’ve еvеr wondered whether you аrе making a gооd fіnаnсіаl dесіѕіоn or nоt, that іѕ why уоu ѕhоuld plan. </p>

				<p>Fіnаnсіаl рlаnnіng, above аll else, is аbоut helping you make good fіnаnсіаl decisions. This dесіѕіоn-mаkіng соuld bе

					in determining hоw muсh tо save vеrѕuѕ ѕреnd, hоw tо рrіоrіtіzе ѕhоrt-tеrm and lоng-tеrm nееdѕ and gоаlѕ, and a variety

					of оthеr quеѕtіоnѕ. At <i>S&S KHAN RESOURCES</i>, wе аrе ѕkіllеd financial planners, but оnlу you аrе thе еxреrt іn

					you. Onlу уоu know whаt уоu hоре tо achieve аnd whаt іѕ іmроrtаnt to уоu. Our service іѕ designed tо рrоvіdе уоu the

					tооlѕ tо make gооd financial dесіѕіоnѕ fоr you.

				</p>

				<p>Thrоugh оur service, wе will рrоvіdе recommendations and guidance. And we wіll аnѕwеr уоur fіnаnсіаl quеѕtіоnѕ. But wе

					аlѕо hоре to еmроwеr уоu tо make thе fіnаl dеtеrmіnаtіоn оn whаt іѕ bеѕt fоr you and uѕе оur еxреrtіѕе only as a guіdе.

					At <i>S&S KHAN RESOURCES</i>, we believe thаt оur еduсаtіоnаl system hаѕ lаrgеlу fаіlеd tо dеlіvеr mеаnіngful fіnаnсіаl

					education leaving mаnу іndіvіduаlѕ lасkіng bаѕіс personal finance knowledge. We аіm tо сhаngе thаt by helping you gеt

					a grip оn уоur fіnаnсіаl рісturе and lеаrn hоw tо pull it аll tоgеthеr bу dеvеlоріng a рlаn thаt аѕѕіѕtѕ in thе ѕhоrt,

					mid аnd long-term fіnаnсіаl gоаlѕ. </p>

				<p>Wіth оur ѕtаff of fіnаnсіаl рrоfеѕѕіоnаlѕ, including some thаt аrе CERTIFIED FINANCIAL PLANNER™ рrоfеѕѕіоnаlѕ, bасkеd

					wіth ѕuреrіоr tесhnоlоgу you’ll gеt a truе аnаlуѕіѕ of уоur fіnаnсіаl picture unclouded by соmmіѕѕіоnѕ оr рrоduсt ѕаlеѕ.

					Wе аrе fiduciaries and thus dutу-bоund to put our clients’ interests fіrѕt, always. </p>

				<h3>Wе'll Hеlр Yоu Gеt оn Trасk</h3>

				<p>Fіduсіаrу, independent fіnаnсіаl planning hаѕ trаdіtіоnаllу been limited tо only thе wealthy.</p>

				<p>Nо longer! <i>S&S KHAN RESOURCES</i>, wе рrоvіdе financial рlаnnіng ѕеrvісеѕ fоr people who nееd it mоѕt. Fоr уеаrѕ,

					thе fіnаnсіаl planning profession hаѕ bееn dеrіdеd fоr nоt оffеrіng advice and ѕеrvісеѕ tо реорlе whо соuld mоѕt bеnеfіt;

					those who еаrn just еnоugh tо рау the bіllѕ but dоn’t seem tо bе аblе to ѕаvе fоr the futurе.</p>

				<p>Wе formed <i>S&S KHAN RESOURCES</i> tо dеlіvеr advice to these реорlе. Duе tо both a dеѕіrе tо work with the rest of

					Mаlауѕіа аnd аdvаnсеѕ іn technology thаt allow uѕ tо provide a high lеvеl оf ѕеrvісе wіth lоwеrеd оvеrhеаd соѕtѕ, wе

					аrе аblе to brіng fіnаnсіаl planning tо you.</p>

				<h2 class="text-center">What We Deliver ? </h2>

				<h4><i class="fa fa-lightbulb-o"> </i>Financial courses аnd еduсаtіоn</h4>

				<p>Fіnаnсіаl Courses аnd Eduсаtіоn іnѕtіll реорlе wіth thе set оf ѕkіllѕ аnd idea that provide thеm wіth the аbіlіtу to

					make smart, іnfоrmеd аnd еffесtіvе dесіѕіоnѕ with аll оf thеіr fіnаnсіаl resources. Our соurѕеѕ gіvе уоu a bеttеr understanding

					оf hоw tо іmрrоvе уоur knowledge оn finance, by hеlріng you control, рrоtесt and іnvеѕt уоur recourses. </p>



				<h4><i class="fa fa-lightbulb-o"> </i>Dеtаіlеd саlсulаtіоnѕ аnd саlсulаtоrѕ </h4>

				<p> Our Fіnаnсіаl calculations and саlсulаtоrѕ hеlр уоu mаkе dесіѕіоnѕ аnd plans thаt wіll fаvоr уоu іn mоrе wауѕ thаn one.

					It wоuld help you mаkе a wise сhоісе fоr a mоrtgаgе уоu рlаn tо tаkе. It саn аlѕо hеlр уоu know thе еxасt fіgurе оf

					thе соmроund interest on уоur savings. Wіth іt, we саn аlѕо help уоu decide the bеѕt wауѕ tо invest fоr thе future and

					ultimately fоr a great rеtіrеmеnt. </p>



				<h4><i class="fa fa-lightbulb-o"> </i>Financial nеgоtіаtіоn</h4>

				<p> Our Financial nеgоtіаtіоn саn bе very uѕеful in dіffеrеnt ways іnсludіng dealing wіth ѕuррlіеrѕ, by hеlріng you mаіntаіn

					ѕоlіd соmmunісаtіоn ѕkіllѕ, wе рrоvіdе a wау fоr you to dіѕсоvеr аrеаѕ thаt уоu bоth саn рrоfіt frоm, change tо a nеw

					ѕuррlіеr, thеrеbу сrеаtіng соmреtіtіvе pricing, it саn аlѕо ѕhоw thе ѕuррlіеr thаt you саn keep a long-term rеlаtіоnѕhір.

					Our Fіnаnсіаl negotiation саn hеlр уоu mаkе dесіѕіоnѕ іnvоlvіng mеmbеrѕ of thе family аnd саn hеlр you ѕееk fіnаnсіаl

					ѕеrvісеѕ.

				</p>



				<h4><i class="fa fa-lightbulb-o"> </i>Fіnаnсіаl рlаnnіng</h4>

				<p> Lack of financial рlаnnіng can lead tо рrоblеmѕ аnd challenges аnd thіѕ hарреnѕ tо еvеrуоnе, thіѕ саn mаkе you ѕtrеѕѕ

					too muсh аnd wоrrу. But dіѕсоvеrіng thаt thеrе is a ѕоlutіоn tо thіѕ problem саn gіvе u a fееlіng оf rеlіеf, <i>S&S KHAN RESOURCES</i>					provide thе bеѕt ѕоlutіоn tо уоur рrоblеmѕ, we hеlр уоu оvеrсоmе fіnаnсіаl рrоblеmѕ and difficulties through рlаnnіng

					bу hеlріng you ѕоlvе thе problem thаt іѕ саuѕіng уоur fіnаnсіаl dіffісultу аnd helps уоu get your fіnаnсеѕ back оn track.

					Creating a budgеt thаt guides your ѕреndіng dесіѕіоnѕ so that you оnlу ѕреnd money on important things. </p>



				<h4><i class="fa fa-lightbulb-o"> </i>Balance transferring</h4>

				<p> Now, wе know thіѕ could bе overwhelming. Thаt іѕ whу wе are here fоr уоu. Wе wіll offer уоu a оnе-оn-оnе professional

					guіdе оn Bаlаnсе transferring. Wе wіll also оffеr уоu оur еxреrt'ѕ оріnіоn tо help you mаіntаіn a great сrеdіt rесоrd

					аnd a рrореr fіnаnсіаl management plan. </p>



				<h4><i class="fa fa-lightbulb-o"> </i>Consultancy services</h4>

				<p>Everyone wоuld nееd a personal financial advisor оr соnѕultаnt in his or hеr lіfе оnе tіmе оr thе оthеr, thаt’ѕ whу аt

					<i>S&S KHAN RESOURCES</i> wе рrоvіdе juѕt thаt. Wе аrе just оnе рhоnе саll аwау from hеlріng уоu dесіdе thе fate of

					уоur fіnаnсеѕ. </p>

				<h4><i class="fa fa-lightbulb-o"> </i>Other services</h4>

				<p>Thеѕе іnсludе rеduсtіоn hіgh rates tо Prime rates аnd Dеbt Consolidation.</p>





			</div>

		</div>

		<!--about END  here-->

		<!--TERMS & Conditions starts -->

		<div class="features-top w3-agile" id="term" style="display: none;">

			<h2>Terms And Conditions</h2>

			<div class="fea-agileits wow bounceInLeft" data-wow-delay="0.1s">

				<h3 class="privacy">Introduction</h3>

				<p class="terms">by going to our site and getting to the data, assets, administrations, items, and instruments we give, you comprehend

					and consent to acknowledge and cling to the accompanying terms and conditions as expressed in this policy(HenceAfter

					referred to as ‘User Agreement’).

				</p>

				<p class="terms">This understanding is in actuality as of April 01, 2017.</p>

				<p class="terms">We maintain whatever authority is needed to change this User Agreement every once in a while without take note. You recognize

					and concur that it is your duty to survey this User Agreement intermittently to acclimate yourself with any changes.

					Your proceeded with utilization of this site after such adjustments will constitute affirmation and understanding of

					the changed terms and conditions.</p>

				<h3 class="privacy">Responsible Use and Conduct</h3>

				<p class="terms">By going to our site and getting to the data, assets, administrations, items, and instruments we accommodate you, either

					specifically or in a roundabout way (henceforth alluded to as 'Assets'), you consent to utilize these Resources just

					for the reasons expected as allowed by (a) the terms of this User Agreement, and (b) appropriate laws, directions and

					by and large acknowledged online practices or rules</p>

				<p class="terms">Wherein, you comprehend that:</p>

				<p class="terms">A. To get to our Resources, you might be required to give certain data about yourself, (for example, recognizable proof,

					contact points of interest, and so forth.) as a component of the enrollment procedure, or as a feature of your capacity

					to utilize the Resources. You concur that any data you give will dependably be exact, rectify, and up and coming.</p>



				<p class="terms">B. You are responsible of keeping up the secrecy of any login data related with any account you use to get to our Resources.

					As needs be, you are in charge of all exercises that happen under your account/s.</p>



				<p class="terms">C. Getting to (or endeavoring to get to) any of our Resources by any methods other than through the methods we give,

					is entirely denied. You particularly concur not to access (or endeavor to get to) any of our Resources through any robotized,

					exploitative or capricious means.</p>



				<p class="terms">D.Participating in any action that disturbs or meddles with our Resources, including the servers and additionally systems

					to which our Resources are found or associated, is entirely precluded.</p>

				<p class="terms">E. Trying to copy, duplicate, mimic, offer, trade, or trade our Resources is altogether denied.</p>

				<p class="terms">F. You are only competent any outcomes, incidents, or damages that we may particularly or by suggestion achieve or persevere

					in view of any unapproved practices coordinated by you, as cleared up above, and may secure criminal or regular hazard.</p>



				<p class="terms">G. We may give different open specialized instruments on our site, for example, blog remarks, blog entries, open visit,

					discussions, message sheets, newsgroups, item appraisals and surveys, different online networking administrations, and

					so on. You comprehend that for the most part we don't pre-screen or screen the substance posted by clients of these

					different specialized instruments, which implies that on the off chance that you utilize these devices to present any

					sort of substance to our site, at that point it is your moral duty to utilize these apparatuses in a mindful and moral

					way. By posting data or generally utilizing any open specialized devices as specified, you concur that you won't transfer,

					post, share, or generally convey any substance that:</p>

				<br>

				<p class="terms">i) Is unlawful, undermining, defamatory, harsh, pestering, debasing, scary, fake, beguiling, intrusive, supremacist,

					or contains any kind of suggestive, wrong, or unequivocal dialect.</p>

				<p class="terms">ii).ii) Infringes on any trademark, patent, trade secret, copyright, or other proprietary right of any party.</p>

				<p class="terms">iii) Contains any sort of unapproved or spontaneous publicizing.</p>

				<p class="terms">iv) Imitates any individual or element, including any S&S khan workers or delegates.</p>

				<p class="terms">Encroaches on any trademark, patent, competitive advantage, copyright, or other exclusive right of any gathering.</p>

				<h3 class="privacy"> Limitation of Warranties</h3>

				<p class="terms"> We have the comfortable sole attentiveness to expel any substance that, we feel in our judgment does not follow this

					User Agreement, alongside any substance that we feel is generally hostile, hurtful, offensive, erroneous, or disregards

					any outsider copyrights or trademarks. We are not responsible for any postponement or disappointment in evacuating such

					substance. On the off chance that you post content that we expel, you thusly agree to such expulsion, and agree to defer

					any claim against us.</p>

				<p class="terms">By utilizing our site, you comprehend and concur that all Resources we give are "as may be" and "as accessible". This

					implies we don't speak to or warrant to you that:

					<p class="terms">i) the use of our Resources will address your issues or prerequisites.</p>

					<p class="terms">ii) the usage of our Resources will be ceaseless, fortunate, secure or free from mistakes.</p>

					<p class="terms">iii) the data got by utilizing our Resources will be precise or dependable, and iv) any imperfections in the operation

						or usefulness of any Resources we provide will be repaired or redressed.</p>

				</p>

				<h3 class="privacy">Moreover, you comprehend and concur that:</h3>

				<p class="terms">v) the any substance downloaded or by and large completed utilizing our Resources is at your own specific alert and peril,

					and that you are solely responsible for any damage to your PC or diverse contraptions for any loss of data that may

					come to fruition in light of the download of such substanceof our Resources will be persistent, helpful, secure or free

					from blunders.</p>

				<p class="terms">vi) no information or guidance, paying little mind to whether imparted, recommended, oral or formed, got by you from

					S&S Khan or through any Resources we give should make any ensure, confirmation, or conditions of any kind, except for

					those unequivocally laid out in this User Agreement.</p>

				<h3 class="privacy">Limitation of Liability</h3>



				<p class="terms">In conjunction with the Limitation of Warranties as clarified above, you explicitly comprehend and concur that any claim

					against us might be restricted to the sum you paid, assuming any, for utilization of items as well as administrations.

					S&S Khan won't be at risk for any immediate, backhanded, coincidental, important or praiseworthy misfortune or harms

					which might be brought about by you because of utilizing our Resources, or because of any progressions, information

					misfortune or debasement, cancelation, loss of access, or downtime to the full degree that relevant impediment of obligation

					laws apply.</p>

				<h3 class="privacy">Copyrights/Trademarks</h3>

				<p class="terms">All substance and materials open on www.snskhanresources.com, including yet not obliged to content, representations,

					site name, code, pictures and logos are the authorized advancement of www.snskhanresources.com, and are secured by suitable

					copyright and trademark law. Any unrefined use, including however not obliged to the augmentation, transport, show or

					transmission of any substance on this site is completely limited, unless especially endorsed by S&S Khan.</p>

				<h3 class="privacy"> Termination of Use</h3>

				<p class="terms">You agree that we may, at our sole watchfulness, suspend or end your passage to all or some segment of our site and Resources

					with or without notice and for any reason, including, without imperative, break of this User Agreement. Any theorized

					unlawful, misleading or harmful activity may be purpose behind completion your relationship and may be suggested fitting

					law prerequisite experts. Upon suspension or end, your privilege to use the Resources we give will in a split second

					stop, and we keep up whatever expert is expected to empty or eradicate any information that you may have on archive

					with us, including any record or login information.</p>



				<h3 class="privacy"> Governing Law</h3>

				<p class="terms">This site is controlled by www.snskhanresources.com from our work environments arranged in the state of ipoh perak ,

					Malaysia. It can be gotten to by most countries around the world. As each country has laws that may change from those

					of ipoh perak , by getting to our site, you agree that the statutes and laws of ipoh perak, without regard to the dispute

					of laws and the United Nations Convention on the International Sales of Goods and Services, will apply to all issues

					relating to the usage of this site and the purchase of any things or organizations through this site.</p>

				<p class="terms">Also, any movement to actualize this User Agreement ought to be obtained the legislature or state courts arranged in

					ipoh perak Malaysia, You along these lines agree to singular region by such courts, and swear off any jurisdictional,

					scene, or unbalanced discourse protestations to such courts.</p>

				<h3 class="privacy">Guarantee</h3>

				<p class="terms">Unless Generally Communicasted, www.snskhanresources.com Explicitly Disavows all Guarantees and States of any Sort, Regardless

					of whether express of Suggested,Including, Yet not Constrained to the Inferred Guarantees and States of Merchantability,

					Wellness for A Specific Reason and non-Encroachment.</p>

				<h3 class="privacy">Refund / Return Policy</h3>

				<p class="terms">

				In case you are not 100% content with any S&S Khan Resources's Services, please connect with us under 10 days of your purchase to get a Refund / Return. Your Refund / Return will be subjected to dealing with cost and the getting ready charges will be deducted from the whole total before Refund / Return. <br />

				Refunds / Returns requested more than 10 days after your purchase date won't be issued unless the trade was the outcome of a phony purchase.If you are issued a Refund / Return, it should appear on your Mastercard or check card declaration inside 72 hours upon us illuminating you. In the wake of tolerating your Refund / Return, you agree to uninstall and also quit using any S&S Khan Resources. programming product(s) for which you never again have a considerable allow for S&S Khan Resources keeps up whatever expert is expected to injure any S&S Khan Resources Account, thing keys, vouchers or possibly serial numbers issued for the Refunded / Returned things.

				</p>

				<h3 class="privacy"> Contact Information</h3>

				<p class="terms">If you have any request or comments about our Terms of Administration as portrayed above, you can connect with us at:</p>

				<p class="terms">SnSKhanresources.com</p>

				<p class="terms">Lot F19, MyDin Meru Raya, Jalan Meru Bestari B2 Bandar Meru Raya, </p>



			</div>

			<a href="#paymnt" rel="modal:open">

				<p style="text-align: center;color: black; font-size: 1em;">Close Terms & Conditions</p>

			</a>

		</div>

		<div class="clearfix"> </div>

	</div>

	<!--TERMS Close-->

	<!--about end here-->

	<!--services strat here-->



	<!-- cart menu -->

	<div class="container">

		<nav class="navbar navbar-default" role="navigation">

			<div class="container-fluid">

				<div class="navbar-header">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">

					<span class="sr-only">Menu</span>

					<span class="glyphicon glyphicon-menu-hamburger"></span>

					</button>

					<a class="navbar-brand" href="/">S&S KHAN RESOURCES SHOPCART</a>

				</div>

				<div id="navbar-cart" class="navbar-collapse  collapse">

					<ul class="nav navbar-nav pull-right">

						<li>

							<a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">

								<span class="glyphicon glyphicon-shopping-cart"></span>

								<span class="badge"></span>

								<span class="total_price">0.00</span>

							</a>

						</li>

					</ul>

				</div>

				

			</div>

		</nav>

		<div id="popover_content_wrapper" style="display: none;">

			<span id="cart_details"></span>

			<div align="right">

				<a href="#paymnt" rel="modal:open" class="btn btn-primary" id="check_out_cart">

				<span class="glyphicon glyphicon-shopping-cart"></span> Check out

				</a>

				<a href="#" class="btn btn-default" id="clear_cart">

				<span class="glyphicon glyphicon-trash"></span> Clear

				</a>

			</div>

		</div>



		<div id="display_item">

		</div>

	</div>

	<!-- END -->





	<div class="services" id="services">

		<div class="container">

			<h1 class="text-center">Our Services</h1> <br>

			

			<?php

				if($statement->execute())

				{

					$result = $statement->fetchAll();

					$output = '';



					// var_dump($result);



					foreach($result as $key => $row)

					{

						$blockClass = "about-block";

						$leftImg    = '';

						$rightImg   = '';

						if( ($key % 2) == 0 ){

							$blockClass = "about-block-snd";

							$rightImg   = '

								<div class="changer-right wow bounceInRight" data-wow-delay="0.1s">

									<img src="'.$row["image"].'" style=" box-shadow: 10px 10px 12px grey;">

								</div>

							';

							$imgPositionClass = 'changer-left wow bounceInLeft';

						}

						else{

							$leftImg    = '

								<div class="changer-left-snd img-space wow bounceInLeft" data-wow-delay="0.1s">

									<img src="'.$row["image"].'" style=" box-shadow: 10px 10px 12px grey;">

								</div> <br>

							';



							$imgPositionClass = 'changer-right-snd wow bounceInRight';

						}



						$output .= '

							<div class="about-main">

								<div class="changer-main">

									<span class="devide-line w3-agile"> </span>

									<div class="'.$blockClass.'">

										'.$leftImg.'

										<div class="'.$imgPositionClass.'" data-wow-delay="0.1s">

											<h3>'.$row["title"].'</h3>

											<h4>'.$row["name"].'</h4>



											'.$row["description"].'

											

											<a href="#paymntBK" rel="modal:open">

												<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control quantity qnty-input" value="1" />

												<button 

													class="pay fa btn btn-danger add_to_cart" 

													name="add_to_cart"

													data-orderId="ID00'.$row["id"].'" 

													data-MYRCode="'.$row["price"] .'" 

													data-serviceTitle="'.$row["title"].'"

													id="'.$row["id"].'"

												>

													Add To Cart &nbsp;&nbsp;&nbsp;	&#xf218 '.$row["price"] .' MYR

												</button>

												

												<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["title"].'" />

												<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"] .'" />

											</a>

										</div>

										<!--financial course model end-->

									</div>

									'.$rightImg.'

									<div class="clearfix"> </div>

									<div class="ch-bott1 agile">

										<span class="botted"> </span>

									</div>

								</div>

							</div>

						';

					}



					echo $output;

				}

			?>





			<!--financial negociation model start -->

			<div class="contact-top" id="paymnt" style="display: none;">

				<h3>Payment Method</h3>



				<div class="contact-bottom">

					<br>















					

					<select name="paymenMethod" style="width:40%" class="btn btn-secondary btn-lg " id="paymenMethod" onchange="checkPayMethod(this)">

						<option value="" selected></option>

						<option value="molpay">1Pay</option>

						<option value="spay">sPay</option>
						

					</select>

					<br>

					<script>



						function checkPayMethod(e) {

								// 			console.log(e.value);

											var molpay = document.getElementById('molpay');

											var paymenForm = document.getElementById('paymentForm');

											var hpay = document.getElementById('hpay');

											var spay = document.getElementById('spay');

												 

											if (e.value == 'molpay') {

												molpay.style.display = 'block';

												hpay.style.display = 'none';

												spay.style.display = 'none';

											} 

								// 			else if( e.value == 'other' ) {

								// 				molpay.style.display = 'none';

								// 				hpay.style.display = 'none';

								// 				paymenForm.style.display = 'block';

								// 				spay.style.display = 'none';

								// 			}

											else if( e.value == 'hpay' ) {

												molpay.style.display = 'none';

												hpay.style.display = 'block';

												spay.style.display = 'none';

											}

											else if( e.value == 'spay' ) {

												molpay.style.display = 'none';

												hpay.style.display = 'none';

												spay.style.display = 'block';

											}



										}

						

						

						$(document).on('click', 'input[name="jpaySubmit"]', function(e){

							var form = document.getElementById('paymentForm');

							var amount = form.amount;

							var orderId = form.orderid;

							var sec = $('#secret').val();

							if(amount.value <= 1 ){

								swal("Uh !", "Your Ammount must be More than 1 MYR !", "error");

								amount.focus();

								return false;

							} 

							// consle.log(sec);

						

							var isValid = 0;

							$.ajax({

								type: "post",

								url: "check_secret_key.php",

								data: {

									secret:sec

								},

								async: false,

								success: function (success) {

									success = JSON.parse(success);

									if (success.status === 0 ) {

										swal("Uh !", "You Entered Incorrect Subscription Code !", "error");

										if (sec == "") {

											var	lt = $('#secret2');

											lt.addClass("errField");

										}

										return false;

									}

									else{

										isValid = 1;

										console.log('valid');

										return true;

									}													

								},

								error: function () {

									canSubmit = 0;

									swal("Uh !", "Something went wrong with subscription code !", "error");

								}

							});

							

							return (isValid === 1 ) ? true : false;

						});

						$(document).on('click', 'input[name="spaySubmit"]', function(e){

							var form = document.getElementById('sPayForm');

							var amount = form.amount;

							var orderId = form.orderid;

							var sec = $('#secret4').val();

							if(amount.value <= 1 ){

								swal("Uh !", "Your Ammount must be More than 1 MYR !", "error");

								amount.focus();

								return false;

							} 

							// consle.log(sec);

							var isValid = 0;

							$.ajax({

								type: "post",

								url: "check_secret_key.php",

								data: {

									secret:sec

								},

								async: false,

								success: function (success) {

									success = JSON.parse(success);

									if (success.status === 0 ) {

										swal("Uh !", "You Entered Incorrect Subscription Code !", "error");

										if (sec == "") {

											var	lt = $('#secret2');

											lt.addClass("errField");

										}

										return false;

									}

									else{

										isValid = 1;

										console.log('valid');

										return true;

									}													

								},

								error: function () {

									canSubmit = 0;

									swal("Uh !", "Something went wrong with subscription code !", "error");

								}

							});

							

							return (isValid === 1 ) ? true : false;

						});



						$(document).on('click', 'input[name="molpaySubmit"]', function(e){

							var form = document.getElementById('molpay');

							var amount = form.amount;

							var orderId = form.orderid;

							var sec = $('#secret1').val();

							if(amount.value <= 1 ){

								swal("Uh !", "Your Ammount must be More than 1 MYR !", "error");

								amount.focus();

								return false;

							} 

							// consle.log(sec);

						

							var isValid = 0;

							$.ajax({

								type: "post",

								url: "check_secret_key.php",

								data: {

									secret:sec

								},

								async: false,

								success: function (success) {

									success = JSON.parse(success);

									if (success.status === 0 ) {

										swal("Uh !", "You Entered Incorrect Subscription Code !", "error");

										if (sec == "") {

											var	lt = $('#secret2');

											lt.addClass("errField");

										}

										return false;

									}

									else{

										isValid = 1;

										console.log('valid');

										return true;

									}													

								},

								error: function () {

									canSubmit = 0;

									swal("Uh !", "Something went wrong with subscription code !", "error");

								}

							});

							

							return (isValid === 1 ) ? true : false;

						});



						$(document).on('click', 'input[name="hpayconfirm"]', function(e){

							var form = document.getElementById('hpay');

							var amount = form.amount;

							var orderId = form.orderid;

							var sec = $('#secret2').val();

							if(amount.value <= 1 ){

								swal("Uh !", "Your Ammount must be More than 1 MYR !", "error");

								amount.focus();

								return false;

							} 

							// console.log(sec);



							var isValid = 0;

							$.ajax({

								type: "post",

								url: "check_secret_key.php",

								data: {

									secret:sec

								},

								async: false,

								success: function (success) {

									success = JSON.parse(success);

									if (success.status === 0 ) {

										swal("Uh !", "You Entered Incorrect Subscription Code !", "error");

										if (sec == "") {

											var	lt = $('#secret2');

											lt.addClass("errField");

										}

										return false;

									}

									else{

										isValid = 1;

										console.log('valid');

										return true;

									}													

								},

								error: function () {

									canSubmit = 0;

									swal("Uh !", "Something went wrong with subscription code !", "error");

								}

							});

							

							return (isValid === 1 ) ? true : false;



						});



						$(document).on('click', '.clickTarmsandcon', function(){

							setTimeout(function(){

								$('#term .fea-agileits').css({

									'visibility' : 'inherit'

								});

							},1000);

						});



					</script>

					<div id="spay" class="contact-left agileinfo" style="width: 100%">

									<?php

/**

 * This is a sample code for manual integration with senangPay

 * It is so simple that you can do it in a single file

 * Make sure that in senangPay Dashboard you have key in the return URL referring to this file for example http://myserver.com/senangpay_sample.php

 */



# please fill in the required info as below

$merchant_id = '962153983726235';

$secretkey = '11053-228';





# this part is to process data from the form that user key in, make sure that all of the info is passed so that we can process the payment

if(isset($_POST['detail']) && isset($_POST['amount']) && isset($_POST['order_id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']))

{

    # assuming all of the data passed is correct and no validation required. Preferably you will need to validate the data passed

    $hashed_string = md5($secretkey.urldecode($_POST['detail']).urldecode($_POST['amount']).urldecode($_POST['order_id']));

    

    # now we send the data to senangPay by using post method

    ?>

    <html>

    <head>

    <title>senangPay Sample Code</title>

    </head>

    <body onload="document.order.submit()">

        <form name="order" method="get" action="https://app.senangpay.my/payment/<?php echo $merchant_id; ?>">

            <input type="hidden" name="detail" value="<?php echo $_POST['detail']; ?>">

            <input type="hidden" name="amount" value="<?php echo $_POST['amount']; ?>">

            <input type="hidden" name="order_id" value="<?php echo $_POST['order_id']; ?>">

            <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">

            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">

            <input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>">

            <input type="hidden" name="hash" value="<?php echo $hashed_string; ?>">

        </form>

    </body>

    </html>

    <?php

}

# this part is to process the response received from senangPay, make sure we receive all required info

else if(isset($_GET['status_id']) && isset($_GET['order_id']) && isset($_GET['msg']) && isset($_GET['transaction_id']) && isset($_GET['hash']))

{

    # verify that the data was not tempered, verify the hash

    $hashed_string = md5($secretkey.urldecode($_GET['status_id']).urldecode($_GET['order_id']).urldecode($_GET['transaction_id']).urldecode($_GET['msg']));

    

    # if hash is the same then we know the data is valid

    if($hashed_string == urldecode($_GET['hash']))

    {

        # this is a simple result page showing either the payment was successful or failed. In real life you will need to process the order made by the customer

        if(urldecode($_GET['status_id']) == '1')

            echo 'Payment was successful with message: '.urldecode($_GET['msg']);

        else

            echo 'Payment failed with message: '.urldecode($_GET['msg']);

    }

    else

        echo 'Hashed value is not correct';

}

# this part is to show the form where customer can key in their information

else

{

    # by right the detail, amount and order ID must be populated by the system, in this example you can key in the value yourself

?>

    <html>

    <head>

    <title>senangPay Sample Code</title>

    </head>

    <body>

	<div>

        <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="sPayForm" class="spay">

		<h4>Payment Details</h4>

            <table>

                <tr>

                    <td colspan="2">Please fill up the detail below in order to test the payment. Order ID is defaulted to timestamp.</td>

                </tr>

                <tr>

                    <td>Detail</td>

                    <td>: <input type="text" name="detail" value="" placeholder="Description" size="30" required></td>

                </tr>

                <tr>

                    <td>Amount</td>

                    <td>: <input type="text" name="amount" id="amount4" placeholder="Amount to pay, for example 12.20" size="30" required></td>

                </tr>

                <tr>

                    <td>Order ID</td>

                    <td>: <input type="text" name="order_id" value="<?php echo time(); ?>" placeholder="Unique id to reference the transaction or order" size="30" required></td>

                </tr>

                <tr>

                    <td>Customer Name</td>

                    <td>: <input type="text" name="name" value="" placeholder="Full Name" size="30" required></td>

                </tr>

                <tr>

                    <td>Customer Email</td>

                    <td>: <input type="text" name="email" value="" placeholder="Email Address" size="30" required></td>

                </tr>

                <tr>

                    <td>Customer Contact No</td>

                    <td>: <input type="text" name="phone" value="" placeholder="Contact Number" size="30" required></td>

                </tr>

                <tr>

                    <td>Subscribtion Code</td>

                    <td>: 							<input type="password" name="secret" id="secret4" placeholder="Subscription code"  required="">

</td>

                </tr>

            </table>

                    <input type="submit" value="Confirm" name="spaySubmit">

        </form>

		</div>

    </body>

    </html>

<?php

}

?>

									</div>

					<!--other form-->

					<!--<form style="display:none" action="./paymentAPI/initiate.php" method="post" id="paymentForm">-->

					<!--	<div class="contact-left agileinfo">-->

					<!--		<h4>Payment Details</h4>-->



					<!--		<input type="text" name="fulName" placeholder="Full Name" required id="fulName">-->

					<!--		<input type="date" name="_date" id="birthDate">-->

					<!--		<input type="text" name="amount" id="amount" placeholder="Payment">-->

					<!--		<input type="text" name="serviceTitle" id="serviceTitle" placeholder="Service name">-->

					<!--		<input type="email" name="email" placeholder="Email" required id="emailField">-->

					<!--		<input type="text" name="phone" placeholder="Phone Number" required id="phone">-->

					<!--		<input type="hidden" name="currencyCode" value="MYR" required id="curreny">-->

							<!--<select id="curreny" name="currencyCode" data-selectedMYR="" data-selectedUSD="">

									<option value="USD">USD</option>-->

					<!--			<option value="MYR">MYR</option>-->

					<!--		</select>-->

					<!--	</div>-->

					<!--	<div class="contact-right contact-left agileinfo">-->

					<!--		<h4>Address Details</h4>-->

					<!--		<input type="text" name="Address" placeholder="Address" id="Address">-->

					<!--		<input type="text" name="postalCOde" id="PostalCode" placeholder="Postal Code">-->

					<!--		<input type="text" name="city" id="city" placeholder="City">-->

					<!--		<input type="text" name="state" id="state" placeholder="State">-->

					<!--		<input type="text" name="country" id="country" placeholder="Country">-->

					<!--		<input type="text" name="secret" id="secret" placeholder="Subscription code">-->





					<!--		<div class="row col-md-12">-->

					<!--			<p id="para_isAggree" class="pull-left">-->

					<!--				<input type="checkbox" id='checkBox_isAggree' required=""> I Agree To The -->

					<!--			</p>-->

					<!--			<p class="pull-right">-->

					<!--				<a href="#term" class="clickTarmsandcon" rel="modal:open" style="color: red">Terms & Conditions</a>-->

					<!--			</p>-->

					<!--		</div>-->

					<!--		<div class="row col-md-12">-->

					<!--			<input type="submit" class="pull-left" name="jpaySubmit" value="Confirm" id="confirm">-->

					<!--			<a href="#" rel="modal:close" class="pull-right" style="color: red">Close</a>-->

					<!--		</div>-->



					<!--	</div>-->

					<!--	<div class="clearfix"> </div>-->

					<!--</form>-->

					<!--Molpay form-->

					<form style="display:none" action="./paymentAPI/molpay.php" method="post" id="molpay">

						<div class="contact-left agileinfo">

							<h4>Payment Details</h4>

							<input type="text" name="​bill_name" placeholder="Full Name" required="" id="​bill_name"><br>

							<input type="date" name="_date" id="birthDate1">

							<input type="text" name="amount" id="amount1"  placeholder="Payment" required=""><br>

							<input type="text" name="orderid" id="orderid" placeholder="Order ID" readonly  required=""><br>

							<input type="email" name="​bill_email" placeholder="Email" required="" id="​bill_email"><br>

							<input type="text" name="​bill_desc" placeholder="Description" required="" id="​bill_desc"><br>

							<input type="text" name="bill_mobile" placeholder="Phone Number" required="" id="bill_mobile"><br>

							<input type="hidden" name="country" placeholder="Country" required="" value="MY" id="country" ><br>

							<input type="hidden" name="serviceTitle2" value="MY" id="serviceTitle2" >

						</div>



						<div class="contact-right contact-left agileinfo">

							<h4>Address Details</h4>

							<input type="text" name="addr" placeholder="Address" id="Address1"  required="">

							<input type="text" name="zipcode" id="PostalCode1" placeholder="Postal Code"  required="">

							<input type="text" name="city" id="city1" placeholder="City"   required="">

							<input type="text" name="state" id="state1" placeholder="State"  required="">

							<input type="text" name="s_country" id="s_country" placeholder="Country"  required="">

							<input type="password" name="secret" id="secret1" placeholder="Subscription code"  required="">





							<div class="row col-md-12">

								<p id="para_isAggree" class="pull-left">

									<input type="checkbox" id='checkBox_isAggree' required=""> I Agree To The 

								</p>

								<p class="pull-right">

									<a href="#term" class="clickTarmsandcon" rel="modal:open" style="color: red">Terms & Conditions</a>

								</p>

							</div>



							<div class="row col-md-12">

								<input type="submit" value="Confirm" class="pull-left" name="molpaySubmit" id="confirm1">

								<a href="#" rel="modal:close" class="pull-right" style="color: red">Close</a>

							</div>



						</div>

						<div class="clearfix"> </div>

					</form>



					<!--Hpay form-->

					<form style="display:none" action="./paymentAPI/Hpay.php" method="post" id="hpay">

						<div class="contact-left agileinfo">

							<h4>Payment Details</h4>

							<input type="text" name="​bill_name" placeholder="Full Name" required="" id="​bill_name"><br>

							<input type="date" name="_date" id="birthDate1">

							<input type="text" name="amount" id="amount3"  placeholder="Payment" required=""><br>

							<input type="hidden" name="orderid" id="orderid3" placeholder="Order ID" value="">

							<input type="email" name="​bill_email" placeholder="Email" required="" id="​bill_email"><br>

							<input type="text" name="​bill_desc" placeholder="Description" required="" id="​bill_desc"><br>

							<input type="text" name="bill_mobile" placeholder="Phone Number" required="" id="bill_mobile"><br>

							<input type="hidden" name="country" placeholder="Country" required="" value="MY" id="country" ><br>

							<input type="hidden" name="serviceTitle3" value="MY" id="serviceTitle3" >

						

						</div>



						<div class="contact-right contact-left agileinfo">

							<h4>Address Details</h4>

							<input type="text" name="addr" placeholder="Address" id="Address1"  required="">

							<input type="text" name="zipcode" id="PostalCode1" placeholder="Postal Code"  required="">

							<input type="text" name="city" id="city1" placeholder="City"   required="">

							<input type="text" name="state" id="state1" placeholder="State"  required="">

							<input type="text" name="s_country" id="s_country" placeholder="Country"  required="">

							<input type="text" name="secret" id="secret2" placeholder="Subscription code"  required="">

							

							<div class="row col-md-12">

								<p id="para_isAggree" class="pull-left">

									<input type="checkbox" id='checkBox_isAggree' required=""> I Agree To The 

								</p>

								<p class="pull-right">

									<a href="#term" class="clickTarmsandcon" rel="modal:open" style="color: red">Terms & Conditions</a>

								</p>

							</div>

							<div class="row col-md-12">

								<input type="submit" value="Confirm" name="hpayconfirm" id="confirm1" style="float: left">

								<a href="#" rel="modal:close" style="color: red;float: right;">Close</a>

							</div>

						</div>

						<div class="clearfix"> </div>

					</form>

				</div>

			</div>

			<!--financial negociation model end-->

			

			



		</div>

	</div>

	<!--services end here-->

	<!--gallery start here-->

	<div class="gallery" id="gallery">

		<div class="container">

			<div class="gallery-main w3-agileits">

				<div class="gallery-top-w3ls">

					<h3>Gallery</h3>

				</div>

				<div class="gallery-bottom agileits-w3layouts">

					<!---->

					<ul id="flexiselDemo3">

						<li>

							<img src="images/b6d1b3ce4f7e5651b2ff-sliceThumbnail.png" class="img-responsive" />

						</li>

						<li>

							<img src="images/businessman-showing-calculator1.png" class="img-responsive" />

						</li>

						<li>

							<img src="images/services6.png" class="img-responsive" />

						</li>

						<li>

							<img src="images/SERVICE1.png" class="img-responsive" />

						</li>

						<li>

							<img src="images/Pinn-Deavin-Services-Insurance-icon.png" class="img-responsive" />

						</li>

						<li>

							<img src="images/program5.png" class="img-responsive">

						</li>

						<li>

							<img src="images/slide2.png" class="img-responsive" />

						</li>

					</ul>

				</div>



				<script type="text/javascript">

										$(window).load(function () {



											$("#flexiselDemo3").flexisel({

												visibleItems: 2,

												animationSpeed: 1000,

												autoPlay: true,

												autoPlaySpeed: 3000,

												pauseOnHover: true,

												enableResponsiveBreakpoints: true,

												responsiveBreakpoints: {

													portrait: {

														changePoint: 480,

														visibleItems: 1

													},

													landscape: {

														changePoint: 640,

														visibleItems: 2

													},

													tablet: {

														changePoint: 768,

														visibleItems: 2

													}

												}

											});



										});

				</script>

				<script type="text/javascript" src="js/jquery.flexisel.js"></script>

			</div>

		</div>

	</div>

	<!--gallery end here-->



	<!--features start here-->

	<div class="features" id="refund">

		<div class="container">

			<div class="features-main">

				<div class="features-top w3-agile">

					<h2>Refund / Return Policy</h2>

				</div>

				<div class="features-bottom">

					<div class="col-md-12 features-left wthree">

						<div class="fea-agileits wow bounceInLeft" data-wow-delay="0.1s">

							<div class="fea-left-top">



								<p>In case you are not 100% content with any S&S Khan Resources's Services, please connect with us under 10 days of

									your purchase to get a Refund / Return. Your Refund / Return will be subjected to dealing with cost and the getting

									ready charges will be deducted from the whole total before Refund / Return.</p>

								<p> Refunds / Returns requested more than 10 days after your purchase date won't be issued unless the trade was

									the outcome of a phony purchase.If you are issued a Refund / Return, it should appear on your Mastercard or check

									card declaration inside 72 hours upon us illuminating you. In the wake of tolerating your Refund / Return, you agree

									to uninstall and also quit using any S&S Khan Resources. programming product(s) for which you never again have a

									considerable allow for S&S Khan Resources keeps up whatever expert is expected to injure any S&S Khan Resources

									Account, thing keys, vouchers or possibly serial numbers issued for the Refunded / Returned things.</p>

							</div>

						</div>

					</div>

					<div class="col-md-12 features-right wthree">

						<div class="fea-agileits-rit wow bounceInRight" data-wow-delay="0.1s">

							<div class="fea-rit-top">

								<h3>Deliver Policy</h3>

								<p>At <i>S&S Khan Resources</i> not only we are dedicated to delivering the best possible stipulated financial consulting

									services as we do but understand as agents that we are given the reponsibility to translate our gifts into your

									good wishes.</p>

								<p>We are not sending or providing andy physical shipments. At<i> S&S Khan Resources</i>, We provide only financial

									consulting services trough mostly phone cals and also a link to download our financial calculator.<i> S&S Khan Resources</i>									aim to deliver our services within a time agreed upon at purchase.</p>

								<h3>Our Delivery Goals</h3>

								<p><strong>Below are our delivery goals to deliver your services successfully</strong></p>

								<p><i>S&S Khan Resources</i> may change this policy from time to time by updating this page. You should check this page

									from time to time to ensure that you are happy with any changes.</p>

								<p> <span class="fa fa-heart"> <strong>Reliably -</strong></span>To be reliable at all times to the right recipient.</p>

								<p> <strong class="fa fa-heart"> <strong>Promptly -</strong></strong>To deliver within our expected time frame.</p>

								<p> <strong class="fa fa-heart"> <strong>Negotiation -</strong></strong>We provide our services to our customers trough

									phone calls, this is because we will be negotiating their financing with their Bank/Financial Institute.</p>

								<p>We strive to meet our goals with your every sevice purchased and given that you have a complete profile, we would

									be able to achieve higher success rate.

								</p>

								<h3>Deliver Disclaimer</h3>

								<p>All services paid online recieve and acknowledgment that we do not commit and guarantee to any fixed delivery time

									of our services. Our delivery time is 2-3 days or may be the same day.This depends on the customer request.An email

									will be sent if we encounter any problem in delivering our services.</p>

								<h3>Processing Fees</h3>



								<p><i>S&S Khan Resources</i> does not initiate any debits or credits into your bank account with regards to daily deposits,

									monthly fees or chargebacks. All bank debits and credits that are a direct result of your merchant account will

									be administrated by (The Company). </p>

								<h3>Payments To S&S Khan Resources</h3>

								<p>We only charge your debit/credit card or debit your bank account if you generate a payment from our secure payment

									page or if we provided a one-time product or service that has an applicable charge. All debit/credit card payment

									and ACHs will have (S&S Khan Resources) as the decriptor.</p>



								<h3>Delivery Methods</h3>

								<p>Payments for services provided directly by <i>S&S Khan Resources</i> will be initiated on the day that the service

									has been rendered. We are not sending or providing and physical shipments. Our services are mostly trough phone

									calls altough Some links and online services will be provided trough email. Please make sure that your register

									with a valueable and accessable phone number and email.</p>



								<p>In the rate circumstance that your services encounter problems follow the directions in our FAQ or contact our Customer

									Service.

								</p>



							</div>

						</div>

					</div>

					<div class="clearfix"> </div>

				</div>

				<div class="clearfix"> </div>

			</div>

		</div>

	</div>

	<!--features end here-->

	<!--quotation start here-->

	<div class="quotation wow bounceInLeft" data-wow-delay="0.1s">

		<div class="container" id="privacy">

			<div class="quotation-main agileinfo">

				<h4>Our Privacy Policy</h4>

				<p class="para">This protection arrangement has been ordered to better serve the individuals who are worried about how their 'By and

					by identifiable data' (PII) is being utilized on the web. PII, as utilized as a part of US protection law and data security,

					is data that can be utilized alone or with other data to distinguish, contact, or find a solitary individual, or to

					recognize a person in setting. If you don't mind read our security approach painstakingly to get a reasonable comprehension

					of how we gather, utilize, ensure or generally handle your Personally Identifiable Information as per our website.</p>

			</div>

			<h4 class="privacy">What individual data do we gather from the general population that visit our blog, site or application?</h4>



			<p class="para">When requesting or enlisting on our site, as proper, you might be made a request to enter your name, email address, postage

				information, telephone number, credit card data, social security number or different points of interest to help you with

				your experience.</p>



			<h4 class="privacy">When do we collect information?</h4>

			<p class="para">We gather data from you when you submit a request, round out a shape, Use Live Chat or enter data on our site. Give us

				input on our items or administrations.

			</p>

			<h4 class="privacy">How do we use your information?</h4>

			<p class="para">We may utilize the data we gather from you when you enroll, influence a buy, to agree to accept our bulletin, react to

				a study or advertising correspondence, surf the site, or utilize certain other site includes in the accompanying ways:

				<br>• To personalize client's experience and to enable us to convey the sort of substance and item offerings in which

				you are generally intrigued.

				<br>•To enhance our site with a specific end goal to better serve you.

				<br>• To enable us to better administration you in reacting to your client benefit demands.

				<br>• To quickly process your transactions.

				<br>• To ask for ratings and reviews of services or products. </p>



			<h4 class="privacy">How do we protect visitor information?</h4>

			<p class="para">Our site is examined all the time for security openings and known vulnerabilities with a specific end goal to make your

				visit to our site as protected as could be expected under the circumstances. We utilize consistent Malware Scanning.

			</p>

			<p class="para">Your own data is contained behind secured arranges and is just available by a set number of people who have uncommon access

				rights to such frameworks, and are required to keep the data private. What's more, all touchy data you supply is encoded

				through Secure Socket Layer (SSL) innovation.</p>

			<p class="para">We implement a variety of security measures when a user places an order to maintain the safety of your personal information.

			</p>

			<p class="para">All transactions are processed through a gateway provider and are not stored or processed on our servers.

			</p>



			<h4 class="privacy">Do we use 'cookies'?</h4>

			<p class="para">We do not use cookies for tracking purposes</p>

			<p class="para">You can have your PC caution you each time a treat is being sent, or you can kill all treats. You do this through your

				program (like Internet Explorer) settings. Every program is somewhat unique, so take a gander at your program's Help

				menu to take in the right approach to change your treats.</p>

			<p class="para"> .In the event that you handicap treats off, a few highlights will be handicapped that influence your site to encounter

				more productive and some of our administrations won't work legitimately. Nonetheless, you can in any case put orders

			</p>

			<br>

			<h4 class="privacy">Third-party disclosure</h4>

			<p class="para">We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information.

			</p>

			<h4 class="privacy">California Online Privacy Protection Act</h4>

			<p class="para">.CalOPPA is the main state law in the country to require business sites and online administrations to post a security

				arrangement. The law's compass extends well past California to require a man or organization in the United States (and

				possibly the world) that works sites gathering by and by identifiable data from California purchasers to post a prominent

				security strategy on its site expressing precisely the data being gathered and those people with whom it is being shared,

				and to consent to this policy - See more at: http://consumercal.org/california-online-privacy-protection-act-caloppa/#sthash.0FdRbT51.dpuf

			</p>

			<br>

			<h4 class="privacy">According to CalOPPA we agree to the following:</h4>

			<p class="para">Clients can visit our site secretly. When this security strategy is made, we will include a connection to it our landing

				page or as a base on the principal huge page in the wake of entering our site. Our Privacy Policy interface incorporates

				the word 'Privacy' and can be effectively be found on the page indicated previously.

			</p>

			<p class="para">Users will be notified of any privacy policy changes:

				<br>• Via Email

				<br>Users are able to change their personal information:

				<br>• By emailing us

				<br>• By calling us</p>

			<h4 class="privacy">How does our site handle do not track signals?</h4>

			<p class="para">We honor do not track signals and do not track, plant cookies, or use advertising when a Do Not Track (DNT) browser mechanism

				is in place.</p>

			<h4 class="privacy">COPPA (Children Online Privacy Protection Act)</h4>

			<p class="para">With regards to the gathering of individual data from youngsters under 13, the Children's Online Privacy Protection Act

				(COPPA) places guardians in charge. The Federal Trade Commission, the country's shopper assurance organization, upholds

				the COPPA Rule, which explains what administrators of sites and online administrations must do to ensure youngsters'

				security and wellbeing on the web.</p>

			<p class="para">We do not specifically market to children under 13.

			</p>

			<br>

			<h4 class="privacy">Fair Information Practices</h4>

			<p class="para">.The Fair Information Practices Principles shape the foundation of security law in the United States and the ideas they

				incorporate have assumed a noteworthy part in the improvement of information assurance laws around the world. Understanding

				the Fair Information Practice Principles and how they ought to be actualized is basic to follow the different security

				laws that ensure individual data

			</p>

			<br>

			<h5 class="privacy">So as to be in accordance with Fair Information Practices we will make the accompanying responsive move, should an information

				rupture happen:</h5>

			<br>

			<p class="para">We will notify the users via email Or via Phone

				<br> • Within 1 business day</p>



			<h4 class="privacy">CAN SPAM Act</h4>

			<p class="para">The CAN-SPAM Act is a law that sets the principles for business email, sets up prerequisites for business messages, gives

				beneficiaries the privilege to have messages halted from being sent to them, and spells out extreme punishments for infringement.

			</p>

			<h5 class="privacy">We gather your email address in order to:</h5>

			<p class="para">• Send information, respond to inquiries, and/or other requests or questions.</p>



			<h5 class="privacy">To be in accordance with CANSPAM we agree to the following:</h5>

			<p class="para"> •NOT utilize false or deluding subjects or email addresses .

				<br>• Recognize the message as an advertisement in some sensible way.

				<br>• Incorporate the physical address of our business or site base camp.

				<br> • Monitor third-party email marketing services for compliance, if one is used.

				<br>• Honor opt-out/unsubscribe requests quickly.</p>



			<p class="para">On the off chance that whenever you might want to withdraw from accepting future Emails, you can email us and we will

				immediately expel you from ALL correspondence.</p>

		</div>

	</div>

	<!--auotation end here-->

	<!--contact start here-->

	<div class="contact wthree" id="contact">

		<div class="container">

			<div class="contact-main">

				<div class="contact-top">

					<h2 style="color: #fff">S&S KHAN RESOURCES</h2>

					<p style="color: white;"><i class="fa fa-address-book"></i> SA0203914-H</p>

					<h3>Contact Us</h3>

				</div>

				<div class="contact-bottom">

					<div class="contact-left agileinfo wow bounceInLeft" data-wow-delay="0.1s">

						<h4>Contact Info</h4>

						<form action="" method="POST">

							<input type="text" name="u_name" placeholder="Name" required id="u_name">

							<input type="text" name="emailAddress" placeholder="Email" required id="emailAddress">

							<input type="text" name="product" placeholder="Product" required id="product">

							<input type="text" name="Phone" placeholder="Phone" required id="Phone">

							<textarea name="message" placeholder="Message" required id="message"></textarea>

							<input type="hidden" id="userIP" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">



							<input type="button" value="Send" id="submit_mail" style="background: black; outline: none ; border: none; width: 100px; color: white;">

						</form>

					</div>

					<div class="contact-right agileinfo wow bounceInRight" data-wow-delay="0.1s">

						<div class="contact-rit-info wthree">

							<h4>Our Address </h4>

							<p>Lot F19, MyDin Meru Raya, Jalan Meru Bestari B2 Bandar Meru Raya, </p>

							<p><i class="fa fa-bank"></i> City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ipoh </p>

							<br>

							<p><i class="fa fa-building"></i> State &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perak</p>

							<br>

						

							<p><i class="fa fa-location-arrow"></i> PostalCode &nbsp;&nbsp; 30020 </p>

							<br>

							<p><i class="fa fa-envelope"></i> Contact By Email Addresses</p>

							<p> support@snskhanresources.com</p>

							<p> billing@snskhanresources.com</p>

						</div>

					</div>

					<div class="clearfix"> </div>

				</div>

			</div>

		</div>

	</div>



	<script>

					$(function () {

						$("#submit_mail").on("click", function () {



							function resetFields() {

								$("#u_name, #product, #Phone, #message, #emailAddress, #userIP").val("");

							}



							var validationsPassed = true;

							var self = $(this);



							var data = {

								u_name: $("#u_name").val().trim(),

								emailAddress: $("#emailAddress").val().trim(),

								Phone: $("#Phone").val().trim(),

								product: $("#product").val().trim(),

								message: $("#message").val().trim(),

								userIP: $("#userIP").val().trim(),

							};



							for (var keys in data) {

								if (!data[keys]) {

									var $el = $("#" + keys);

									$el.addClass("errFields");

									validationsPassed = false;

								}

							}

							if (!validationsPassed) {

								return;

							}

							if (!validateEmail(data.emailAddress)) {

								var $el = $("#emailAddress");

								$el.addClass("errFields");

								validationsPassed = false;

								return;

							}



							$.ajax({

								method: "post",

								url: "sendEmail.php",

								data: data,

								success: function () {

									console.log("Message sent");

									resetFields();

									swal("Thank You", "We will get back to you soon!", "success");

								},

								error: function () {

									console.log("Error in sending message");

								}

							});



							$(document).on("focus", '.errFields', function () {

								var self = $(this);

								self.removeClass("errFields");

							})



							function validateEmail(email) {

								var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

								return re.test(email);

							}

						});

					});

	</script>



	<!--contact end here-->

	<!--copy rights start here-->

	<div class="copy-right">

		<div class="container">

			<div class="copy-rights-main wow zoomIn" data-wow-delay="0.1s">

				<p>® 2018 Copyright All Right Reserved</p>

			</div>

		</div>





		<script type="text/javascript">

			$(document).ready(function () {

				/*

				var defaults = {

					containerID: 'toTop', // fading element id

					containerHoverID: 'toTopHover', // fading element hover id

					scrollSpeed: 1200,

					easingType: 'linear' 

				};

				*/



				$().UItoTop({ easingType: 'easeOutQuart' });



			});

		</script>

		<a href="#" id="toTop" style="display: block;">

			<span id="toTopHover" style="opacity: 1;"> </span>

		</a>

	</div>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery-modal.js"></script>



	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script type="text/javascript" src="js/move-top.js"></script>

	<script type="text/javascript" src="js/easing.js"></script>

	<script type="application/x-javascript">

		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }

	</script>

</body>



</html>