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
    <title>Login</title>
    <link rel="stylesheet" href="logincss.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    
  </head>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form class="login" action="log.php" method="post">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" />
        <label>Password</label>
        <input type="password" name="pswd" placeholder="Password" />
        <div style="text-align: center;"><button name="submit" id="submit">Login</button></div>
      </form>
    </div>
    <p class="para-2">
      Don't have an account? <a href="sign.php">Sign Up Here!</a>
    </p>
  </body>
</html>