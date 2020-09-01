<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'vendor/head.php'; ?>
</head>
<body>
	<?php 
		$msg = "";
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['pass'];

			if($username == 'admin' && $password == '123456') header("Location: admin.php");
			if($username == 'member' && $password == '123456') header("Location: member.php");
		}
	?>


	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="" method="post" name="main-form">
					<div class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="AVATAR">
					</div>
					<span class="login100-form-title p-t-20 p-b-45">
						John Doe
					</span>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" method='post' name='submit'>
							Login
						</button>
					</div>
					
					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div>

					<div class="text-center w-full">
						<a class="txt1" href="#">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>