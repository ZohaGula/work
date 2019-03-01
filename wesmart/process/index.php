<?php

$connect = new PDO( "mysql:host=localhost;dbname=wesmarti_db", "root", "" );
$message = '';
if ( isset( $_POST[ "email" ] ) ) {
	sleep( 5 );
	$query = "
 INSERT INTO order_detail 
 (first_name, last_name, email, mobile_no, logoName, tagLine, lookFeel, colorLike,colorDislike,idea,targetAudience,industry,amount,logoStyle ) VALUES 
 (:first_name, :last_name, :email, :mobile_no,:logoName, :tagLine, :lookFeel, :colorLike, :colorDislike, :idea, :targetAudience, :industry, :amount, :logoStyle )
 ";
	//$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

	$user_data = array(
		':first_name' => $_POST[ "first_name" ],
		':last_name' => $_POST[ "last_name" ],
		':email' => $_POST[ "email" ],
		':password' => $password_hash,
		':mobile_no' => $_POST[ "mobile_no" ],
		':logoName' => $_POST[ "logoName" ],
		':tagLine' => $_POST[ "tagLine" ],
		':lookFeel' => $_POST[ "lookFeel" ],
		':colorLike' => $_POST[ "colorLike" ],
		':colorDislike' => $_POST[ "colorDislike" ],
		':idea' => $_POST[ "idea" ],
		':targetAudience' => $_POST[ "targetAudience" ],
		':industry' => $_POST[ "industry" ],
		':amount' => $_POST[ "amount" ],
		':logoStyle' => $_POST[ "logoStyle" ],


	);
	$statement = $connect->prepare( $query );
	if ( $statement->execute( $user_data ) ) {
		$message = '
  <div class="alert alert-success">
  Registration Completed Successfully
  </div>
  ';
	} else {
		$message = '
  <div class="alert alert-success">
  There is an error in Registration
  </div>
  ';
	}
}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Multi Step Registration Form Using JQuery Bootstrap in PHP</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
	<style>
		.box {
			width: 800px;
			margin: 0 auto;
		}
		
		.active_tab1 {
			background-color: #fff;
			color: #333;
			font-weight: 600;
		}
		
		.inactive_tab1 {
			background-color: #f5f5f5;
			color: #333;
			cursor: not-allowed;
		}
		
		.has-error {
			border-color: #cc0000;
			background-color: #ffff99;
		}
	</style>
</head>

