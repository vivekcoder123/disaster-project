<?php include "../includes/db.php"; ?>
<?php
if(isset($_POST['login']))
{
    $username_mail=trim($_POST['mail']);
    $username_mail=mysqli_real_escape_string($connection,$username_mail);

    $password=trim($_POST['pass']);
    $password=mysqli_real_escape_string($connection,$password);

  $position=trim($_POST['position']);
	$position=mysqli_real_escape_string($connection,$position);

    $query=mysqli_query($connection,"SELECT * from users where (username='$username_mail' or email='$username_mail') and password='$password' and position='$position'");

    if(!$query)
    {
        echo ("connection error" .mysqli_error($connection));
    }
    $result=mysqli_num_rows($query);
         if($result==1)
           {
            $row=mysqli_fetch_array($query);
            $_SESSION['username']=$row['username'];
            unset($_SESSION['login_error']);
            if($position=="administrator"){
              header("Location:../admin");
            }else{
              header("Location:../helper");
            }
           }
        else
          {
          $_SESSION['login_error']="<h5 class='text-danger'>Please enter correct credentials</h5>";
          header("Location:../login/");
          }

}

?>

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

				<form class="login100-form validate-form" method="post">

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
						<select class="form-control text-center text-secondary font-weight-bold" name="position">
							<option value="helper">Helper</option>
							<option value="administrator">Administrator</option>
						</select>

					</div>
					<br>
					<div class="wrap-input100 validate-input" data-validate = "Username/Email is required">
						<input class="input100" type="text" name="mail" placeholder="Enter Username or Email">
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
            <?php
            if(isset($_SESSION['login_error'])){
  							echo $_SESSION['login_error'];
  						}
            ?>

						<button class="login100-form-btn" name="login">
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
