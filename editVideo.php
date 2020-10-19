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
  <h1 style="color: white">Edit Video</h1>
  </div> 
</div>
<br> 

<div class="div-editcontent">

<div class="edit-content-box">

				

<div style="width: 90%;margin: auto; margin-top: 25px ">
    <?php
    
		require'config.php';

        $videoID = $_GET['videoID'];
		$sql ="SELECT videoID, caption, description,module,file FROM video WHERE videoID ='$videoID'";
		$result = $con->query($sql);

		while ($row = $result -> fetch_assoc())	{

				echo '<div style="width: 75%;margin: auto; margin-top: 25px ">
                        <center>
                        <h2 style="color: darkslategray">Edit Video</h2>
                        <form action="updateMyVideo.php?videoID='.$row["videoID"].'" method="post" enctype="multipart/form-data">

                            <label for="caption">Enter a Caption</label><br>
                          <input type="text" id="caption" name="caption" style="width: 400px" class="input-design" value="'.$row["caption"].'"><br><br>

                          <label for="description">Enter the description</label><br>
                          <textarea id="description" name="description" rows="4" cols="60" class="input-design" >'.$row["description"].'</textarea><br><br>
                        <br>
                            <label for="caption">Enter the module (A or B)</label><br>
                          <input type="text" id="module" name="module" style="width: 75px" class="input-design" value="'.$row["module"].'" ><br><br>

                          <input type="submit" class="submit">
                        </form>
                        </center>
                        </div>
                        <br>';
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
