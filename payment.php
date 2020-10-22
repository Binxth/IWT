<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true ) //if loggdin
{
  //stay
}
else
{
  
  header("location:loginTeacher.php");
}

$Pmsg="";
$Pmsg2="";
$icon="";
$Pmsg3="";
$crdname="";
$cvv="";
//$pError="";
//$pError2="";



if(isset($_POST['submit']))
{

$amount=$_POST['amount'];
 $pFname=$_POST['pFname'];
 $pEmail=$_POST['pEmail'];
 $pAddress=$_POST['pAddress'];
 $pCity=$_POST['pCity'];
 $pZip=$_POST['pZip'];
 $pChecked=$_POST['pChecked'];
 $crdname=$_POST['crdname'];
 $cardnum=$_POST['cardnum'];
 $expmonth=$_POST['expmonth'];
 $expyear=$_POST['expyear'];
 $cvv=$_POST['cvv']; 
 $pin=$_POST['pin'];
 
 $cardnum = trim($cardnum);

require 'config.php';

$stmt = $con->prepare("INSERT INTO payment (amount,pFname,pEmail,pAddress,pCity,pZip,pChecked,crdname,cardnum,expmonth,expyear,cvv,pin,userID) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssssssss",$amount, $pFname, $pEmail, $pAddress,$pCity,$pZip,$pChecked,$crdname,$cardnum,$expmonth,$expyear,$cvv,$pin,$_SESSION['userID']);



if($stmt->execute() == TRUE)
{
  
    $Pmsg="Your Payment Details has been <br>updated Successfully.<br> <br>Please check your email address<br> for payment reference number";
    //$Pmsg2="Please Wait...Redirecting to the sign up page";
    $Pmsg3="Please check your email address for payment reference number";
    //$icon='<img src="images/loading.gif">';
    header('refresh:2; url=paymentLogin.php');
    
}

else
{
  //$pError="Something went wrong";
  //$pError2="Please enter your payment details again";
  //header('refresh:3; url=payment.php');

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
<script src="script/javascript.js"></script>
</head>
<body>

<div class="header">
  <a href="#default"></a>
  <div class="header-left">
  <img class="logo" src="images/logo2.png">
  <a href="home.php">Home</a>
      <a href="content.php">Contents</a>
      <a class="active" href="payment.php">Pricing</a>
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


<div class="payment-header">
 <div style="text-align: center">
  <h1 style="color: white">Payment</h1>
  <button style="margin-bottom:20px;" onclick="document.location='paymentLogin.php'">Access My Payment Account</button>
  <br>
  </div> 
</div>
<br> 

<div>
<div class="cardpayment">
<h2 style="color:dodgerblue; ">Card Payment</h2>
<!--<p>Course Package -  Rs.2000</p>-->
<form action = "payment.php" method="POST" name="payment" >
            <td><label for="Amount"> Course Amount</label></td>
            <td><input type="text" id="amount" name="amount" placeholder="2800LKR" class="input-design" style="width: 250px; margin-left:145px;"  required></td>

      
        
        
            <h3>Billing Address</h3>
            
            <table>
            
            <tr>
            
            <td><label for="fullname"> Full Name</label></td>
            <td><input type="text" id="fullname" name="pFname" placeholder="Someone someone" class="input-design" style="width: 250px;"  required></td>
            </tr>
          
            <tr>
            <td><label for="email">Email</label></td>
            <td> <input type="email" id="email" name="pEmail" placeholder="random@gmail.com" class="input-design" pattern="[a-ZA-Z]+@[a-zA-Z]+\.[a-zA-Z]{2}" required> </td>
            </tr>

            <tr>
            <td><label for="adrs"> Address</label></td>
            <td><input type="text" id="adrs" name="pAddress" placeholder="No.3/C, Jayawardanapura" class="input-design" style="width: 250px;" required></td>
            </tr>
            
            <tr>
            <td><label for="city"> City</label> </td>
            <td><input type="text" id="city" name="pCity" placeholder="Colombo" class="input-design" style="width: 75px;" required>  </td>
            </tr>
            
            <tr>
            <td> <label for="zip">Zip</label></td>
            <td><input type="text" id="zip" name="pZip" placeholder="11000" class="input-design" style="width: 50px;" required></td>
            </tr>

            <tr>
            <td><input type="checkbox" checked="pChecked" name="pChecked" class="input-design" required> Shipping address same as billing </td>
            </tr>
            </table>
            
          

          
            <h3>Payment</h3>
            <label for="cards">Accepted Cards</label>
            <img src ="images/payment.png" style="width: 150px; height: 30px;float:right  "  >
            <br><br>
            
            <table>
            <tr>
            <td><label for="cardname">Name on Card</label> </td>
            <td><input type="text" id="cardname" name="crdname" placeholder="Someone Someone" class="input-design" style="width: 250px;" onkeyup="checkfilled(this)"></td>
            </tr>
            
            <tr>
            <td><label for="cardnum">Credit card number</label> </td>
            <td> <input type="text" id="cardnum" name="cardnum" placeholder="1254-6615-8238-2316" class="input-design" onchange="checkempty()"> </td>
            </tr>
            
            <tr>
            <td><label for="expmonth">Exp Month</label>
            </td>
            <td> <input type="text" id="expmonth" name="expmonth" placeholder="December" style="width: 75px;" class="input-design"  onchange="checkempty()"> </td>
            </tr>
            
            <tr>
            <td> <label for="expyear">Exp Year</label></td>
            <td><input type="text" id="expyear" name="expyear" placeholder="2021" style="width: 50px;" class="input-design"  onchange="checkempty()" ></td>
            </tr>
            
            <tr>
            <td><label for="cvv">CVV</label></td>
            <td><input type="text" id="cvv" name="cvv" placeholder="741" style="width: 30px;" class="input-design"  onchange="checkempty()"> </td>
            </tr>

            <tr>
            <td><label for="PIN">Security PIN</label></td>
            <td><input type="text" id="PIN" name="pin" placeholder="####" style="width: 30px;" class="input-design"  onchange="checkempty()"> </td>
            </tr>
            </table>  
              <!--<input type="submit" value="Pay" id="subm" class="input-payreset" onclick="Payment()" disabled/>-->
              <input type="submit" value="Pay" id="subm" class="input-payreset" name="submit">
              <input type="reset" Value="Reset" class="input-payreset">  
        </form>
          
        <p style="font-size: 10px">*Fill all the boxes inorder to proceed</p>



</div>
<div class="paypal">
<button class="bttn">or</button> 


<a href="https://www.paypal.com/us/home" target="_blank">
<img src ="images/paypal.png" style="width: 250px; height: 50px; margin-left:-100px; margin-bottom:-130px; ">
</a><br><br>
<p style="margin-left:-5px; margin-bottom:10px;  font-size: 12px;align-content: center">By clicking this you will be redirected to Paypal<br>Payment Gateway</p>


<!--<h3 style="margin-left: 340px; margin-top: -130px; color:#1e90ff;"> <?php echo "$Pmsg2"; ?></h3>-->
<h3 style="margin-left: -5px; margin-top: -250px; color:#1e90ff;"> <?php echo "$Pmsg"; ?></h3>
<!--<h3 style="margin-left: -5px; margin-top: -180px; color:#1e90ff;"> <?php echo "$Pmsg3"; ?></h3>-->

<!--<icon style="margin-left: 340px; margin-top: -250px;"><?php echo $icon; ?></icon>-->


</div>


</div>


<br> 
<br> 
<br> 
<!------------------------------------------------------------------->
<!------------------------------------------------------------------->
<!------------------------------------------------------------------->






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

<script>
            function Payment() {
            alert("Payment Successfully Completed");
            }
            
            
           function checkempty(){
                if(document.payment.cardname.value != '' && document.payment.cardnum.value != '' && document.payment.expmonth.value != '' && document.payment.expyear.value != '' && document.payment.cvv.value != ''&& document.payment.fullname.value != ''&& document.payment.email.value != ''&& document.payment.adrs.value != ''&& document.payment.city.value != '')
                {
                    document.payment.subm.disabled=false;
                }
                else{
                    document.payment.subm.disabled=true;
                }
            }
            
            
        </script>

</body>
</html>
