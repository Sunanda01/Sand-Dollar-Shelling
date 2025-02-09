<?php
session_start();

$server = "localhost";
$user = "root";
$password = "";
$db = "project";

$con = mysqli_connect($server,$user,$password,$db);
if(!$con) {
    echo "Connection Unsuccessful";
}


if(isset($_POST['submit'])){

     $name = mysqli_real_escape_string($con, $_POST['name']);
     $email = mysqli_real_escape_string($con, $_POST['email']);
     $phone = mysqli_real_escape_string($con, $_POST['phone']);
     $dob = mysqli_real_escape_string($con, $_POST['dob']);
     $gender = mysqli_real_escape_string($con, $_POST['gender']);
     $addr = mysqli_real_escape_string($con, $_POST['addr']);
     $pswd = mysqli_real_escape_string($con, $_POST['pswd']);
     $cpswd = mysqli_real_escape_string($con, $_POST['cpswd']);

     $emailquery = " select * from sign2 where email= '$email' ";
     $query = mysqli_query($con, $emailquery);

     $emailcount = mysqli_num_rows($query);

     

     if($emailcount>0) {
         ?>
         <script>
             alert("Email already exists.");
         </script>
      <?php 
     }
     
     else {
         if($pswd === $cpswd){
            $insertquery = "insert into sign2( name, email, phone, dob, gender, addr, pswd, cpswd) 
             values('$name','$email','$phone','$dob','$gender','$addr','$pswd', '$cpswd')";
             

             $iquery = mysqli_query($con, $insertquery);

             if($iquery){
                    header('location: login.php');  
             }
             else {
                 ?>
                     <script>
                         alert("Sign Up failed. Please try again.");
                     </script>
                  <?php   
          }
         }
         else {
             ?>
             <script>
                 alert("Passwords are not matching");
             </script>
          <?php 
         }
     }    
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sand-Dollar-Shelling-signup</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <!-- Main css -->
    <link rel="stylesheet" href="css/signstyle.css">
    <link rel="stylesheet" type="text/css" href="css/login2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="sign.php" onsubmit="return validate()">
                        <h2><u>Welcome To Our Family !</u></h2>
                        <div class="form-group">
                            <label for="name">Name :</label>
                            <input type="text" name="name" id="name" placeholder="Name" />
                        </div>
                            <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label for="mob">Mobile Number :</label>
                            <input type="text"  name="phone" id="phone" placeholder="Phone Number" maxlength="10" required />
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Date Of Birth :</label>
                            <input type="date" name="dob" min="1980-01-01" max="2008-12-31" id="dob" placeholder="Date of Birth" required />
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div>
                                <select name="gender" id="gender" required> 
                                <option >Female</option>
                                <option >Male</option>
                                <option >Transgender</option>
                                <option >Prefer Not to say</option>
                                </select>
                            </div>
                        </div>      
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" class="textarea" name="addr" id="addr" placeholder="Enter Your Address" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required" >
                            <input type="password" name="pswd" id="pswd" placeholder="Password" maxlength="5" />                              
                                <span class="focus-input100" style="color:red;margin-left:10px;">Enter 5 characters!!!!!!!!</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password :</label>
                            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required" >
                            <input type="password" name="cpswd" id="cpswd" placeholder="Re-enter Password" maxlength="5" />
                                <span class="focus-input100"></span>
                            </div>
                            
                        </div>                    
                            <div class="form-submit">
                            <a href="index.php" class="submit" id="submit" style="display: inline;text-decoration: none;">Home <i class="fa fa-home"></i></a>
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" /> 
                            
                        </div>
                        </form>                 
                    <div style="margin:auto;text-align:center;">
                    <p>
                        By clicking the Sign Up button,you agree to our <br />
                        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
                    <div> Already have an account?</p> <a href="login.php"><button class="submit">Login here <i class="fas fa-sign-in-alt"></i></button></a></div>
                </div>
        </div>
    </div>
        </div>
        </div>
    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>