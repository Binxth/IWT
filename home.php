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
  <a class="active" href="home.php">Home</a>
      <a href="content.php">Contents</a>
      <a href="payment.php">Pricing</a>
      <a href="aboutus.php">About Us</a>
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

<!-- Slider -->

<div >
    <img id="sliderImage" src="images/homeimg1.jpg">
    <button class="nxtBtn" onclick="next(1)">&#10094;</button>
    <button class="prevBtn" onclick="next(2)">&#10095;</button>
</div>
<br>
<!--End of Slider -->


<div style="margin:auto;width: 50%; margin-bottom: 150px">
<center>
<h1 style="color: dodgerblue">Get started as..</h1>


<div style="width: 32%;  float: left  ">
<a href="#teacher" target="_self"> <img src="images/teacher.png" style="width:50px;height:50px;" ></a>
<br>
<p>Register as a <br>Primary Teacher</p>
</div>

<div style="width: 35%; float: left">
<a href="#teacher" target="_self"> <img src="images/teacher.png" style="width:50px;height:50px;" ></a>
<br>
<p>Register as a <br>High School Teacher</p>
</div>

<div style="width: 30%; float: left ">
<a href="#trainer" target="_self"> <img src="images/trainer1.png" style="width:50px;height:50px;" ></a>
<br>
<p>Register as a <br>Trainer</p>
</div>

</center>
</div>

<br>
<div style="margin:auto;width: 25%; margin-top: 20px">
    <center>
    <img src="images/headtrainer.jpg" style="width:75px;height:75px;" >
    </center>
    <h4 style="text-align: center">Message from the Head Trainer</h4>
    <p>Our Online teacher trainer has been the most advanced online training platform for teachers who are seeking to get better in their teaching skills. You will be learning new teaching techniques alongside subject materials ! </p>
</div>


<br>
<div style="width: 100%; margin-top: 50px;margin-bottom: 350px ">
    <center><h2 style="color: dodgerblue">Our Trending Courses</h2></center>
    <center>
    <div class="courses">
    <a href="#course1" target="_self"> <img src="images/course5.jpg" class="courseimage" ></a>
    </div>

    <div class="courses">
    <a href="#course2" target="_self"> <img src="images/course2.jpg" class="courseimage"></a>
    </div>

    <div class="courses">
    <a href="#course3" target="_self"> <img src="images/course1.jpg" class="courseimage" ></a>
    </div>

    <div class="courses">
    <a href="#course4" target="_self"> <img src="images/course4.jpg" class="courseimage" ></a>
    </div>

    <div class="courses">
    <a href="#course5" target="_self"> <img src="images/course3.jpg" class="courseimage" ></a>
    </div>
    </center>
    <br>
</div>

<center>
<div style="margin:auto; width:100%; margin-bottom: 150px;   ">

<div style="width: 20%; float: left; margin-bottom: 100px;margin-left:150px ">
<h3>Reviews of Teachers who <br>completed courses at our <br>online teacher Trainer</h3>
</div>
<div style="width: 70%; float: left;">
<div class="reviews">
<p>Teacher : Amy</p>
<p>This site helped me a lot in gaining experience on online teaching</p>
</div>
<div class="reviews">
<p>Teacher : Jake</p>
<p>I learnt many new teaching techniques from this site.</p>
</div>
<div class="reviews">
<p>Teacher : Charles</p>
<p>I was able to get so much teaching materials through this site!</p>
</div>
</div>

</div>
</center>



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

</body>
</html>
