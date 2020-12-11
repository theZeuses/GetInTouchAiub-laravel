<!DOCTYPE html>
<html lang="en">
<head>
	<title>Log In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{asset('/assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('/assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="{{asset('/assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('/assets/vendor/select2/select2.min.css"')}}>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/assets/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" method="post">
					<div class="login100-form-avatar">
                    <img src="{{asset('/assets/images/avatar-01.jpg')}}" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						GET IN TOUCH AIUB
					</span>

					<div style ="margin-top:20px;margin-bottom:20px"class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div  style ="margin-top:20px;margin-bottom:20px" class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div  style ="margin-top:20px;margin-bottom:20px" class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					{{--<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div>--}}

					<div  style ="margin-top:20px;margin-bottom:20px; margin-left:30%" class="text-center w-full">
						<a class="txt1" href="/userController/registrationform">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
<script src="{{asset('/assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/assets/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/assets/ vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/assets/js/main.js')}}"></script>

</body>
</html>