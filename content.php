<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) //checks the login
{
  //stay
}
else
{
  header("location:loginTeacher.php");
}


?>

<!DOCTYPE html>
<?php 
    require'config.php';
    if(isset($_GET['moduleCode'])){
        $moduleCode = $_GET['moduleCode'];
    }
    else{
        $moduleCode = 'default';
}  
?>

<html>
<head>
<title>BCC Online Teacher Trainer</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/headerfooter.css">   
<link rel="stylesheet" type="text/css" href="style/signup.css">
<link rel="stylesheet" type="text/css" href="style/content.css">
<script src="script/javascript.js"></script>
<script src="script/signup.js"></script>

</head>
<body>

<div class="header">
  <a href="#default"></a>
  <div class="header-left">
  <img class="logo" src="images/logo2.png">
  <a href="home.php">Home</a>
      <a class="active" href="content.php">Contents</a>
      <a href="payment.php">Pricing</a>
      <a href="aboutus.php">About Us</a>
      <a href="contactus.php">Contact Us</a>
      <a href="myAccount.php">My Account</a>
      <a style="background-color: red;" class="active" href="TrainerAccount.php">Trainer Dashboard</a>
      
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


<br> 
    
<div class="Contentbanner">
    <br>
    <h1> Contents </h1>
    </div>
    <br>

    <h2 style=" margin-left: 40px;">POPULAR MODULES</h2>
    <br>
    <ul>
        <li><a class="" href="content.php?moduleCode=1">Module A</a></li>
        <li><a class="" href="content.php?moduleCode=2">Module B</a></li>
        <li><a class="" href="tipslisted.php">Teaching Tips</a></li>
      </ul>

      <input type="text" placeholder="  Search.." class="contentSearch">
<br><br><br>
    
<?php
    //if user selects 1st module
    if ($moduleCode=="default" ||$moduleCode==1 ){
        
        
        
        $sql ="SELECT videoID, caption, description,moduleCode,file FROM video WHERE moduleCode=1";
		$result = $con->query($sql);
        
        echo "<h2 style='margin-left:500px;'>Videos</h2>";
        
        if ($result -> num_rows > 0)	{

			while ($row = $result -> fetch_assoc())	{
        

      echo "<div style='float:left; width:40%;margin-left:100px;'>
            <video width='280' height='180' controls>
            <source src='".$row['file']."' alt='video'>
            Your browser does not support the video tag.
             </video>
			<h4>".$row['caption']."</h4>
			<p>".$row['description']."</p>
			</div>
             "; 
            }
        }
    
    
        $sql ="SELECT tuteID, caption, description,moduleCode,file FROM tutorials WHERE moduleCode=1";
        $result = $con->query($sql);
        echo "<h2 style='margin-top:50px;margin-left:500px;float:left;width:100%'>Tutorials</h2>";
        
        if ($result -> num_rows > 0)	{

			while ($row = $result -> fetch_assoc())	{
        

      echo "<div style='float:left; width:40%; margin-left:100px;'>
            <a href ='".$row['file']."' alt='ad image'><img src='images/pdfs-512.png' height ='75px' width='60px'> </a>
            <h4>".$row['caption']."</h4>
			<p>".$row['description']."</p>
			</div>
            <br>";
            }
        } 
    }
    
    
    //if user selects second module
    elseif($moduleCode=="2") {
        echo "<h2></h2>";
        
        $sql ="SELECT videoID, caption, description,moduleCode,file FROM video WHERE moduleCode=2";
		$result = $con->query($sql);
        echo "<h2 style='margin-left:500px;'>Videos</h2>";
        
        if ($result -> num_rows > 0)	{

			while ($row = $result -> fetch_assoc())	{
        

      echo "<div style='float:left; width:40%;margin-left:100px;'>
            <video width='320' height='240' controls>
            <source src='".$row['file']."' alt='video'>
            Your browser does not support the video tag.
             </video>
			<h4>".$row['caption']."</h4>
			<p>".$row['description']."</p>
			</div>
             <br>";
            }
        }
          
                $sql ="SELECT tuteID, caption, description,moduleCode,file FROM tutorials WHERE moduleCode=2";
                $result = $con->query($sql);
        echo "<h2 style='margin-top:50px;margin-left:500px;float:left;width:100%'>Tutorials</h2>";
                
                if ($result -> num_rows > 0)	{

			while ($row = $result -> fetch_assoc())	{
        

              echo "<div style='float:left; width:40%;margin-left:100px;'>
                <a href ='".$row['file']."' alt='ad image'><img src='images/pdfs-512.png' height ='75px' width='60px'> </a>
                <h4>".$row['caption']."</h4>
                <p>".$row['description']."</p>
                </div>
                <br>";
                }
             }
    }
    
$con->close();

     ?>


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
