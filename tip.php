
<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true && $_SESSION["RegisterAs"] == "Trainer") //if loggdin
{
 
  //stay
}
else
{
  header("location:loginTrainer.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>BCC Online Teacher Trainer</title>
<link rel="stylesheet" type="text/css" href="style/uploadcontent.css">
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
      <a href="contactus.php">Contact Us</a>
      <a href="myAccount.php">My Account</a>
      <a style="background-color: red;" class="active" href="TrainerAccount.php">Trainer Dashboard</a>
      
      <input class="search" type="text" value="  search here">

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

<div class="upload-header">
 <div style="text-align: center">
  <h1 style="color: white">Upload Content</h1>
  </div> 
</div>
<br> 

<div class="div-upload">

<div class="content-box">
	
		    <h2 align="center">Choose Content Type</h2>
				<div class="select-cat">
					<table align="center">
						<tr>
							<th>		
								<ul class="ul">
									<center>
									<div class="cat">
										<li><a href="uploadcontents.php">Videos</a></li>
									</div>
									</center>
								</ul>
							</th>
			
							<th>		
								<ul class="ul">
									<center>
									<div class="cat">
										<li><a href="tutorials.php">Tutorials</a></li>
									</div>
									</center>
								</ul>
							</th>
                            <th>		
								<ul class="ul">
									<center>
									<div class="cat">
										<li><a href="tip.php">Teaching Tips</a></li>
									</div>
									</center>
								</ul>
							</th>
						<tr>
					</table> 
        </div>	

<div style="width: 75%;margin: auto; margin-top: 25px ">
<center>
<h2 style="color: darkslategray">Upload Teaching tips and tricks</h2>
<form action="tips.php" method="post" enctype="multipart/form-data">

    <label for="caption">Enter a Caption</label><br>
  <input type="text" id="caption" name="caption" style="width: 400px" class="input-design" ><br><br>
  
  <label for="description">Enter the description</label><br>
  <textarea id="description" name="description" rows="4" cols="60" class="input-design"></textarea><br><br>
<br>
    

  <label for="myfile">Select files:</label><br>
  <input type="file" id="myfile" name="file" multiple class="input-design"><br><br>
  <input type="submit" name="submit" class="submit">
</form>
</center>
</div>

</div>
</div>
    
<br>

<!--footer-->
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
