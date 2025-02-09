<?php
session_start();

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";

$con = new mysqli($host, $dbusername, $dbpassword, $dbname);


if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($con, $_POST['email']);
$pswd = mysqli_real_escape_string($con, $_POST['pswd']);

$_SESSION["status"] = false;

if(!empty($email) && !empty($pswd) ){

  $query = "select * from sign2 where email = '$email' AND pswd = '$pswd'";
  $result = mysqli_query($con, $query);
   
  if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['pswd'] === $pswd)
					{
            $_SESSION["status"] = true;
						header("Location: index.php");
						die;
					}
				}
			}
			
      ?>
             <script>
                 alert("Wrong email or Password");
             </script>
          <?php 
			
		}else
		{
      ?>
      <script>
          alert("Wrong email or Password");
      </script>
   <?php 
		}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sand-Dollar-Selling-Login</title>
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
	<link rel="stylesheet" type="text/css" href="css/login2.css">
	<link rel="stylesheet" type="text/css" href="css/login1.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Welcome Back !
					</span>
				</div>

				<form class="login100-form validate-form" action="login.php" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100" style="margin-left:-20px;"><b>Email</b></span>
						<input class="input100" type="email" name="email" placeholder="Enter Email" />
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100"><b>Password</b></span>
						<input class="input100" type="password" name="pswd" placeholder="Enter Password" />
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn" >
						<button class="login100-form-btn" name="submit">
							<b>LOGIN <i class="fas fa-sign-in-alt"></i></b>
						</button>
						
					</div>
					
					<a href="index.php"  style="text-decoration: none;" >
						<div style="width:150px;height: 50px;border-radius: 30px;background: #57b846;
						font-family: 'Poppins';font-weight: 400;font-size: 16px; margin-left:130%;margin-top:-32%;padding:5px;  
						color: #fff;text-align: center; ">
					   <b>HOME <i class="fa fa-home"></i></b></div></a>
					   
				</form>
				<div style="text-align:center;margin-top:-50px;color:red;">
						Don't have an account? <a href="sign.php"><button style="background-color:#ff9999;width:100px;margin-bottom:5px;"><b>Sign Up 
						<i class="fas fa-user-plus"></i>
						</b></button></a>
				</div>
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
	<script src="js/main1.js"></script>

</body>
</html>