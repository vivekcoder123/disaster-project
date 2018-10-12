<?php include "../includes/db.php"; ?>
<?php

if(isset($_POST['submit'])){

	$name=trim($_POST['name']);
	$name=mysqli_real_escape_string($connection,$name);

	$username=trim($_POST['username']);
	$username=mysqli_real_escape_string($connection,$username);

	$email=trim($_POST['email']);
	$email=mysqli_real_escape_string($connection,$email);

	$password=trim($_POST['pass']);
	$password=mysqli_real_escape_string($connection,$password);

	$cpassword=trim($_POST['cpass']);
	$cpassword=mysqli_real_escape_string($connection,$cpassword);

	$position=trim($_POST['position']);
	$position=mysqli_real_escape_string($connection,$position);

  $email_rows=mysqli_num_rows(mysqli_query($connection,"SELECT * from users WHERE email='$email' "));
	$username_rows=mysqli_num_rows(mysqli_query($connection,"SELECT * from users WHERE username='$username' "));

	if($password!=$cpassword){
		$_SESSION['error']= "<h5 class='text-danger pb-3 ml-5'>Both passwords do not match</h5>";
	}
	else if($email_rows>=1){
		$_SESSION['error']= "<h5 class='text-danger pb-3 ml-5'>Email Id already exists</h5>";
	}
	else if($username_rows>=1){
		$_SESSION['error']= "<h5 class='text-danger pb-3 ml-5'>Username already exists</h5>";
	}
	else{
   $insert_users=mysqli_query($connection,"INSERT into users()VALUES('','$position','$name','$email','$password','$username')");
	  $_SESSION['success']= "<h5 class='text-success pb-3 ml-5'>Registration Successful <a href='../login' class='btn btn-danger'>LOGIN Here</a></h5>";
	}

}






 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post">

          <?php
					if(isset($_SESSION['error'])){
							echo $_SESSION['error'];
						}
						else if(isset($_SESSION['success'])){
								echo $_SESSION['success'];
							}
					 ?>


					<script type="text/javascript">
				   <?php if(isset($_SESSION['success'])){ ?>
				    setTimeout(function(){<?php unset($_SESSION['success']);?>});
				   <?php } ?>
					 <?php if(isset($_SESSION['error'])){ ?>
				    setTimeout(function(){<?php unset($_SESSION['error']);?>});
				   <?php } ?>
				 </script>


					<h2 class="font-weight-bold text-center text-dark pb-5">
						Sign Up For Helper/Administrator
					</h2>

					<div class="wrap-input100 validate-input" data-validate="Helper/Administrator is required">
						<span class="label-input100">Sign Up for</span>
						<select class="form-control mt-2" name="position">
							<option value="helper">Helper</option>
							<option value="administrator">Administrator</option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" placeholder="Name..."
						 value="<?php echo isset($_POST['name'])?$_POST['name']:'';?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess..."
						value="<?php echo isset($_POST['email'])?$_POST['email']:'';?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username..."
						value="<?php echo isset($_POST['username'])?$_POST['username']:'';?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="cpass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>


					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit">
								Sign Up
							</button>
						</div>

						 <div class="mt-3">
							 <span>Already an user?</span>
						<a href="../login" class="btn btn-success">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
