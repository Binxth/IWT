<?php
session_start();

$errors="";


//check for form submission

if (isset($_POST['login']))
{
    $errors= array();

    if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1)
    {
       $errors[]='Username is missing or Invalid'; 
       
       echo "<script>console.log('Um in');</script>";
       

    }

    if (!isset($_POST['pass']) || strlen(trim($_POST['pass'])) < 1)
    {
       $errors[]='Invalid Password'; 
       

    }
 
    require 'config.php';
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass = sha1($pass);


    $sql = "SELECT * FROM user WHERE email = '{$email}' AND pass ='{$pass}'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            $_SESSION['loggedin'] = TRUE ;
            $_SESSION['userid'] = $row['userID'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['fname'] = $row['fname'];

            header("location:myAccount.php");
            $msg3="Please Wait...Redirecting to the My Account Page";



        }
    } 
    else 
    {
        $errors="Invalid Login. Please check the email & Password";
    }

    $connection->close();

}

?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/headerfooter.css">
</head>
<body>

<div class="header">
  <a href="#default"></a>
  <div class="header-left">
  <img class="logo" src="images/logo2.png">
  <a class="active" href="home.php">Home</a>
      <a href="content.php">Contents</a>
      <a href="payment.php">Pricing</a>
      <a href="aboutus.php">About Us</a>
      <a href="contactus.php">Contact Us</a>
      <a href="myAccount.php">My Account</a>
      
      <input class="search" type="text" placeholder="  search here">

      <a class="regbutton" href="signup.php">Register</a>
      <a class="logbutton" href="loginTeacher.php">Login</a>
      <img class="logpic" src="images/usericon.png">
  </div>
</div>
<h4 style="margin-left: 750px; margin-top: 10px; color:red;"> <?php echo $errors ?></h4> 

<div class="form-container">
    <div  class="body" style="padding:50px; text-align: center" >
    <h1>LOG IN <img class="logimg" src="images/login.jpg" alt="login"style="width:40px;height:40px;"></h1>
   
    <a  class="teacher" href="loginTeacher.php">Teacher</a>
    <a class="active"href="loginTrainer.php">Trainer</a><br><br><br>
<form action="loginTeacher.php" method="POST">
    <input type="text" name="email"placeholder="Enter Trainer's Email"><br><br>
    <input type="password" placeholder="Enter Password" name="pass"> <br><br>
    <input type="checkbox" name="remember">Remember me<br><br>
    <button class="active" name="login">Log In</button>
</form>
    </div>
    </div>
    <br><br><br><br>
    
<!--Footer-->        
      <div class="footer">
	<div class="containerPostNew">
    
			<div class="boxEditPostNew">
			<div class="verticalBar"></div>
			<img src="images/footerLogo.png" style="width:150px;height:150px;">
			<h4>BCC Teacher Training Acedemy</h4>	
			</div>
			
			<div class="boxEditPostNew">
			<div class="verticalBar"></div>
			<br><br><contact>1-800-243-0000 <br> contact@bccacedemy.edu.com</contact>
			<br><br><br>
			<img src="images/payment.png" style="width:300px;height:50px;">			
			</div>
			
			<div class="boxEditPostNew">
			 <h3>Follow Us On</h3>
             
			<a href="https://facebook.com" target="_blank"> <img src="images/facebook.png" style="width:25px;height:25px;" ></a>
            <a href="https://twitter.com" target="_blank"><img src="images/twitter.png" style="width:25px;height:25px;"></a>
            <a href="https://www.instagram.com/channuka.d/" target="_blank"><img  src="images/instagram.png" style="width:25px;height:25px;"></a>
            <a href="https://linkedin.com" target="_blank"><img src="images/linkedin.png" style="width:25px;height:25px;"></a>
		      <br>
            <img class="QR" src="images/QR.png" style="width:70px;height:70px;">
		      <br>
            <a href="https://www.apple.com/ios/app-store/" target="_blank"><img  src="images/ios.png" style="width:100px;height:32px;"></a>
            <a href="https://play.google.com/store?hl=en" target="_blank"><img src="images/android.png" style="width:100px;height:32px;"></a>			
			</div>
      </div>	
</div>
<!--JavaScript
        <script>
            function myFunction() {
            alert("Log in successful");
            }   
        </script>-->
    
    
    
    
</body>
</html>
