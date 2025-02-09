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
     $inquiry = mysqli_real_escape_string($con, $_POST['inquiry']);
     $message = mysqli_real_escape_string($con, $_POST['message']);
     

     //if($emailcount>0) 
       // {
         
        //}
     
     
         
            $insertquery = "insert into query( name, email, inquiry, message ) 
             values('$name','$email','$inquiry','$message')";
             

             $iquery = mysqli_query($con, $insertquery);

             if($iquery){
                ?>
                <script>
                    alert(" done");
                </script>
             <?php
             }
             else {
                 ?>
                     <script>
                         alert(" Please try again.");
                     </script>
                  <?php   
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

    <!-- Main css -->
    <link rel="stylesheet" href="css/signstyle.css">
    <link rel="stylesheet" type="text/css" href="css/login2.css">
</head>
<body>

<form id="contact-form" action="" method="POST" class="tm-contact-form" onsubmit="return validate()">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control rounded-0" placeholder="Full Name" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="contact-select" name="inquiry">
                                <option value="order">Order Related</option>
                                <option value="product">Product Related </option>
                                <option value="payment">Payment Related</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required></textarea>
                        </div>

                        <div class="form-group tm-text-right">
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>