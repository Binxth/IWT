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
      
      <input class="search" type="text" placeholder="  search here">

      <a class="regbutton" href="#register">Register</a>
      <a class="logbutton" href="#login">Login</a>
      <img class="logpic" src="images/usericon.png">    
  </div>
</div>


<div class="payment-header">
 <div style="text-align: center">
  <h1 style="color: white">Payment</h1>
  </div> 
</div>
<br> 

<div>
<div class="cardpayment">
<h2 style="color:dodgerblue">Card Payment</h2>
<p>Course Package -  Rs.2000</p>

<form name="payment">
      
        <div >
        
            <h3>Billing Address</h3>
            
            <table>
            
            <tr>
            
            <td><label for="fullname"> Full Name</label></td>
            <td><input type="text" id="fullname" name="fname" placeholder="Someone someone" class="input-design" style="width: 250px;"  required></td>
            </tr>
          
            <tr>
            <td><label for="email">Email</label></td>
            <td> <input type="email" id="email" name="email" placeholder="random@gmail.com" class="input-design" pattern="[a-ZA-Z]+@[a-zA-Z]+\.[a-zA-Z]{2}" required> </td>
            </tr>

            <tr>
            <td><label for="adrs"> Address</label></td>
            <td><input type="text" id="adrs" name="address" placeholder="No.3/C, Jayawardanapura" class="input-design" style="width: 250px;" required></td>
            </tr>
            
            <tr>
            <td><label for="city"> City</label> </td>
            <td><input type="text" id="city" name="city" placeholder="Colombo" class="input-design" style="width: 75px;" required>  </td>
            </tr>
            
            <tr>
            <td> <label for="zip">Zip</label></td>
            <td><input type="text" id="zip" name="zip" placeholder="11000" class="input-design" style="width: 50px;" required></td>
            </tr>

            <tr>
            <td><input type="checkbox" checked="checked" name="smaddrs" class="input-design" required> Shipping address same as billing </td>
            </tr>
            </table>
            
          </div>

          <div>
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
            <td> <input type="text" id="cardnum" name="cardnumber" placeholder="1254-6615-8238-2316" class="input-design" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" onchange="checkempty()"> </td>
            </tr>
            
            <tr>
            <td><label for="expmonth">Exp Month</label>
            </td>
            <td> <input type="text" id="expmonth" name="expmonth" placeholder="December" style="width: 75px;" class="input-design" pattern="[a-zA-Z]+" onchange="checkempty()"> </td>
            </tr>
            
            <tr>
            <td> <label for="expyear">Exp Year</label></td>
            <td><input type="text" id="expyear" name="expyear" placeholder="2021" style="width: 50px;" class="input-design" pattern="[0-9]{4}" onchange="checkempty()" ></td>
            </tr>
            
            <tr>
            <td><label for="cvv">CVV</label></td>
            <td><input type="text" id="cvv" name="cvv" placeholder="741" style="width: 30px;" class="input-design" pattern="[0-9]{3}" onchange="checkempty()"> </td>
            </tr>
            </table>  
              <input type="submit" value="Pay" id="subm" class="input-payreset" onclick="Payment()" disabled/>
              <input type="reset" Value="Reset" class="input-payreset">  
          </div>
        <p style="font-size: 10px">*Fill all the boxes inorder to proceed</p>
      </form>



</div>
<div class="paypal">
<button class="bttn">or</button> 

<a href="https://www.paypal.com/us/home" target="_blank">
<img src ="images/paypal.png" style="width: 250px; height: 50px; float:right ">
</a><br><br>
<p style="float: right; font-size: 12px;align-content: center">By clicking this you will be redirected to Paypal<br>Payment Gateway</p>
</div>

</div>
<br> 
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
