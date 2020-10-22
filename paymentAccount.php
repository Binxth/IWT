<?php
session_start();
require 'config.php';

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) //if loggdin
{
  //stay
}
else
{
  
  header("location:paymentLogin.php");
}




$sql = "SELECT * FROM payment WHERE userID = '{$_SESSION['userID']}' ";
$result = $con->query($sql);


if ($result->num_rows > 0) 
{
    // output data of each row
    $row = $result->fetch_assoc(); 
    
        
        $_SESSION['crdname'] = $row['crdname'];
        $_SESSION['cardnum'] = $row['cardnum'];
        $_SESSION['expmonth'] = $row['expmonth'];
        $_SESSION['expyear'] = $row['expyear'];
        $_SESSION['cvv'] = $row['cvv'];
        $_SESSION['pin'] = $row['pin'];
        

        //header('refresh:3; url=myAccount.php');    
} 


if (isset($_POST["update"])) {
    $crdname = $_POST['crdname'];
    $cardnum = $_POST['cardnum'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];
    $pin = $_POST['pin'];
  
  
    $sql = "UPDATE payment SET 
              crdname='" . $crdname . "' , 
              cardnum='" . $cardnum . "' ,
              expmonth='" . $expmonth . "' ,
              expyear='" . $expyear . "' ,
              cvv='" . $cvv . "' ,
              pin='" . $pin . "'
           
  
              WHERE userID = " . "{$_SESSION['userID']}";
  
    if ($con->query($sql) === FALSE) {
      $errorMsg = "Something Went Wrong Please Try Again";
    } else {
      $successMsg = "User Details Updated Successfully";
      header("location:paymentAccount.php"); 
    }
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



<div class="form-container">
    <div  class="body" style="padding:50px; text-align: center" >
    
    <h1>Saved Payment</h1>
   
    <br>
<form action="paymentAccount.php" method="POST">
<!------------------------------------------------------------------>
<!------------------------------------------------------------------>
<h3>Update your payment method</h3>
            <label for="cards">Saved Card</label>
            <img src ="images/payment.png" style="width: 150px; height: 30px;float:right  "  >
            <br><br>
            
            <table>
            <tr>
            <td><label for="cardname">Name on Card</label> </td>
            <td><input type="text"  name="crdname"  value="<?php echo $_SESSION['crdname']; ?>"></td>
            </tr>
            
            <tr>
            <td><label for="cardnum">Credit card number</label> </td>
            <td> <input type="text" id="cardnum" name="cardnum" value="<?php echo $_SESSION['cardnum']; ?>"  class="input-design" > </td>
            </tr>
            
            <tr>
            <td><label for="expmonth">Exp Month</label>
            </td>
            <td> <input type="text" id="expmonth" name="expmonth" value="<?php echo $_SESSION['expmonth']; ?>" style="width: 75px;" class="input-design"  > </td>
            </tr>
            
            <tr>
            <td> <label for="expyear">Exp Year</label></td>
            <td><input type="text" id="expyear" name="expyear" value="<?php echo $_SESSION['expyear']; ?>" style="width: 50px;" class="input-design"   ></td>
            </tr>
            
            <tr>
            <td><label for="cvv">CVV</label></td>
            <td><input type="text" id="cvv" name="cvv" value="<?php echo $_SESSION['cvv']; ?>"  style="width: 30px;" class="input-design"  > </td>
            </tr>

            <tr>
            <td><label for="PIN">Security PIN</label></td>
            <td><input type="text" id="PIN" name="pin" value="<?php echo $_SESSION['pin']; ?>" style="width: 30px;" class="input-design"  > </td>
            </tr>
            </table>  
<!------------------------------------------------------------------>
<!------------------------------------------------------------------>
<br>
<input type="submit" id="submit_button" class="updatebtn" name="update" value="UPDATE">
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
