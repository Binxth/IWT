<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
<title>BCC Online Teacher Trainer</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/headerfooter.css">
<script src="script/javascript.js"></script>
</head>
<body>

<div class="header">
  <a href="#default"></a>
  <div class="header-left">
  <img class="logo" src="images/logo2.png">
  <a href="home.php">Home</a>
      <a href="content.php">Contents</a>
      <a href="payment.php">Pricing</a>
      <a class="active" href="aboutus.php">About Us</a>
      <a href="contactus.php">Contact Us</a>
      <a href="myAccount.php">My Account</a>
      
      <input class="search" type="text" placeholder="  search here">

      <!--<a class="regbutton" href="#register">Register</a>
      <a class="logbutton" href="#login">Login</a>-->

      <?php 
      /////////////////////////////////////////////////////////////////////////////////////

      if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) //if loggdin
      {
        //disappear reg button
      }
      else
      {
        echo '<a class="regbutton" href="signup.php">Register</a>';
      }

      

      if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) //if loggdin
      {
        echo '<a class="logbutton" href="logout.php">Logout</a>';
      }
      else
      {
        echo '<a class="logbutton" href="loginTeacher.php">Login</a>';
      }
      /////////////////////////////////////////////////////////////////////////////////////
      ?>

      <img class="logpic" src="images/usericon.png">    
  </div>
</div>
    
    <div style = "width: 100%;overflow: hidden;background-color:skyblue;margin: auto; margin-bottom:20px ">
    <center>
    <h1 style="color: aliceblue" >ABOUT US</h1>
    </center>   
    </div>  
    
        <h1 style="padding-left: 100px"style="padding-bottom: 500px">WHO<br> WE<br> ARE</h1>
    <div style="padding-left: 100px">
    
        <p style="line-height: 2.0">Welcome to the BCC Teacher Training Academy. The number one source for all the teachers around the world. It does not matter whether you are an amature to teaching,<br> <b>WE</b> are dedicated to giving you our very best of service with a focus on new teaching techniques,<br> new materials every week and many more. BCC has come a long way from its beginnings in 2018<br> and that experience and qualifications has helped us to provide you the best techniques togather with<br>the best trainers around the world.<br><br>Also if you are a qualified trainer, we have provide you the chance to be a part of our team and share your knowledge.<br> We hope you enjoy our content as much as we enjoy offering them to you. If you have any questions or comments,<br> please don't hesitate to contact us.<br><br>

Sincerely,<br>
            <b>BCC team</b></p> </div>
    
        <img src="images/about%20us.png" style="padding-left: 750px">;
        
    
        

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
            <!--JavaScript--> 
        <script>
            function myFunction() {
            alert("Your feedback is submitted successfully!");
            }   
        </script>

</body>
</html>
