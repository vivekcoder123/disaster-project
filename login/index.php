<?php include "../includes/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form">

          <a href="#" class="btn btn-block btn-danger p-3" style="border-radius:50%;">LOGIN AS VICTIM</a>
            <div class="text-center font-weight-bold mt-3">
            	OR
            </div>
						<hr>
					<div class="mt-2">
					<!-- <h4 class="text-center font-weight-bold">
						Helper/Administrator Login
					</h4> -->

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<label for="" class="alert alert-primary font-weight-bold">LOGIN AS</label>
						<select class="form-control text-center text-secondary font-weight-bold" name="">
							<option value="">Helper</option>
							<option value="">Administrator</option>
						</select>

					</div>
					<br>

					<div class="wrap-input100 validate-input" data-validate = "Username/Email is required">
						<input class="input100" type="text" name="pass" placeholder="Enter Username or Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Enter Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>


					<div class="pt-3 ml-5 pl-4">

						<span class="">Account Not Created Yet?</span>
						<a class="btn btn-block btn-primary" style="border-radius:10px;" href="../register">
							<span class="text-light">Create Your Account</span>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>

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
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