<body>
	<br/>
	<div class="container box">
		<br/>
		<h2 align="center">Multi Step Registration</h2><br/>
		<?php echo $message; ?>
		<form method="post" id="register_form">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Login Details</a>
				</li>
				<li class="nav-item">
					<a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details</a>
				</li>
				<li class="nav-item">
					<a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Your Order</a>
				</li>
			</ul>
			<div class="tab-content" style="margin-top:16px;">
				<div class="tab-pane active" id="login_details">
					<div class="panel panel-default">
						<div class="panel-heading">Login Details</div>
						<div class="panel-body">
							<div class="form-group">
								<input type="text" name="first_name" id="first_name" placeholder="Enter first name" class="form-control required"/>
								<span id="error_first_name" class="text-danger"></span>
							</div>
							<div class="form-group">
								<input type="text" name="last_name" id="last_name" placeholder="Enter first name" class="form-control required"/>
								<span id="error_last_name" class="text-danger"></span>
							</div>
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control required" placeholder="Enter your email"/>
								<span id="error_email" class="text-danger"></span>
							</div>
							<div class="form-group">
								<input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="Enter your phone"/>
								<span id="error_mobile_no" class="text-danger"></span>
							</div>
							<br/>
							<div align="center">
								<button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
							</div>
							<br/>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="personal_details">
					<div class="panel panel-default">
						<div class="panel-heading">Fill Personal Details</div>
						<div class="panel-body">
							<div class="form-group">
								<input type="text" name="logoName" id="logoName" class="form-control required" placeholder="Enter Logo name"/>
								<span id="error_logo" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label>Enter taglined</label>
								<input type="text" name="tagline" id="tagLine" class="form-control required"/>
								<span id="error_tagline" class="text-danger"></span>
							</div>
							<div class="form-group">
								<input type="text" name="idea" id="idea" placeholder="Any Specific idea to be incorporated" class="form-control required"/>
								<span id="error_idea" class="text-danger"></span>
							</div>

							<div class="form-group">
								<input type="text" name="colorLike" id="colorLike" placeholder="Please select color which you would like to in your logo?" class="form-control required"/>
								<span id="error_colorLike" class="text-danger"></span>
							</div>
							<div class="form-group">
								<input type="text" name="colorDisLike" id="colorDisLike" placeholder="What color would you NOT like to be included in your logo?" class="form-control required"/>
								<span id="error_colorDisLike" class="text-danger"></span>
							</div>
							<div class="form-group">
								<input type="text" name="lookFeel" id="lookFeel" placeholder="Look and feel ?" class="form-control required"/>
								<span id="error_lookFeel" class="text-danger"></span>
							</div>
							<div class="form-group">
								<input type="text" name="targetAudience" id="targetAudience" class="form-control required" placeholder="Target Audience"/>
							<span id="error_targetAudience" class="text-danger"></span>
							</div>
							<div class="form-group">
								<input type="text" name="industry" id="industry" placeholder="Industry" class="form-control required"/>
							<span id="error_indsutry" class="text-danger"></span>
							</div>
							<div class="form-group">
								<textarea class="form-control required" name="business_description" placeholder="Brief Discription about business"></textarea>
								<span id="error_description" class="text-danger"></span>
							</div>
							<div class="form-group">
								<select id="logoStyle" name="logoStyle" class="form-control required">
									<option value="">Select Style of Logo</option>
									<option value="Modern">Modern</option>
									<option value="Hi-Tec">Hi-Tec</option>
									<option value="Contemporary">Contemporary</option>
									<option value="Funny">Funny</option>
									<option value="Antique">Antique</option>
									<option value="Corporate">Corporate</option>
									<option value="Other">Other</option>
								</select>
								<span id="error_logoStyle" class="text-danger"></span>
							</div>
							<br/>
							<div align="center">
								<button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
								<button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Register</button>
							</div>
							<br/>
						</div>
					</div>
				</div>
				
			</div>
		</form>
	</div>
</body>
</html>

