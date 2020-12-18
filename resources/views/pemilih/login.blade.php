<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Musma</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href={{asset('login/images/icons/favicon.ico')}}/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('login/vendor/animate/animate.css')}}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('login/vendor/select2/select2.min.css')}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('login/css/util.css')}}>
	<link rel="stylesheet" type="text/css" href={{asset('login/css/main.css')}}>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src={{asset('login/images/img-01.png')}} alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="../login/pemilih">
					@csrf
					<span class="login100-form-title">
						Pemilih Login
					</span>

					<div class="wrap-input100 validate-input">
						
						<input class="input100" type="text" name="username" placeholder="Username" data-validate = "Username is required">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" value="Login" type="submit" />
					</div>

					
				</form>
				<div class="row">
					<div class="col-12">
						@if(\Session::has('alert'))
						<div class="alert alert-danger" style="display:block;float:left">
							<div>{{Session::get('alert')}} test</div>
						</div>
          	 	 	@endif
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src={{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}></script>
<!--===============================================================================================-->
	<script src={{asset('login/vendor/bootstrap/js/popper.js')}}></script>
	<script src={{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}></script>
<!--===============================================================================================-->
	<script src={{asset('login/vendor/select2/select2.min.js')}}></script>
<!--===============================================================================================-->
	<script src={{asset('login/vendor/tilt/tilt.jquery.min.js')}}></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src={{asset('login/js/main.js')}}></script>

</body>
</html>