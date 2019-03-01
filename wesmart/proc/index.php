<?php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");
$message = '';
if(isset($_POST["email"]))
{
 sleep(5);
 $query = "
 INSERT INTO tbl_login 
 (first_name, last_name, gender, email, password, address, mobile_no) VALUES 
 (:first_name, :last_name, :gender, :email, :password, :address, :mobile_no)
 ";
 $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
 $user_data = array(
  ':first_name'  => $_POST["first_name"],
  ':last_name'  => $_POST["last_name"],
  ':gender'   => $_POST["gender"],
  ':email'   => $_POST["email"],
  ':password'   => $password_hash,
  ':address'   => $_POST["address"],
  ':mobile_no'  => $_POST["mobile_no"]
 );
 $statement = $connect->prepare($query);
 if($statement->execute($user_data))
 {
  $message = '
  <div class="alert alert-success">
  Registration Completed Successfully
  </div>
  ';
 }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in Registration
  </div>
  ';
 }
}
?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Employee Account | Form Wizard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500'>

      <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <section class="form-box" >
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-wizard">
					
						<!-- Form Wizard -->
                    	<form role="form" action="" method="post" id="paymentForm">

                    		<h3>Sign Up Office Employee Account</h3>
                    		<p>Fill all form field to go next step</p>
							
							<!-- Form progress -->
                    		<div class="form-wizard-steps form-wizard-tolal-steps-4">
                    			<div class="form-wizard-progress">
                    			    <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
                    			</div>
								<!-- Step 1 -->
                    			<div class="form-wizard-step active">
                    				<div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    				<p>Personal</p>
                    			</div>
								<!-- Step 1 -->
								
								<!-- Step 2 -->
                    			<div class="form-wizard-step">
                    				<div class="form-wizard-step-icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                    				<p>Contact</p>
                    			</div>
								<!-- Step 2 -->
								
								<!-- Step 3 -->
								<div class="form-wizard-step">
                    				<div class="form-wizard-step-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                    				<p>Official</p>
                    			</div>
								<!-- Step 3 -->
								
								<!-- Step 4 -->
								<div class="form-wizard-step">
                    				<div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                    				<p>Payment</p>
                    			</div>
								<!-- Step 4 -->
                    		</div>
							<!-- Form progress -->
                    		
							
							<!-- Form Step 1 -->
                    		<fieldset>

                    		    <h4>Personal Information: <span>Step 1 - 4</span></h4>
								<div class="form-group">
									
									<input type="text" name="first_name" id="first_name"  placeholder="Enter first name" class="form-control required"/>
                                </div>
                                <div class="form-group">
                    			
                            <input type="text" name="last_name" id="last_name" class="form-control required" placeholder="Enter last name" />
                                </div>
								<div class="form-group">
							<input type="email" name="email" id="email" class="form-control required" placeholder="Enter your email"/> </div>
							
                                <div class="form-group">
									<input type="number" name="phone" id="phone"class="form-control required" placeholder="Enter your phone number" />
                                </div>
								
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
							<!-- Form Step 1 -->

							<!-- Form Step 2 -->
                            <fieldset>

                                <h4> Project Brief<span>Step 2 - 4</span></h4>
								<div class="form-group">
                    			    <label>Email: <span>*</span></label>
                                    <input type="text" name="logo_Name" id="logo_Name" class="form-control required"/>
                                </div>
								<div class="form-group">
                    			    <label>Phone: <span>*</span></label>
                                    <input type="text" name="tagline" id="tagline"class="form-control required" />
                                </div>
                                <div class="form-group">
                    			    <label>Address: <span>*</span></label>
                                    <input type="text" name="idea" id="idea" placeholder="Any Specific idea to be incorporated" class="form-control required"/>
                                </div>
								<div class="form-group">
									<input type="text" name="color_Like" id="color_Like" placeholder="Please select color which you would like to in your logo?" class="form-control required"/>
                                </div>
								<div class="form-group">
									<input type="text" name="color_Dislike" id="color_Dislike" placeholder="What color would you NOT like to be included in your logo?" class="form-control required" />
                                </div>
								<div class="form-group">
									<input type="text" name="look_Feel" id="look_Feel" placeholder="Look and feel ?" class="form-control required"/>
								</div>
								<div class="form-group">
									<input type="text" name="target_audience" id="target_audience"class="form-control required" placeholder="target Audience" />
								</div>
								<div class="form-group">
									<input type="text" name="industry" id="industry" placeholder="Industry" class="form-control required"/>
								</div>
								<div class="form-group">
									<textarea class="form-control required" name="business_description" placeholder="Brief Discription about business"></textarea>
								</div>
								<div class="form-group">
                    			    <select id="logoStyle" name="styleoflogo"class="form-control required">
										<option value="">Select Style of Logo</option>
										<option value="Modern">Modern</option>
										<option value="Hi-Tec">Hi-Tec</option>
										<option value="Contemporary">Contemporary</option>
										<option value="Funny">Funny</option>
										<option value="Antique">Antique</option>
										<option value="Corporate">Corporate</option>
										<option value="Other">Other</option>
									</select>
                                </div>
								
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
							<!-- Form Step 2 -->

							<!-- Form Step 3 -->
                            <fieldset>

                                <h4>Your Order <span>Step 3 - 4</span></h4>
								
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-next" id="nextBtn">Next</button>
                                </div>
                            </fieldset>
						
							<!-- Form Step 4 -->
                    	
                    	</form>
						<!-- Form Wizard -->
                    </div>
                </div>
                    
            </div>
        </section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
<script>
$("#nextBtn").on("click", function () {


var validationsPassed = true;
var self = $(this);
	});

	$.ajax({
					type: "post",
					url: "order_detail.php",
					
					success: function (success) {
						
						if (!success.status) {
							alert("sdfsdfsdf fa");
							return alert(success.message || "Error received from server");
						}

						modifyFieldsForeGHL(success.data);
						$("#paymentForm").submit();
						//localStorage.clear();
					},
					error: function () {
						
						console.log(" Error in sending data ");
					}
				});
</script>
  

	<script  src="js/index.js">
		</script>




</body>

</html>