<script>
	$( document ).ready( function () {

		$( '#btn_login_details' ).click( function () {

			var error_email = '';
			var error_first_name = '';
			var error_last_name = '';
			var error_mobile_no = '';
			
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

				//first name
			if ( $.trim( $( '#first_name' ).val() ).length == 0 ) {
				error_first_name = 'First name is required';
				$( '#error_first_name' ).text( error_first_name );
				$( '#first_name' ).addClass( 'has-error' );
			} else {
				error_first_name = '';
				$( '#error_first_name' ).text( error_first_name );
				$( '#first_name' ).removeClass( 'has-error' );
			}
			//last name
if ( $.trim( $( '#last_name' ).val() ).length == 0 ) {
				error_last_name = 'Last name is required';
				$( '#error_last_name' ).text( error_last_name );
				$( '#last_name' ).addClass( 'has-error' );
			} else {
				error_last_name = '';
				$( '#error_last_name' ).text( error_last_name );
				$( '#last_name' ).removeClass( 'has-error' );
			}
			//Email
			if ( $.trim( $( '#email' ).val() ).length == 0 ) {
				error_email = 'Email is required';
				$( '#error_email' ).text( error_email );
				$( '#email' ).addClass( 'has-error' );
			} else {
				if ( !filter.test( $( '#email' ).val() ) ) {
					error_email = 'Invalid Email';
					$( '#error_email' ).text( error_email );
					$( '#email' ).addClass( 'has-error' );
				} else {
					error_email = '';
					$( '#error_email' ).text( error_email );
					$( '#email' ).removeClass( 'has-error' );
				}
			}
			
			//mobile phone
if ( $.trim( $( '#mobile_no' ).val() ).length == 0 ) {
				error_mobile_no = 'Valid Mobile Number is required';
				$( '#error_mobile_no' ).text( error_mobile_no );
				$( '#mobile_no' ).addClass( 'has-error' );
			} else {
				error_mobile_no = '';
				$( '#error_mobile_no' ).text( error_mobile_no );
				$( '#mobile_no' ).removeClass( 'has-error' );
			}

			if ( error_email != '' || error_first_name != '' || error_last_name != '' || error_mobile_no != '' ) {
				return false;
		} else {
				$( '#list_login_details' ).removeClass( 'active active_tab1' );
				$( '#list_login_details' ).removeAttr( 'href data-toggle' );
				$( '#login_details' ).removeClass( 'active' );
				$( '#list_login_details' ).addClass( 'inactive_tab1' );
				$( '#list_personal_details' ).removeClass( 'inactive_tab1' );
				$( '#list_personal_details' ).addClass( 'active_tab1 active' );
				$( '#list_personal_details' ).attr( 'href', '#personal_details' );
				$( '#list_personal_details' ).attr( 'data-toggle', 'tab' );
				$( '#personal_details' ).addClass( 'active in' );
			}
		} );

		$( '#previous_btn_personal_details' ).click( function () {
			$( '#list_personal_details' ).removeClass( 'active active_tab1' );
			$( '#list_personal_details' ).removeAttr( 'href data-toggle' );
			$( '#personal_details' ).removeClass( 'active in' );
			$( '#list_personal_details' ).addClass( 'inactive_tab1' );
			$( '#list_login_details' ).removeClass( 'inactive_tab1' );
			$( '#list_login_details' ).addClass( 'active_tab1 active' );
			$( '#list_login_details' ).attr( 'href', '#login_details' );
			$( '#list_login_details' ).attr( 'data-toggle', 'tab' );
			$( '#login_details' ).addClass( 'active in' );
		} );

		$( '#btn_personal_details' ).click( function () {
			var error_logoName = '';
			var error_tagLine = '';
			var error_idea = '';
			var error_colorLike = '';
			var error_colorDisLike = '';
			var error_lookFeel = '';
			var error_industry = '';
			var error_targetAudience = '';
			var error_description = '';
			var error_logoStyle = '';

			if ( $.trim( $( '#logoName' ).val() ).length == 0 ) {
				error_logoName = 'Logo Name is required';
				$( '#error_logoName' ).text( error_logoName );
				$( '#logoName' ).addClass( 'has-error' );
			} else {
				error_logoName = '';
				$( '#error_logoName' ).text( error_logoName );
				$( '#logoName' ).removeClass( 'has-error' );
			}
 		////////TAG Line ///////////
			if ( $.trim( $( '#tagLine' ).val() ).length == 0 ) {
				error_tagLine = 'Tagline is required';
				$( '#error_tagLine' ).text( error_tagLine );
				$( '#tagLine' ).addClass( 'has-error' );
			} else {
				error_tagLine = '';
				$( '#error_tagLine' ).text( error_tagLine );
				$( '#tagLine' ).removeClass( 'has-error' );
			}
			
			//IDEAAAAAAAAAAAA //////////
			if ( $.trim( $( '#idea' ).val() ).length == 0 ) {
				error_tagLine = 'Idea is required';
				$( '#error_idea' ).text( error_idea );
				$( '#idea' ).addClass( 'has-error' );
			} else {
				error_idea = '';
				$( '#error_idea' ).text( error_idea );
				$( '#idea' ).removeClass( 'has-error' );
			}			
			//COLOR like //////////
			if ( $.trim( $( '#colorLike' ).val() ).length == 0 ) {
				error_colorLike = 'Color Like is required';
				$( '#error_colorLike' ).text( error_colorLike );
				$( '#colorLike' ).addClass( 'has-error' );
			} else {
				error_colorLike = '';
				$( '#error_colorLike' ).text( error_colorLike );
				$( '#colorLike' ).removeClass( 'has-error' );
			}
			
			//COLOR DISlike //////////
			if ( $.trim( $( '#colorDisLike' ).val() ).length == 0 ) {
				error_colorDisLike = 'Color Dislike is required';
				$( '#error_colorDisLike' ).text( error_colorDisLike );
				$( '#colorDisLike' ).addClass( 'has-error' );
			} else {
				error_colorDisLike = '';
				$( '#error_colorDisLike' ).text( error_colorDisLike );
				$( '#colorDisLike' ).removeClass( 'has-error' );
			}
			//look Feeel //////////
			if ( $.trim( $( '#lookFeel' ).val() ).length == 0 ) {
				error_lookFeel = 'Look Feel is required';
				$( '#error_lookFeel' ).text( error_lookFeel );
				$( '#lookFeel' ).addClass( 'has-error' );
			} else {
				error_lookFeel= '';
				$( '#error_lookFeel' ).text( error_lookFeel);
				$( '#lookFeel' ).removeClass( 'has-error' );
			}
			//about Industry //////////
			if ( $.trim( $( '#industry' ).val() ).length == 0 ) {
				error_industry = 'industry is required';
				$( '#error_industry' ).text( error_industry );
				$( '#industry' ).addClass( 'has-error' );
			} else {
				error_industry = '';
				$( '#error_industry' ).text( error_industry);
				$( '#industry' ).removeClass( 'has-error' );
			}
			
			//targetAudience //////////
			if ( $.trim( $( '#targetAudience' ).val() ).length == 0 ) {
				error_industry = 'target Audience is required';
				$( '#error_targetAudience' ).text( error_targetAudience );
				$( '#targetAudience' ).addClass( 'has-error' );
			} else {
				error_targetAudience = '';
				$( '#error_targetAudience' ).text( error_targetAudience);
				$( '#targetAudience' ).removeClass( 'has-error' );
			}
			//targetAudience //////////
			if ( $.trim( $( '#business_description' ).val() ).length == 0 ) {
				error_industry = 'Description Audience is required';
				$( '#error_description' ).text(error_description );
				$( '#business_description' ).addClass( 'has-error' );
			} else {
				error_targetAudience = '';
				$( '#error_description' ).text(error_description);
				$( '#error_description' ).removeClass( 'has-error' );
			}
			//targetAudience //////////
			if ( $.trim( $( '#logoStyle' ).val() ).length == 0 ) {
				error_logoStyle = 'Logo style Audience is required';
				$( '#error_logoStyle' ).text(error_logoStyle );
				$( '#logoStyle' ).addClass( 'has-error' );
			} else {
				error_logoStyle = '';
				$( '#error_logoStyle' ).text(error_logoStyle);
				$( '#logoStyle' ).removeClass( 'has-error' );
			}
			
			if ( error_logoName != '' || error_tagLine != '' || error_idea != '' || error_colorLike != '' || error_colorDisLike != '' || error_lookFeel != '' 
				|| error_industry != '' || error_targetAudience != ''|| error_description != ''|| error_logoStyle != '' ) {
				return false;
			} else {
			
				alert("all done");
				$( "#register_form" ).submit(); 	
			}
		} );

		/*$( '#previous_btn_contact_details' ).click( function () {
			$( '#list_contact_details' ).removeClass( 'active active_tab1' );
			$( '#list_contact_details' ).removeAttr( 'href data-toggle' );
			$( '#contact_details' ).removeClass( 'active in' );
			$( '#list_contact_details' ).addClass( 'inactive_tab1' );
			$( '#list_personal_details' ).removeClass( 'inactive_tab1' );
			$( '#list_personal_details' ).addClass( 'active_tab1 active' );
			$( '#list_personal_details' ).attr( 'href', '#personal_details' );
			$( '#list_personal_details' ).attr( 'data-toggle', 'tab' );
			$( '#personal_details' ).addClass( 'active in' );
		} );

		$( '#btn_contact_details' ).click( function () {
			alert("sdsdffs")
				
			} );*/
	}
	 );
	
	
</script>