<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="description" content="Gyanith '18 is the second version of single technical symposium of NIT Puducherry.">
		<meta name="author" content="Web Team Gyanith,NIT Py" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login | Gyanith '18 </title>
		<link rel="icon" type="image/png" href="../assets/img/icons/gyanith-icon.png" sizes="32x32">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<link  rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/style1.css">
		<link href="../assets/css/all.css" rel="stylesheet">
</head>
<body>

<div class="o-grid__item" onclick="javascript:location.href='../'">
		<button class="c-hamburger c-hamburger--htla is-active">
			<span>Toggle menu</span>
		</button>
</div>
<div class="login-wrap">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="error"></div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="reg-d">
		<div class="register-div">
			<form id="msform" method="post">
			  <!-- progressbar -->
			  <ul id="progressbar">
			    <li class="active">Personal Details</li>
			    <li>Social Profiles</li>
			    <li>College Details</li>
			  </ul>

			  <fieldset>
				  <h2 class="fs-title">Create your account</h2>
			    <input type="text" name="fname" id="fname" placeholder="First Name" />
			    <input type="text" name="lname" id="lname" placeholder="Last Name" />
			    <select placeholder="gender" name="gender" id="gender">
			    	<option value="0">Male</option>
			    	<option value="1">Female</option>
			    </select><br>
			    <input type="previous" name="login" id="loglog" class="submit action-button" value="Log In">
					<input type="button" name="next" class="next action-button" value="Next" id="next1" />
			  </fieldset>
			  <fieldset>
				<h2 class="fs-title">Social Profiles</h2>
			  	<input type="email" name="email1" id="email1" placeholder="E-mail Address">
			  	<input type="password" name="pwd1" id="pwd1" placeholder="Password">
			  	<input type="password" name="cpwd" id="cpwd" placeholder="Confirm Password">
			  	<input type="tel" name="mobile" id="mobile" placeholder="Phone Number">
			    <br/><input type="button" name="previous" class="previous action-button" value="Previous" />
			    <input type="button" name="next" class="next action-button" value="Next" id="next2" />
			  </fieldset>
			  <fieldset>
					<h2 class="fs-title">College Details</h2>
					<?php include "collegeselect.php"; ?>
					<input type="text" name="collegetxt" id="collegetxt" placeholder="College name">
					<div id="checkcheck">
						<?php if(!isset($_GET['campus'])){ ?>
							<input type="checkbox" name="reference" value="ref" >
							<label for="reference">&nbsp;&nbsp;Do you have a reference from your college?</label>
							
						<?php }
						else{ ?>
							<input type="hidden" name="campus" id="campus" value="campus"/>
						<?php }
						?>
						
						<br>
						<!--<input type="checkbox" name="accomodation" value="accomodation">
						<label for="accomodation">&nbsp;&nbsp;Do you want Accomodation?</label>-->
					</div>
					<div class="g-recaptcha" data-sitekey="6Le4AUgUAAAAAO__pBFu_Ozr4oSTYOFcI70fNcz4" id="captchagyan"></div>
			    <input type="button" name="previous" class="previous action-button" value="Previous" />
			    <input type="button" name="submit" class="submit action-button" value="Submit" id="sign-btn" />
			  </fieldset>
			</form>				
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="log-d">
		<div class="login-div">
			<p id="header">LOGIN</p>
	        <form method="post" id="login">
	            <input type="email" name="email" placeholder="Email"><br><br>
	            <input type="password" name="pwd" placeholder="Password"><br><br>
	            <button type="submit" id="login-btn" name="login-btn">Login</button>
	        </form>
	        <hr>
	        <div class="not-m">
		        <p id="not-member">Not a member already? <span id="signup-btn">Sign Up</span></p>
							<!--<button type="submit" id="signup-btn">Sign Up</button>-->
	        </div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<!--<script src='js/api.js'></script>-->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript" src="js/validation.min.js"></script>
	<script src="js/bootstrap.min.js" ></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript" src="js/reg.js" ></script>
	<script type="text/javascript" src="js/log_scr.js"></script>
	<script type="text/javascript" src="../assets/js/scripts1.js"></script>
</div>


</body>
</html>