<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="loginregister/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginregister/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginregister/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginregister/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginregister/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginregister/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginregister/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginregister/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginregister/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginregister/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginregister/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('loginregister/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				
				
				<form action="{{ route('create-account') }}" class="login100-form validate-form" method="POST">
					@method('POST')
					<span class="login100-form-title p-b-49">
						Đăng kí
					</span>
					
						@if(isset($thongbao))
						<div>
							@if ($thongbao == 1)
								 <div class="alert alert-success">
									Đăng ký thành công
								 </div>
								 @else
								 <div class="alert alert-danger">
									Đăng ký thất bại
								 </div>
							 @endif
						</div>
						@endif
					
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Tài khoản</span>
						<input class="input100" type="text" name="username" placeholder="Nhập tài khoản của bạn">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" name="password" placeholder="Nhập mật khẩu của bạn">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Xác nhận mật khẩu</span>
						<input class="input100" type="password" name="cfpassword" placeholder="Xác nhận mật khẩu">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Đăng kí
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-155">
						<a href="{{route('home')}}" class="txt2">
							Trang chủ
						</a>
						<a href="{{route('login')}}" class="txt2">
							Đăng kí
						</a>
					</div>

                    @csrf
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
<script src="loginregister/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginregister/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginregister/vendor/bootstrap/js/popper.js"></script>
	<script src="loginregister/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginregister/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginregister/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginregister/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginregister/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginregister/js/main.js"></script>

</body>
</html>