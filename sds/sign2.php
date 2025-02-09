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
    <title>Sign Up</title>
    <link rel="stylesheet" href="logincss.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"rel="stylesheet"/>
  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>It's free and only takes a minute</h4>
      <form class="signup" action="sign2.php" method="post" onsubmit="return validate()">
        <label>Name</label>
        <input type="text" name="name" id="name" placeholder="Name" />
        <label>Email</label>
        <input type="email" name="email" id="email" placeholder="Email" />
        <label>Phone Number</label>
        <input type="text"  name="phone" id="phone" placeholder="Phone Number" maxlength="10" required />
        <label>Date of Birth</label>
        <input type="date" name="dob" min="1980-01-01" max="2008-12-31" id="dob" placeholder="Date of Birth" required />
        <label>Gender</label>
        <div>
          <select name="gender" id="gender" required> 
            <option >Female</option>
            <option >Male</option>
            <option >Transgender</option>
            <option >Prefer Not to say</option>
          </select>
        </div>

        <label>Address</label>
        <input type="text" class="textarea" name="addr" id="addr" placeholder="Enter Your Address" required>
        <label>Password</label>
        <input type="password" name="pswd" id="pswd" placeholder="Password" />
        <label>Confirm Password</label>
        <input type="password" name="cpswd" id="cpswd" placeholder="Confirm Password" />
        <div style="text-align: center;"><button name="submit" id="submit">Sign Up</button></div>
      </form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>
  </body>
</html>