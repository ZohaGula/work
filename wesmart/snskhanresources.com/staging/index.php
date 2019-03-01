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
		p, h3, h4,h1,h2{
			font-family: 'Raleway' !important;
		}
		.errField {
			border-bottom: 3px outset red !important;
		}
		.errFields{
			border-bottom: 3px red outset !important;
		}
	</style>

	<script type="text/javascript">
		function onVisaCheckoutReady() {
			V.init({
				apikey: "IM6ZK0OYTQ6B75R3ZC8S21lv69_XorolCskAiYBjAc9FrCrcQ",
				sourceId: "Merchant Defined Source ID",
				settings: {
						locale: "en_US",
						displayName: "snskhanresources",
						websiteUrl: "sslwireless.com",
						customerSupportUrl: "sslwireless.com",
						review: {
							buttonAction: "Continue"
						},
						dataLevel: "SUMMARY"
				}
				// ,
				// paymentRequest: {
				// 		currencyCode: "USD",
				// 		total: "16.00"	
				// }
			});
			V.on("payment.success", function (payment) {
				console.log(JSON.stringify(payment));
			});
			V.on("payment.cancel", function (payment) { 
				// 
			});
			V.on("payment.error", function (payment, error) {
				// 
			});
		}
	</script>

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
		new WOW().init();
		$(function () {
			$(document).on("click", ".pay", function () {
				var self = $(this);
				var amountInUSD = self.attr("data-code");
				var amountInMYR = self.attr("data-MYRcode");
				var serviceTitle = self.attr("data-serviceTitle");
				$("#curreny").attr("data-selectedMYR", amountInMYR).attr("data-selectedUSD", amountInUSD);
				$("#amount").val(amountInUSD);
				$("#serviceTitle").val(serviceTitle);
			});
			$(document).on("change", "#curreny", function () {
				var self = $(this);
				var selectedVal = self.val();
				if (selectedVal === "MYR") {
					$("#amount").val(self.attr("data-selectedMYR"));
				} else {
					$("#amount").val(self.attr("data-selectedUSD"));
				}
			});

			$("#confirm").on("click", function () {


				var validationsPassed = true;
				var self = $(this);

				var obj = {
					fulName: $("#fulName").val().trim(),
					birthDate: $("#birthDate").val().trim(),
					amount: $("#amount").val().trim(),
					emailField: $("#emailField").val().trim(),
					phone: $("#phone").val().trim(),
					curreny: $("#curreny").val(),
					Address: $("#Address").val().trim(),
					PostalCode: $("#PostalCode").val().trim(),
					city: $("#city").val().trim(),
					state: $("#state").val().trim(),
					country: $("#country").val().trim(),
				};
                        var sec = $('#secret').val();
				if(sec !== "36247548" ){
					swal("Uh !" , "You Entered incorrect Subscription Code !", "error");
					if(sec == ""){
						var $el = $("#secret");
						$el.addClass("errField");
						validationsPassed = false;
					}
					validationsPassed = false;
				}
                        
                        
                        
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

				if(!isAggree){
					var $el = $("#para_isAggree");
					$el.addClass("errField");
					validationsPassed = false;
					return;
				}
				
				var dataObj = $("#paymentForm").serializeArray();
				self.attr("disabled", true);
				$.ajax({
					type : "post",
					url : "save_custOrder.php",
					data : dataObj,
					success : function(success){
						success = JSON.parse(success);
						debugger;
						if(!success.status){
							self.removeAttr("disabled");
							return alert(success.message || "Error received from server");
						}
						$("#paymentForm").submit();
					},
					error : function(){
						self.removeAttr("disabled");
						console.log(" Error in sending data ");
					}
				});
			});


			$(document).on("change", '#checkBox_isAggree', function(){
				var $el = $("#para_isAggree");
				self.removeClass("errField");
			})

			$(document).on("focus", '.errField', function(){
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
	<div class="about" id="about">
		<div class="container">
			<div class="about" id="about">
		<div class="container">
			<div class="about-main">
				<div class="changer-main">
					<span class="devide-line w3-agile"> </span>
					<div class="about-block">
						<div class="changer-left wow bounceInLeft" data-wow-delay="0.1s">
							<h3>Financial Courses & Education</h3>
							<h4>We Deliver Results</h4>
							<p>Number of courses taught by industry experts, these courses can help you to tackle the financial difficulties in business
								as well as in your personal daily life.</p>
							<p>Financial Modeling Specialization is designed to help you make informed business and financial decisions. These foundational
								courses will introduce you to spreadsheet models, modeling techniques, and common applications for investment analysis,
								company valuation, forecasting, and more. When you complete the Specialization, you'll be ready to use your own data
								to describe realities, build scenarios, and predict performance.</p>
							<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="350" data-MYRCode="1357" data-serviceTitle="Financial Courses &amp; Education" style="background: #474343">Normal &nbsp;&nbsp;&nbsp;	&#xf218 1357MYR / $350USD</button>
							</a>
							<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="550" data-MYRCode="2132" data-serviceTitle="Financial Courses &amp; Education" style="background: #262424">Super &nbsp;&nbsp;&nbsp;	&#xf218 2132MYR / $550USD</button>
							</a>
							<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="650" data-MYRCode="2519" data-serviceTitle="Financial Courses &amp; Education" style="background: #000000"> Supreme &nbsp;&nbsp;&nbsp;	&#xf218 2519MYR / $650USD</button>
							</a>


						</div>
						<!--financial course model end-->
					</div>

					<div class="changer-right wow bounceInRight" data-wow-delay="0.1s">
						<img src="images/SERVICE1.png" style=" box-shadow: 10px 10px 12px grey;">
					</div>
					<div class="clearfix"> </div>
					<div class="ch-bott1 agile">
						<span class="botted"> </span>
					</div>
				</div>

				<div class="about-main">
					<div class="changer-main">
						<span class="devide-line w3-agile"> </span>
						<div class="about-block-snd">
							<div class="changer-left-snd wow bounceInLeft" data-wow-delay="0.1s">
								<img src="images/businessman-showing-calculator1.png" style=" box-shadow: 10px 10px 12px grey;">
							</div> <br>
							<div class="changer-right-snd wow bounceInRight" data-wow-delay="0.1s">
								<h3>Detailed calculations & Calculators</h3>
								<h4>We Create Experience</h4>
								<p>We can calculate anything for you that you want whether it is your personal debt pay off plan, your retirement income
									calculation or the amount that you are losing in the interest rate, but it doesn’t stop on just calculation our
									financial experts also guides you and provide their advises on the basis of that calculation which can help you
									to save and earn thousands of dollars with a little effort. We also provide financial calculators which can be used
									to calculate different parameters.</p>
	<a href="#paymnt" rel="modal:open">
									<button class="pay fa" data-code="750" data-MYRCode="2907" data-serviceTitle="Detailed calculations &amp; Calculators"  style="background: #474343">Normal &nbsp;&nbsp;&nbsp; &#xf218 2907MYR / $750USD</button></a>
<a href="#paymnt" rel="modal:open">
									<button class="pay fa" data-code="2250" data-MYRCode="8719" data-serviceTitle="Detailed calculations &amp; Calculators"  style="background: #262424">Super &nbsp;&nbsp;&nbsp; &#xf218 8719MYR / $2250USD</button></a>
<a href="#paymnt" rel="modal:open">
									<button class="pay fa" data-code="2450" data-MYRCode="9494" data-serviceTitle="Detailed calculations &amp; Calculators"  style="background: #000000">Supreme &nbsp;&nbsp;&nbsp; &#xf218 9494MYR / $2450USD</button></a>
								<!--Detailed cals model start-->
							</div>
							<!--Detailed Calcs model end-->
						</div>
						<div class="clearfix"> </div>
						<div class="ch-bott1 agile">
							<span class="botted"> </span>
						</div>
					</div>
				</div>
			</div>
			<div class="about-main">
				<div class="changer-main">
					<span class="devide-line w3-agile"> </span>
					<div class="about-block agileits-w3layouts">
						<div class="changer-left-trd wow bounceInLeft" data-wow-delay="0.1s">
							<h3>Financial Negotiation</h3>
							<h4>Moving You Up</h4>
							<p>We have professional negotiators which can help you to negotiate at the interpersonal level as well as at organizational
								and societal level.</p>
							<h3>Who is this class for ?</h3>
							<p>This course is designed for anyone wishing to have better results in negotiation, deal-making, and conflict resolution,
								be it in formal or informal situations. Students, managers, lawyers, public officials, etc., have found its content useful.
							</p>
							<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="950 " data-MYRCode="3900" data-serviceTitle="Financial Negotiation"  style="background: #474343">Normal &nbsp;&nbsp;&nbsp;&#xf218 3900MYR / $950USD</button>
							</a>
<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="1450 " data-MYRCode="5620" data-serviceTitle="Financial Negotiation"  style="background: #262424">Super &nbsp;&nbsp;&nbsp;&#xf218 5620MYR / $1450USD</button>
							</a>
<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="1650 " data-MYRCode="7560" data-serviceTitle="Financial Negotiation"  style="background: #000000">Supreme &nbsp;&nbsp;&nbsp; &#xf218 7560MYR / $1650USD</button>
							</a>
							<!--financial negociation model start-->
							<!--financial negociation model end-->
						</div>
						<div class="changer-right-trd wow bounceInRight" data-wow-delay="0.1s">
							<img src="images/b6d1b3ce4f7e5651b2ff-sliceThumbnail.png" style=" box-shadow: 10px 10px 12px grey;">
						</div>
						<div class="clearfix"> </div>
						<div class="ch-bott1 w3-agile">
							<span class="botted"> </span>
						</div>
					</div>
				</div>
			</div>
			<div class="about-main">
				<div class="changer-main">
					<span class="devide-line w3-agile"> </span>
					<div class="about-block-snd">
						<div class="changer-left-snd wow bounceInLeft" data-wow-delay="0.1s">
							<img src="images/Pinn-Deavin-Services-Insurance-icon.png" width="400px" style=" box-shadow: 10px 10px 12px grey;"> <br>
						</div> <br>
						<div class="changer-right-snd wow bounceInRight" data-wow-delay="0.1s">
							<h3>Financial Planning</h3>
							<h4>We Create Experience</h4>
							<p>A financial plan is a comprehensive evaluation of an individual’s or organizations current and future financial state
								by using currently known variables to predict future cash flows, asset values and withdrawal plans. When planning
								personal finances, many things would be considered which include the suitability to his or her needs of a range of
								banking products (checking, savings accounts, credit cards and consumer loans) or investment private equity, (stock
								market, bonds, mutual funds) and insurance (life insurance, health insurance, disability insurance) products or participation
								and monitoring of individual- or employer-sponsored retirement plans, social security benefits, and income tax management.
							Since all this involve complex calculation and planning process therefore we recommend getting it done by an individual
								or organization which has expertise in this field.</p>
							<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="1050" data-MYRCode="4300" data-serviceTitle="Financial Planning" style="background: #474343"> Normal &nbsp;&nbsp;&nbsp;&#xf218 4300MYR / $1050USD</button>
							</a>
							<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="1750" data-MYRCode="6785" data-serviceTitle="Financial Planning" style="background: #262424"> Super &nbsp;&nbsp;&nbsp; &#xf218 6785MYR / $1750USD</button>
							</a>
							<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="1950" data-MYRCode="7560" data-serviceTitle="Financial Planning" style="background: #000000">Supreme &nbsp;&nbsp;&nbsp; &#xf218 7560MYR / $1950USD</button>
							</a>
							<!--consultancy services model start-->
							<!--consultancy services model end-->

						</div>
						<div class="clearfix"> </div>
						<div class="ch-bott1 agile">
							<span class="botted"> </span>
						</div>
					</div>
				</div>
			</div>
			<div class="about-main">
				<div class="changer-main">
					<span class="devide-line w3-agile"> </span>
					<div class="about-block-snd">
						<div class="changer-left-snd wow bounceInLeft" data-wow-delay="0.1s">
							<img src="images/Debt-Free-.gif"  width="450px" style=" box-shadow: 10px 10px 12px grey;">
						</div> <br>
						<div class="changer-right-snd wow bounceInRight" data-wow-delay="0.1s">
							<h3>Debt Consolidation</h3>
							<h4>We Work For Your Ease</h4>
							<p>Most people have more than one debt. You may have high intrigue credit cards, credits and home loans. To pay off one debt you may need to get from another person, making yet another debt. The answer for this issue is an debt consolidation home loan credit. We can enable you to merge your debt and lower your installments by taking out the regularly scheduled installments related with your credit cards and debt. This is likewise the initial phase in enhancing your credit ratings as whenever you use more than 50% of your accessible Credit card balances, you are causing a diminishment in your scores.</p>
						<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="2550" data-MYRCode="9885" data-serviceTitle="Debt Consolidation" style="background: #262424">Normal &nbsp;&nbsp;&nbsp; &#xf218 9885MYR / $2550USD</button>
							</a>
							<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="2750" data-MYRCode="10670" data-serviceTitle="Debt Consolidation" style="background: #474343"> Super &nbsp;&nbsp;&nbsp;&#xf218 10670MYR / $2750USD</button>
							</a>
							<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="2950" data-MYRCode="11435" data-serviceTitle="Debt Consolidation" style="background: #000000">Supreme &nbsp;&nbsp;&nbsp; &#xf218 11435MYR / $2950USD</button>
							</a>
						</div>
						<div class="clearfix"> </div>
						<div class="ch-bott1 agile">
							<span class="botted"> </span>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="about-main">
				<div class="changer-main">
					<span class="devide-line w3-agile"> </span>
					<div class="about-block agileits-w3layouts">
						<div class="changer-left-trd wow bounceInLeft" data-wow-delay="0.1s">
							<h3>Financial Consultancy</h3>
							<h4>Making You Successfull</h4>
							<p>According to us every individual needs a personal financial advisor/consultant which can help those people who have
								significant financial resources and a complex investment portfolio. These services include investment advice, taxation
								planning, retirement planning, income management, interest management, debt management, risk assessment and long-term
								planning. These issues must be actively managed by a professional to obtain maximum benefit with the lowest amount
								of risk possible.</p>
							<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="1250" data-MYRCode="5100" data-serviceTitle="Financial Consultancy" style="background: #474343">Normal &nbsp;&nbsp;&nbsp; &#xf218; 5100MYR / $1250USD</button>
							</a><a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="2150" data-MYRCode="8335" data-serviceTitle="Financial Consultancy" style="background: #262424">Super &nbsp;&nbsp;&nbsp; &#xf218; 8335MYR / $2150USD</button>
							</a><a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="2350" data-MYRCode="9110" data-serviceTitle="Financial Consultancy" style="background: #000000">Supreme &nbsp;&nbsp;&nbsp; &#xf218; 9110MYR / $2350USD</button>
							</a>
							<!--financial negociation model start -->
							<div class="contact-top" id="paymnt" style="display: none;">
								<h3>Payment Method</h3>

								<div class="contact-bottom">
								
									<form action="./paymentAPI/initiate.php" method="post" id="paymentForm">
										<div class="contact-left agileinfo">
											<h4>Payment Details</h4>
											<input type="hidden" name="serviceTitle" id="serviceTitle">
											<input type="text" name="fulName" placeholder="Full Name" required id="fulName">
											<input type="date" name="_date" id="birthDate">
											<input type="text" name="amount" id="amount" placeholder="Payment">
											<input type="email" name="email" placeholder="Email" required id="emailField">
											<input type="text" name="phone" placeholder="Phone Number" required id="phone">
											<select id="curreny" name="currencyCode" data-selectedMYR="" data-selectedUSD="">
												<option value="USD">USD</option>
												<option value="MYR">MYR</option>
											</select>

											<img alt="Visa Checkout" onClick="onVisaCheckoutReady()" class="v-button" role="button" src="https://sandbox.secure.checkout.visa.com/wallet-services-web/xo/button.png" />
										</div>
										<div class="contact-right contact-left agileinfo">
											<h4>Address Details</h4>
											<input type="text" name="Address" placeholder="Address" id="Address">
											<input type="text" name="postalCOde" id="PostalCode" placeholder="Postal Code">
											<input type="text" name="city" id="city" placeholder="City">
											<input type="text" name="state" id="state" placeholder="State">
											<input type="text" name="country" id="country" placeholder="Country">
												<input type="text" name="secret" id="secret" placeholder="Subscription code">


											<p id="para_isAggree">
												<input type="checkbox" id='checkBox_isAggree'> I Agree To The </p>
											<p>
												<a href="#term" rel="modal:open" style="color: red">Terms & Conditions</a>
											</p>
											<input type="button" value="Confirm" id="confirm">

											<a href="#" rel="modal:close" style="color: red">Close</a>

											
										</div>
										<div class="clearfix"> </div>
									</form>
								</div>
							</div>
							<!--financial negociation model end-->
						</div>
						<div class="changer-right-trd wow bounceInRight" data-wow-delay="0.1s">
							<img src="images/program5.png" width="450" style=" box-shadow: 10px 10px 12px grey;">
						</div>
						<div class="clearfix"> </div>
						<div class="ch-bott1 w3-agile">
							<span class="botted"> </span>
						</div>
					</div>
				</div>
			</div>
				<div class="about-main">
				<div class="changer-main">
					<span class="devide-line w3-agile"> </span>
					<div class="about-block-snd">
						<div class="changer-left-snd wow bounceInLeft" data-wow-delay="0.1s">
							<img src="images/blnce.jpg" width="450px" style=" box-shadow: 10px 10px 12px grey;">
						</div> <br>
						<div class="changer-right-snd wow bounceInRight" data-wow-delay="0.1s">
						<h3>Balance Transferring </h3> <br>
							<h4>Searching for an adjust exchange charge card to help pay down your obligation all the more rapidly ?</h4> <br>
							<p>We are continually checking for new offers and have chosen the best arrangements for you. very couple of things in life are free. In  any case, on the off chance that you pay off your obligation utilizing a no expense, 0% APR adjust exchange, you can pulverize your Visa and Master's obligation without paying a dime to the bank. </p> <br> <br> <br>
							
							<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="850" data-MYRCode="3300" data-serviceTitle="Balanace Transferring" style="background: #474343"> Normal &nbsp;&nbsp;&nbsp; &#xf218 3300MYR / $850USD</button>
							</a><a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="1850" data-MYRCode="7170" data-serviceTitle="Balanace Transferring" style="background: #262424">Super &nbsp;&nbsp;&nbsp; &#xf218 7170MYR / $1850USD</button>
							</a><a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="2050" data-MYRCode="11435" data-serviceTitle="Balanace Transferring" style="background: #000000">Supreme &nbsp;&nbsp;&nbsp; &#xf218 11435MYR / $2050USD</button>
							</a>
							</div>
						<div class="clearfix"> </div>
						<div class="ch-bott1 agile">
							<span class="botted"> </span>
						</div>
					</div>
				</div>
			</div>
			<div class="about-main">
				<div class="changer-main">
					<span class="devide-line w3-agile"> </span>
					<div class="about-block agileits-w3layouts">
						<div class="changer-left-trd wow bounceInLeft" data-wow-delay="0.1s">
							<h3>Reduction High Rates To Prime Rates</h3>
							<h4>We Bring You Up</h4>
							<p>The prime rate is the financing cost that business banks charge their most credit-commendable clients. By and large, a bank's best clients comprise of expansive enterprises. The prime financing cost, or prime loaning rate, is generally dictated by the government stores rate, which is the overnight rate that banks use to loan to each other; the prime rate is additionally essential for singular borrowers, as the prime rate specifically influences the loaning rates accessible for a home loan, private company credit or individual advance.</p>
							<a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="1150 " data-MYRCode="4460" data-serviceTitle="Reduction High Rates To Prime Rates" style="background: #474343"> Normal &nbsp;&nbsp;&nbsp; &#xf218 4460MYR / $1150USD</button>
							</a><a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="1350 " data-MYRCode="5235" data-serviceTitle="Reduction High Rates To Prime Rates" style="background: #262424">Super &nbsp;&nbsp;&nbsp; &#xf218 5235MYR / $1350USD</button>
							</a><a href="#paymnt" rel="modal:open">
								<button class="pay fa" data-code="1550 " data-MYRCode="6010" data-serviceTitle="Reduction High Rates To Prime Rates" style="background: #000000">Supreme &nbsp;&nbsp;&nbsp; &#xf218 6010MYR / $1550USD</button>
							</a>
							<!--financial negociation model start-->
							<!--financial negociation model end-->
						</div>
						<div class="changer-right-trd wow bounceInRight" data-wow-delay="0.1s">
							<img src="images/GettyImages-472289729-57a566a35f9b58974adcae6f.jpg" width="450px" style=" box-shadow: 10px 10px 12px grey;">
						</div>
						<div class="clearfix"> </div>
						<div class="ch-bott1 w3-agile">
							<span class="botted"> </span>
						</div>
					</div>
				</div>
			</div>
			
				</div> </div> </div>
	
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
	<div class="services" id="services">
		<div class="container">
			<div class="service-main">
				<div class="w3ser-top w3-agileits">
					<h3>Services</h3>
				</div>
				<div class="service-bottom agileits-w3layouts-bottom">
					<div class="col-md-7 ser-right wow bounceInRight" data-wow-delay="0.1s">
						<h3 class="privacy">Financial Courses & Education</h3>
						<p>
							Number of courses taught by industry experts, these courses can help you to tackle the financial difficulties in business
							as well as in your personal daily life.
						</p>
						<h3 class="privacy">Detailed Calculations And Calculators</h3>
						<p>We can calculate anything for you that you want whether it is your personal debt pay off plan, your retirement income
							calculation or the amount that you are losing in the interest rate.</p>
						<h3 class="privacy"> Financial Negotiation</h3>
						<p>We have professional negotiators which can help you to negotiate at the interpersonal level as well as at organizational
							and societal level.</p>
						<h3 class="privacy">Consultancy Services</h3>
						<p>According to us every individual needs a personal financial advisor/consultant which can help those people who have
							significant financial resources and a complex investment portfolio.</p>
						<h3 class="privacy">Financial Planning</h3>
						<p>A financial plan is a comprehensive evaluation of an individual’s or organizations current and future financial state
							by using currently known variables to predict future cash flows.</p>
							<h3 class="privacy">Debt Consolidation</h3>
						<p>If you own a home, you can get a debt consolidation home equity loan. With a debt consolidation home loan you are able to consolidate each of your high interest credit cards, as well as your consumer loans, into one inexpensive and affordable monthly payment with low interest. We specialize in helping you get control of your finances and your mortgages with simple common sense home mortgage loans and solutions.</p>
						<h3 class="privacy">Balance Transferring</h3>
						<p>An adjust exchange is the point at which you pay off the equalizations on existing charge cards or advances by exchanging them to another Visa account.(Now and again), you might be charged an expense to finish the adjust exchange --commonly a level of the exchange adjust.</p>
						<h3 class="privacy">Reduction High Rates To Prime Rates</h3>
						<p>The prime rate is the financing cost that business banks charge their most credit-exemplary customers.</p>
						<h3 class="privacy">We Are Proud</h3>
						<p>We’re proud to work with successful organizations who rely on our services to maintain and grow their businesses.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
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
					<h2>Refund Policy</h2>
				</div>
				<div class="features-bottom">
					<div class="col-md-12 features-left wthree">
						<div class="fea-agileits wow bounceInLeft" data-wow-delay="0.1s">
							<div class="fea-left-top">
								<h3> Return / Refund Policy</h3>
								<p>In case you are not 100% content with any S&S Khan Resources's Services, please connect with us under 10 days of your purchase
									to get a Refund. Your Refund will be subjected to dealing with cost and the getting ready charges will be deducted
									from the whole total before Refund.</p>
								<p>Refunds requested more than 10 days after your hidden purchase date won't be issued unless the trade was the outcome
									of a phony purchase.If you are issued a Refund, it should appear on your Mastercard or check card declaration inside
									72 hours upon us illuminating you. In the wake of tolerating your Refund, you agree to uninstall and also quit using
									any S&S Khan Resources. programming product(s) for which you never again have a considerable allow for.S&S Khan Resources keeps up
									whatever expert is expected to injure any S&S Khan Resources Account, thing keys, vouchers or possibly serial numbers issued
									for the Refunded things.</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 features-right wthree">
						<div class="fea-agileits-rit wow bounceInRight" data-wow-delay="0.1s">
							<div class="fea-rit-top">
							<h3>Deliver Policy</h3>
								<p>At <i>S&S Khan Resources</i> not only we are dedicated to delivering the best possible stipulated financial consulting services as we do but understand as agents that we are given the reponsibility to translate our gifts into your good wishes.</p>
							<p>We are not sending or providing andy physical shipments. At<i> S&S Khan Resources</i>, We provide only financial consulting services trough mostly phone cals and also a link to download our financial calculator.<i> S&S Khan Resources</i> aim to deliver our services within a time agreed upon at purchase.</p>
								<h3>Our Delivery Goals</h3>
							<p><strong>Below are our delivery goals to deliver your services successfully</strong></p>
						<p><i>S&S Khan Resources</i> may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes.</p>
						<p> <span class="fa fa-heart"> <strong>Reliably -</strong></span>To be reliable at all times to the right recipient.</p>
<p> <strong class="fa fa-heart"> <strong>Promptly -</strong></strong>To deliver within our expected time frame.</p>
	<p> <strong class="fa fa-heart"> <strong>Negotiation -</strong></strong>We provide our services to our customers trough phone calls, this is because we will be negotiating their financing with their Bank/Financial Institute.</p>
<p>We strive to meet our goals with your every sevice purchased and given that you have a complete profile, we would be able to achieve higher success rate.
								</p>
								<h3>Deliver Disclaimer</h3>
<p>All services paid online recieve and acknowledgment that we do not commit and guarantee to any fixed delivery time of our services. Our delivery time is 2-3 days or may be the same day.This depends on the customer request.An email will be sent if we encounter any problem in delivering our services.</p>
<h3>Processing Fees</h3>

<p><i>S&S Khan Resources</i> does not initiate any debits or credits into your bank account with regards to daily deposits, monthly fees or chargebacks. All bank debits and credits that are a direct result of your merchant account will be administrated by (The Company).  </p>
					<h3>Payments To S&S Khan Resources</h3>
 <p>We only charge your debit/credit card or debit your bank account if you generate a payment from our secure payment page or if we provided a one-time product or service that has an applicable charge. All debit/credit card payment and ACHs will have (S&S Khan Resources) as the decriptor.</p>

<h3>Delivery Methods</h3>
<p>Payments for services provided directly by <i>S&S Khan Resources</i> will be initiated on the day that the service has been rendered. We are not sending or providing and physical shipments. Our services are mostly trough phone calls altough Some links and online services will be provided trough email. Please make sure that your register with a valueable and accessable phone number and email.</p>

<p>In the rate circumstance that your services encounter problems follow the directions in our FAQ or contact our Customer Service.</p>
							
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
				<br>• To personalize client's experience and to enable us to convey the sort of substance and item offerings in which you
				are generally intrigued.
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
							<p><i class="fa fa-phone"></i>Call Us &nbsp;&nbsp;&nbsp;&nbsp; +60 16 317 7442 </p>
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
			
                function resetFields(){
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
									method : "post",
									url : "sendEmail.php",
										data : data,
										success : function(){
											console.log("Message sent");
											resetFields();
											swal("Thank You","We will get back to you soon!", "success");
										},
										error : function(){
											console.log("Error in sending message");
										}
								});

			$(document).on("focus", '.errFields', function(){
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

	<script src="js/jquery-modal.js"></script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	
	<script type="text/javascript" src="https://sandbox-assets.secure.checkout.visa.com/checkout-widget/resources/js/integration/v1/sdk.js"></script>

</body>

</html>
</html>