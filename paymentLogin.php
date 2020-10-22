<?php
require 'config.php';
session_start();
echo $_SESSION['userID'];
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) //if loggdin
{
  //stay
}
else
{
  
  header("location:loginTeacher.php");
}

$userID=$_SESSION['userID'];




if(isset($_POST['login']))
{
    
    //$newPIN = "";

    $sql = "SELECT pin FROM payment WHERE userID = '{$userID}'";
    $result = $con->query($sql);

    $Npin=$_POST['Npin'];
    

    

    


    if ($result->num_rows > 0) 
    {
        // output data of each row
        $row = $result->fetch_assoc();
        
            $pin = $row['pin'];
            

            if($pin == $Npin)
            {
                header('refresh:1; url=paymentAccount.php');
            }
           else
           {
            echo "<script> alert('You have entered the wrong PIN')</script>";
            header('refresh:1; url=payment.php');
           }


            //header('refresh:3; url=myAccount.php');




        
    } 
    else 
    {
        $errors="Invalid Login. Please check the email & Password";
        echo "wrong pin";
    }
    
    $con->close();

}

else
{
    //////////////////////////
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
      <a style="background-color: red;" class="active" href="TrainerAccount.php">Trainer Dashboard</a>
      
      <input class="search" type="text" placeholder="  search here">

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
        //header("location:loginTeacher.php");
        echo '<a class="logbutton" href="loginTeacher.php">Login</a>';
      }
      /////////////////////////////////////////////////////////////////////////////////////
      ?>
      
      <?php 
      /////////////////////////////////////////////////////////////////////////////////////

      if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) //if loggdin
      {
        echo '<img class="logpic" src="images/usergif.gif">';
      }
      else
      {
        echo '<img class="logpic" src="images/usericon.png">';
      }

      /////////////////////////////////////////////////////////////////////////////////////
      ?>
  </div>
</div>
   
<!--<h4 style="margin-left: 750px; margin-top: 10px; color:red;"> <?php echo "$errors"; ?></h4>
<h3 style="margin-left: 860px; margin-top: 10px; color:#1e90ff;"> <?php echo "$msg4"; ?></h3>
<h3 style="margin-left: 750px; margin-top: 10px; color:#1e90ff;"> <?php echo "$msg3"; ?></h3>
<h3 style="margin-left: 750px; margin-top: 10px; color:#1e90ff;"> <?php echo "$errorMsg4"; ?></h3>
<icon style="margin-left: 850px; margin-top: -10px;"><?php echo $icon; ?></icon>-->


<div class="form-container">
    <div  class="body" style="padding:50px; text-align: center" >
    
    <h1>Payment Login</h1>
   
    <a  class="active">Enter Your 4 Digit PIN</a>
    <br><br><br>
<form action="paymentLogin.php" method="POST">
    <label style="margin-left: -90px;">Security PIN</label><br>
    <input type="password" placeholder="Enter Your PIN" name="Npin"> <br><br>
    <button class="active" name="login">Get Access</button>
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
    
    
    
    
</body>
</html>
