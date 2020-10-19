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
      <a class="active" href="#home">Home</a>
      <a href="#study">Study Area</a>
      <a href="#content">Contents</a>
      <a href="#pricing">Pricing</a>
      <a href="#about">About Us</a>
      <a href="#contact">Contact Us</a>
      
      <input class="search" type="text" value="  search here">

      <a class="regbutton" href="#register">Register</a>
      <a class="logbutton" href="#login">Login</a>
      <img class="logpic" src="images/usericon.png">    
  </div>
</div>

<div class="upload-header">
 <div style="text-align: center">
  <h1 style="color: white">Edit Content</h1>
  </div> 
</div>
<br> 

<div class="div-editcontent">

<div class="edit-content-box">
	
		    <h2 align="center">Edit content</h2>	

<div style="width: 90%;margin: auto; margin-top: 25px ">

    <?php
		require'config.php';

		$sql ="SELECT videoID, caption, description,moduleCode,file FROM video";
		$result = $con->query($sql);
        echo '<h2>Edit Videos</h2>';

		if ($result -> num_rows > 0)	{

			while ($row = $result -> fetch_assoc())	{
				echo "<div>
                
                                <video width='320' height='240' controls>
                                  <source src='".$row['file']."' alt='video'>
                                  Your browser does not support the video tag.
                                </video>
								<h4>".$row['caption']."</h4>
								<p>".$row['description']."</p>
                                <p>Module : ".$row['moduleCode']."</p>
                                <a href='editvideo.php?videoID=".$row['videoID']."'><button class='bttn'>Edit</button></a>
                                <a href='deleteVideo.php?videoID=".$row['videoID']."'><button class='bttn'>Delete</button></a>
						</div>
                        <br>";
			}
		}
		else {
			echo"no results";
		}
    $con->close();

		?>
    
    
    
     <?php
		require'config.php';

		$sql ="SELECT tuteID, caption, description,moduleCode,file FROM tutorials";
		$result = $con->query($sql);
        echo '<h2>Delete Tutes</h2>';

		if ($result -> num_rows > 0)	{

			while ($row = $result -> fetch_assoc())	{
				echo "<div>
						<a href ='".$row['file']."' alt='ad image'><img src='images/pdfs-512.png' height ='75px' width='60px'> </a>
                        
								<h4>".$row['caption']."</h4>
								<p>".$row['description']."</p>
                                <p>Module : ".$row['moduleCode']."</p>
                                <a href='deleteTutorials.php?tuteID=".$row['tuteID']."'><button class='bttn'>Delete</button></a>
						</div>
                        <br>";
			}
		}
		else {
			echo"no results";
		}
    $con->close();

		?>
    
    <?php
		require'config.php';

		$sql ="SELECT tipID, caption, description,file FROM teachingtips";
		$result = $con->query($sql);
        echo '<h2>Delete Learning Tips</h2>';

		if ($result -> num_rows > 0)	{

			while ($row = $result -> fetch_assoc())	{
				echo "<div>
						<a href ='".$row['file']."' alt='ad image'><img src='images/pdfs-512.png' height ='75px' width='60px'> </a>
                        
								<h4>".$row['caption']."</h4>
								<p>".$row['description']."</p>
                                <a href='deleteTeachingtips.php?tipID=".$row['tipID']."'><button class='bttn'>Delete</button></a>
						</div>
                        <br>";
			}
		}
		else {
			echo"no results";
		}
    $con->close();

		?>

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
