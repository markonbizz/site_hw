<?php

    session_start();

	if(!defined("_UTILITIES_PATH_")){

		define("_UTILITIES_PATH_", "assets/main/php/");
	}
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Sign-Up | DENNIS' ARMORY</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/user-portal/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/user-portal/css/portal.css">

</head> 

<body class="app app-signup p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/main/images/logo.svg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Sign up to Portal</h2>					
	
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" action="Sign-Up.php" method="post">         
							
							<div class="email mb-3">
								<label class="sr-only" for="signup-account">Your Account Name</label>
								<input id="signup-name" name="fAccount" type="text" class="form-control signup-name" placeholder="Account" required="required">
							</div>
							
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Your Email</label>
								<input id="signup-email" name="fEmail" type="email" class="form-control signup-email" placeholder="Email" required="required">
							</div>
							
							<div class="email mb-3">
								<label class="sr-only" for="signup-birthday">Your Birthday</label>
								<input id="signup-name" name="fBirthday" type="text" class="form-control signup-name" placeholder="Birthday" onfocus="(this.type='date')" onblur="(this.type='text')" required="required">
							</div>

							<div class="email mb-3">
								<label class="sr-only" for="signup-realname">Your Real Name</label>
								<input id="signup-name" name="fRealName" type="text" class="form-control signup-name" placeholder="Real Name" required="required">
							</div>

							<div class="email mb-3">
								<label class="sr-only" for="signup-phonenumber">Your Phone Number</label>
								<input id="signup-name" name="fPhoneNumber" type="tel" class="form-control signup-name" placeholder="Phone Number: 0912345678" pattern="[0-9]{10}" required="required">
							</div>

							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Password</label>
								<input id="signup-password" name="fPassword" type="password" class="form-control signup-password" placeholder="Password" required="required">
							</div>
							
							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Password Again</label>
								<input id="signup-password" name="fPassword_Again" type="password" class="form-control signup-password" placeholder="Repeat Password" required="required">
							</div>

							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
							</div>

							<?php

								include_once(_UTILITIES_PATH_ . "Session_Register.php");
							
							?>
							
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="Login.php" >Log in</a></div>
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">			    
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
					    <div>Portal is a free Bootstrap 5 admin dashboard template. You can download and view the template license <a href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.</div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 

