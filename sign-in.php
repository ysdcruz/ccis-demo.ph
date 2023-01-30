<!DOCTYPE html>
<html>
	<head>
  	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sign In – College of Computer and Information Sciences</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/content/general/icon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/front.js"></script>
		<script src="js/back.js"></script>
		<script>
			window.onload = function() {
				if(window.location.hash === '')
					window.location.hash = '#log-in';
			}

			window.onhashchange = function() {
				$('#form-container form').trigger('reset');
				$('.input-container').removeClass('focus');
				$('.input-container').removeClass('error');
				$('#form-container button').attr('disabled', 'true');
				$('.account-radio').each(function() {
						$(this).removeAttr('checked');
				});
				signupPageAnime();
			}
		</script>
	</head>
	<body style="overflow-y: auto; overflow-x: hidden; background-color: #FFF;">
		<header class="sign-in-header" style="transform: translateY(0px);">
			<div id="website-header-container">
				<div id="website-header">
					<div id="logo-container">
						<a id="logo-link" href="index.php"><img id="logo-img" src="images/content/general/logo.png" alt="Logo"></a>
						<a href="index.php" tabindex="0"><p id="ccis" class="sign-in-ccis" style="color: rgb(255, 255, 255);">CCIS</p></a>
					</div>
					<div id="sign-in-close">
						<span id="close-label">BACK</span>
						<div id="sign-in-close-img">
							<img src="images/icons/close.png" id="close-green" alt="Close Icon">
							<img src="images/icons/close-white.png" id="close-white" alt="Close Icon" class="hidden">
						</div>   
					</div>
				</div>
			</div>
		</header>
		<div id="top"><span></span></div>
		<div id="register-modal" class="modal">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-header">
						<h2></h2>
						<div class="modal-close modal-dismiss">
							<img src="images/icons/close.png" alt="Close Icon">
						</div>
					</div>
					<div class="modal-alert">
						<div>
							<i class="fas fa-check-circle fa-3x alert-green"></i>
						</div>
						<div>
							<p class="modal-alert-header">Thanks for registering!</p>
							<p>You've now sent your member request to the admin.<br><br>Please wait for <b>2-3 working days</b> for the request to be approved. A message will be sent to your email (<span id="email-pending"></span>) regarding the approval.<br><br>If you can not find the response in your normal inbox, it is worth checking in your spam or junk mail section.</p>
						</div>
					</div>
					<div class="modal-button-holder modal-alert-button-holder">
						<div></div>
						<a href="index.php" id="success-reg-btn" class="btn btn-green">Okay</a>
					</div>
				</div>
			</div>
		</div>
		<div id="confirm-modal" class="modal">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-header">
						<h2></h2>
						<div class="modal-close modal-dismiss">
							<img src="images/icons/close.png" alt="Close Icon">
						</div>
					</div>
					<div class="modal-alert">
						<div>
							<i></i>
						</div>
						<div>
							<p class="modal-alert-header"></p>
							<p class="modal-alert-content"></p>
						</div>
					</div>
					<div id="confirm-yes-cancel" class="modal-button-holder modal-alert-button-holder">
						<div></div>
						<div>
							<div class="btn btn-default modal-dismiss modal-dismiss-btn">Cancel</div>
							<div class="btn btn-green confirm-close">Yes</div>
						</div>
					</div>
					<div id="confirm-ok" class="modal-button-holder modal-alert-button-holder">
						<div></div>
						<div>
							<div class="btn btn-green save-close" data-reload="">OK</div>
						</div>
					</div>
					<div id="confirm-ok-fail" class="modal-button-holder modal-alert-button-holder">
						<div></div>
						<div>
							<div class="btn btn-green modal-dismiss modal-dismiss-btn">OK</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="main-sign-in">
			<div id="main-inner">
				<div id="form-container">
					<div id="sign-up-container" style="left: -100%; display: none;">
						<h1>Create Account</h1>
						<form>
							<div id="input-account-type">
								<h4>I am a/an:</h4>
								<div>
									<input type="radio" id="radio-student" class="account-radio" name="account-type" value="3">
									<label for="radio-student">Student</label>
									<input type="radio" id="radio-alumni" class="account-radio" name="account-type" value="1">
									<label for="radio-alumni">Alumnus</label>
									<input type="radio" id="radio-employee" class="account-radio" name="account-type" value="2">
									<label for="radio-employee">Employee</label>
									<div id="account-selected"></div>
								</div>
							</div>
							<div id="input-user-no">
								<div class="input-container">
									<div class="input-icon">
										<i></i>
									</div>
									<div class="input-input">
										<h5></h5>
										<input type="text" id="sign-up-no" name="user-no" class="sign-up-input" value="">
									</div>
								</div>
							</div>
							<div id="id-taken">
								ID is already taken
							</div>
							<div id="input-full-name">
								<div class="input-container">
									<div class="input-icon">
										<i class="fas fa-user"></i>
									</div>
									<div class="input-input">
										<h5>Given Name</h5>
										<input type="text" id="sign-up-fname" name="first-name" class="sign-up-input" value="">
									</div>
								</div>
								<div class="input-container">
									<div></div>
									<div class="input-input">
										<h5>Last Name</h5>
										<input type="text" id="sign-up-lname" name="last-name" class="sign-up-input" value="">
									</div>
								</div>
							</div>
							<div class="input-container">
								<div class="input-icon">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="input-input">
									<h5>Email</h5>
									<input type="email" id="sign-up-email" name="email" class="sign-up-input" value="">
								</div>
							</div>
							<div id="email-taken">
								Email is already taken
							</div>
							<div class="input-container">
								<div class="input-icon">
									<i class="fas fa-lock"></i>
								</div>
								<div class="input-input">
									<h5>Password</h5>
									<input type="password" id="sign-up-pass" name="password" class="sign-up-input" value="">
									<i class="pass-toggle far fa-eye"></i>
								</div>
							</div>
							<div id="pass-strength">
								<div>
									<div id="bar-container">
										<div id="bar-value"></div>
									</div>
								</div>
								<div id="bar-description">
									Password is blank
								</div>
							</div>
							<div id="pass-reqs">
								<ul>
									<li>must be 8-16 characters</li>
									<li>contains upper- and/or lowercase letters, digits, and special characters</li>
								</ul>
							</div>
							<div class="input-container">
								<div class="input-icon">
									<i class="fas fa-lock"></i>
								</div>
								<div class="input-input">
									<h5>Confirm password</h5>
									<input type="password" id="sign-up-re-pass" name="re-password" class="sign-up-input" value="">
									<i class="pass-toggle far fa-eye"></i>
								</div>
							</div>
							<div id="pass-match">
								Password did not match
							</div>
							<button id="sign-up-btn" disabled="disabled" name="signUp">Sign Up</button>
						</form>
					</div>
					<div id="sign-in-container" style="right: 0px; display: flex;">
						<h1>Log in to your Account</h1>
						<form>
							<div class="input-container">
								<div class="input-icon">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="input-input">
									<h5>Email</h5>
									<input type="email" id="sign-in-email" name="email" class="sign-in-input" value="" required="">
								</div>
							</div>
							<div class="input-container">
								<div class="input-icon">
									<i class="fas fa-lock"></i>
								</div>
								<div class="input-input">
									<h5>Password</h5>
									<input type="password" id="sign-in-pass" name="password" class="sign-in-input" value="" required="">
									<i class="pass-toggle far fa-eye"></i>
								</div>
							</div>
							<p><a href="forgot-password.php" id="forgot-pass">Forgot password?</a></p>
							<div id="log-in-error"></div>
							<button id="log-in-btn" disabled="disabled">Log In</button>
						</form>
					</div>
				</div>
				<div id="overlay-size" class="overlay-left">
					<div id="overlay" style="transform: translateX(0px);">
						<div id="go-sign-up" style="display: flex;">
							<div>
								<h1>New Here?</h1>
								<p>Get started with your account</p>
							</div>
							<div id="sign-up-prompt" class="button-prompt prompt-active">Sign Up</div>
						</div>
						<div id="go-sign-in" style="display: none;">
							<div>
								<h1>Already a member?</h1>
								<p>Sign in and connect with us</p>
							</div>
							<div id="sign-in-prompt" class="button-prompt">Log In</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="load-modal" class="modal" data-backdrop="static" data-keyboard="false">
			<svg>
				<g>
					<path d="M 50,100 A 1,1 0 0 1 50,0"></path>
				</g>
				<g>
					<path d="M 50,75 A 1,1 0 0 0 50,-25"></path>
				</g>
				<defs>
					<linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
						<stop offset="0%" style="stop-color: #047c5a; stop-opacity: 1"></stop>
						<stop offset="100%" style="stop-color: #00A879; stop-opacity: 1"></stop>
					</linearGradient>
				</defs>
			</svg>
		</div>
	</body>
</html>