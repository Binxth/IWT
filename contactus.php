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
      <a href="aboutus.php">About Us</a>
      <a class="active" href="contactus.php">Contact Us</a>
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
    
    <div style = "width: 100%;overflow: hidden;background-color:dimgrey;margin: auto; margin-bottom:20px ">
    <center>
    <h1 style="color: aliceblue" >CONTACT US</h1>
    </center>   
    </div>    
        
        
        <div class="contactus">
            
                <img class="contactimg" style="padding-left:400px;" src="images/phone.jpg">
                <img class="contactimg" style=padding-left:260px; src="images/email.png">
                <img class="contactimg" style=padding-left:275px; src="images/location.svg"><br>
            <a style= "padding-left: 330px;">Ring - 1-800-243-0000</a>
            <a style= "padding-left: 90px;"> E-mail-contact@bccacedemy.edu.com</a>
            <a style= "padding-left: 40px;">Location - Torrinton road, Colombo 7</a><br><br><br><br><br>
        
            
            
    <div class="contactform"><br>
    <table>
            <tr>
            <td>
            <label for= "username";>Name(Required)   </label>
            </td>
            <td>
            <input type="text" id="username" placeholder="Name" class="input-design" >
            </td>
            </tr>
            
            <tr>
            <td>
            <label for= "email";>Email(Required)   </label>
            </td>
            <td>
            <input type="text" id="subject" placeholder="Email" class="input-design">
            </td>
            </tr>
        
            <tr>
            <td>
            <label for= "subject";>Subject   </label>  
            </td>
            <td>
            <input type="text" id="username" placeholder="Subject" class="input-design">
            </td>
            </tr>
        
            <tr>
            <td>
            <label for= "message";>Your message</label>
            </td>
            <td>
            <textarea id="message" name="your message" rows="20" cols="50" class="input-design"> 
            </textarea>
            </td>
            </tr>
            
            <tr>
            <td>
            <p>Are you already a customer?</p>
            </td>
            <td>
            <input type= "radio" id="yes" name="check" value="yes" >
            <label for="yes"> Yes</label>
            <input type= "radio" id="no" name="check" value="no">
            <label for="No"> No</label>
            </td>
            </tr>
            <tr><td><input type="submit" value="send" id="submit" class="input-payreset" onclick="myFunction()"/></td></tr>
            
            </table>
</div>
        </div>
        

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
