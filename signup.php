<?php

$msg="";
$msg2="";

if(isset($_POST['submit']))
{


 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $rePass=$_POST['Repass'];
 $mNum=$_POST['Mnum'];
 $sch=$_POST['sch'];
 $payment=$_POST['payment'];
 $RegisterAs=$_POST['RegisterAs'];
 $agreement1=$_POST['agreement1'];
 
 

$pass = trim($pass);
$rePass = trim($rePass);


$hashed_pass = sha1($pass);

require 'config.php';

$stmt = $con->prepare("INSERT INTO user (fname,lname,email,pass,Mnum,sch,payment,RegisterAs,agreement1) VALUES (?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssss", $fname, $lname, $email,$hashed_pass,$mNum,$sch,$payment,$RegisterAs,$agreement1);

        

if($stmt->execute() == TRUE)
{
    $msg="Your Registration Details Received Successfully";
    $msg2="Please Wait...Redirecting to the login page";
    header('refresh:4; url=loginTeacher.php');
    
}



$stmt->close();
$con->close();
}
?>



<!DOCTYPE html>
<html>
<head>
<title>BCC Online Teacher Trainer</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/headerfooter.css">   
<link rel="stylesheet" type="text/css" href="style/signup.css">

<script src="script/signup.js"></script>

</head>
<body>

<div class="header">
  <a href="#default"></a>
  <div class="header-left">
  <a href="home.php">Home</a>
      <a href="content.php">Contents</a>
      <a href="payment.php">Pricing</a>
      <a href="aboutus.php">About Us</a>
      <a class="active" href="contactus.php">Contact Us</a>
      <a href="myAccount.php">My Account</a>
      <a style="background-color: red;" class="active" href="TrainerAccount.php">Trainer Dashboard</a>
      
      <input class="search" type="text" placeholder="  search here">

      <a class="regbutton" href="signup.php">Register</a>
      <a class="logbutton" href="loginTeacher.php">Login</a>
      <img class="logpic" src="images/usericon.png">    
  </div>
</div>


<br> 
    
<div class="Hbanner">
    <br>
    <h1> Sign Up Here </h1>
    
    
    <h3 style="margin-left: 750px; margin-top: -10px; color:#1e90ff;"> <?php echo $msg; ?></h3>

    </div>
    <h3 style="margin-left: 770px; margin-top: 10px; color:red;"> <?php echo $msg2; ?></h3>
    <br>
    <div style="margin-left: 20px;width: 10%; margin-top: 10px">
    
    <img src="images/logo2.png" style="width:120px;height:120px;" >
    
    
    
</div>
   
    <h4 style=" margin-left: 140px; margin-top: -60px;">Create Your BCC Teacher Training Account</h4>
    


    
    <img src="images/signUpIMG.png" style="width: 900px;height: 570px; position: absolute; right: 30px;">
 
<br>
    
    
    <div style="margin-left: 40px;">
        <!-- <form onsubmit="return submitted(this);"> -->
        <form action="signup.php" method="POST">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" placeholder="Enter First Name" required>
<br>
<br>
    
    <label for="lname" >Last Name:</label><br>
    <input type="text"  id="lname" name="lname" placeholder="Enter Last Name" required>
<br>    
<br>
    
    <label for="email">E-mail address:</label><br>
    <input type="email" id="email" name="email" placeholder="Enter E-mail Address" size="35" required>
        
<br>    
<br>
        
    <label for="pass">Password:</label><br>
    <input type="password" id="password" name="pass" placeholder="Enter Password" required>
<br>    
<br>
    
 
    <label for="Repass" >Confirm Password:</label><br>
    <input type="password"  id="rePassword" name="Repass" placeholder="Re-enter the Password" onkeyup="passwordTypeCheck()" required>
<br>    
<br>
    
    <label for="Mnum">Mobile Number:</label><br>
    <input type="text" id="Mnum" name="Mnum" placeholder="+94 7X XXXX XXX" required>
<br>    
<br>
        
    <label for="sch">Currently Teaching School ( Optional ):</label><br>
    <input type="text" id="sch" name="sch" placeholder="School/College/Institute">
<br>    
<br>
    
    <label for="payment" style="color:red">Payment Reference Number:</label><br>
    <input type="text" id="payment" name="payment" placeholder="BCC-XXX-XXXX-XX" required>
<br>    
<br>
        
    Register As, <br><br>
        
    <input type="radio" id="PreschoolTeacher" name="RegisterAs" value="PreschoolTeacher" required>
    <label for="PreschoolTeacher">Preschool Teacher</label><br>
        
    <input type="radio" id="PrimaryTeacher" name="RegisterAs" value="PrimaryTeacher" required>
    <label for="PrimaryTeacher">Primary Teacher</label><br>
        
    <input type="radio" id="OLAL" name="RegisterAs" value="OLAL" required>
    <label for="OLAL">Ordinary Level or Advanced Level Teacher</label><br>
        
    <input type="radio" id="Lecturer" name="RegisterAs" value="Lecturer" required>
    <label for="Lecturer">Lecturer</label><br>
        
    <input type="radio" id="ContentWriter" name="RegisterAs" value="Trainer" required>
    <label for="Trainer">Trainer</label><br>
        
    <br><br>
    
    <input type="checkbox" id="agreement1" name="agreement1" value="agreement1" >
    <label for="agreement1"> Sign me up for the BCC Acedemy Weekly Newsletter.</label>

<br>    
<br>
    <input type="checkbox" id="terms_and_conditions" value="1" onclick="terms_changed(this)" required>
    <label for="agreement2"> I Agree to BCC Teacher Training Academy's Terms & Conditions.</label>

<br>    
<br>


    
          <!--  <input type="submit" id="submit_button" onclick="submitAlert()" name="signuped" disabled = "true" class="button">-->
            <input type="submit" id="submit_button" name="submit"  class="button">
        </form>
    </div>

    
    <br> 
    <br> 


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
