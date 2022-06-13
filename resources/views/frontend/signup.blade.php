<!DOCTYPE html>
<html lang="en">
<head>
	<title>SignUp For Abir's Creation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--=========================www.material design iconic font========================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login">
			<div class="wrap-login">
				<form class="login-form validate-form">
					<span class="login-form-title">
						Good to see you here
					</span>
				
					<div class="wrap-input validate-input" data-validate = "Valid email is: a@email.c">
						<input class="input" type="text" name="email">
						<span class="focus-input" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input" type="password" name="pass">
						<span class="focus-input" data-placeholder="Password"></span>
					</div>

					<div class="wrap-input validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input" type="password" name="pass">
						<span class="focus-input" data-placeholder=" Re-write Password"></span>
					</div>

					<div class="container-login-form-btn">
						<div class="wrap-login-form-btn">
							<button class="login-form-btn">
								Register
							</button>
						</div>
					</div>

					<div class="text-center">
						<span class="txt1">
							Want to Skip for now?
						</span>

						<a class="txt2" href="{{route('home')}}">
							Home->
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

<script src="{{asset('frontend/login/js/jquery-3.2.1.min.js')}}"></script>

<script src="{{asset('frontend/login/js/main.js')}}"></script>



</body>
</html>