<?php
session_start();


if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) //if loggdin
{
  //stay
}
else
{
  header("location:loginTeacher.php");
}

$errorMsg = "";
$successMsg = "";
$errorMsg2 = "";
$errorMsg3 = "";

require 'config.php';
$time = date("H");
$greeting = "";
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y h:i:s');


$timezone = date("e");

if ($time < "12") {
  $greeting = "Good morning";
} else
   
    if ($time >= "12" && $time < "17") {
  $greeting = "Good afternoon";
} else
    
    if ($time >= "17" && $time < "19") {
  $greeting = "Good evening";
} else
    
    if ($time >= "19") {
  $greeting = "Good night";
}

$userID = $_SESSION["userID"];
$sql = "SELECT * FROM user WHERE userID = '" . $userID . "'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {

  $row = $result->fetch_assoc();

  $fname = $row["fname"];
  $lname = $row["lname"];
  $Mnum = $row["Mnum"];
  $email = $row["email"];
  $result = "";
}

if (isset($_POST["UPDATE1"])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $Mnum = $_POST['Mnum'];


  $sql = "UPDATE user SET 
            fname='" . $fname . "' , 
            lname='" . $lname . "' ,
            Mnum='" . $Mnum . "'
         

            WHERE userID = " . "$userID";

  if ($connection->query($sql) === FALSE) {
    $errorMsg = "Something Went Wrong Please Try Again";
  } else {
    $successMsg = "User Details Updated Successfully";
  }
}

if (isset($_POST['DELETE'])) {
  $pass = $_POST['pass'];
  $pass = sha1($pass);
  $sql = "SELECT pass FROM user WHERE userID =" . $_SESSION['userID'];
  $result = $connection->query($sql);
  $row = $result->fetch_assoc();
  $oldpass = $row['pass'];

  if ($pass == $oldpass) {
    $sql = "DELETE FROM user WHERE userID =" . $_SESSION['userID'];

    if ($connection->query($sql) == TRUE) {
      $_SESSION = array();
      session_destroy();
      header("location:signup.php");
      exit();
    } else {
      echo '<script> alert("Failed to delete your account! Database connection failed");</script> ';
    }
  } else {
    echo '<script> alert("Failed to delete your account! Incorrect Password.");</script> ';
  }
}

///////////////////////////////////////////////////////////////////////////
//updating the passwords

if (isset($_POST["UPDATEPASSWORD"])) 
{
  $currentPass = $_POST['currentPass'];

  $newPass = $_POST['newPass'];
  $confirmNewpass = $_POST['confirmNewpass'];
  
  $currentPass = sha1($currentPass);
  

  $sql = "SELECT pass FROM user WHERE userID =" . $_SESSION['userID'];
  $result = $connection->query($sql);
  $row = $result->fetch_assoc();
  $storedpass = $row['pass'];
  echo "<script> console.log('".$storedpass."'); </script>";
  echo "<script> console.log('".$currentPass."'); </script>";
  
  if($storedpass == $currentPass) //verify old pass
  {
    echo "<script> console.log('".$newPass."'); </script>";
  echo "<script> console.log('".$confirmNewpass."'); </script>";

    if ($newPass == $confirmNewpass) 
    {

      $newPass = sha1($newPass);
      
      $sql = "UPDATE user SET pass='" . $newPass . "' WHERE userID = " . "$userID";

      if ($connection->query($sql) === FALSE) 
      {
        $errorMsg = "Something Went Wrong Please Try Again";
      } 
      else 
      {
        echo "<script> console.log('Inn'); </script>";
        $successMsg = "User Password Updated Successfully";
      }
    } 
    else 
    {
      $errorMsg2 = "Please Make Sure New Password & Confirm New Password Match!";
    }
  }

  else
  {
    $errorMsg3 = "Current Password not matched!";
  }




 
}


///////////////////////////////////////////////////////////////////////////

$connection->close();
?>





<!DOCTYPE html>
<html>

<head>
  <title>BCC Online Teacher Trainer</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/headerfooter.css">
  <link rel="stylesheet" type="text/css" href="style/myAccount.css">


  <script src="script/myAccount.js"></script>

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
      <a class="active" href="myAccount.php">My Account</a>
      
      <input class="search" type="text" placeholder="  search here">

      <!--<a class="regbutton" href="signup.php">Register</a>-->
      <!--<a class="logbutton" href="loginTeacher.php">Login</a>-->

      
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
      
      <img class="logpic" src="images/usericon.png">
    </div>
  </div>


  <br>

  <div class="Contentbanner">
    <br>
    <h1> My Account </h1>

    <h2 style="margin-left:50px; margin-top: -50px; color:white;"><?php echo "$greeting";
                                                                  echo " ";
                                                                  echo $fname; ?></h2>
    <br>
    <h2 style="margin-left:50px; margin-top: -30px; color:green;"><?php echo "Last Accessed Time: ";
                                                                  echo " ";
                                                                  echo $date; ?>
      <h3 style="margin-left:800px; margin-top: -40px; color:#1e90ff;"><?php echo "$successMsg"; ?></h3>
      <h3 style="margin-left:800px; margin-top: -40px; color:red;"><?php echo "$errorMsg"; ?></h3>
      <h3 style="margin-left:640px; margin-top: -40px; color:red;"><?php echo "$errorMsg2"; ?></h3>
      <h3 style="margin-left:810px; margin-top: -40px; color:red;"><?php echo "$errorMsg3"; ?></h3>
  </div>


  <div class="rec01">
  </div>
  <br>
  <div class="profileCard">
    <img src="images/profilePic.jpg" alt="dp" style="width:100%">
    <h1> <?php echo $fname;
          echo " ";
          echo $lname; ?> </h1>


    <svg height="20" width="20" style="margin-left: -90px; margin-top: -10px;">
      <circle cx="10" cy="10" r="10" fill="green" />

    </svg>
    <h4 style="margin-top: -22px; margin-left: 0px;">Online</h4>



    <p class="profileTitle">Level 01 Student</p>
    <p class="profileTitle">User Type: <?php echo " ";
                                        echo $_SESSION['RegisterAs']; ?></p>
    <p><?php echo $_SESSION['RegisterAs'];
        echo " at ";
        echo $_SESSION['sch']; ?></p>
    
    <p><button onclick="document.location='logout.php'">Log Out</button></p>

  </div>

  </div>
  <a onclick="inboxMsg()" class="accNotification">
    <span>Inbox</span>
    <span class="badge">3</span>
  </a>

  <br>
  <div class="notificationTXT">
    <h3 id="txtNotification"></h3>
  </div>



  <div style="margin-left: 100px;width: 10%; margin-top: 10px">

    <img src="images/myAccUser.png" style="width:25px;height:29px;">



  </div>

  <h4 style=" margin-left: 140px; margin-top: -25px; color: #212121;">Account Details</h4>
  <br>

  <div style=" margin-left: 140px;">
    <form action="myAccount.php" method="POST">

      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname" value=<?php echo $fname; ?>>
      <br><br>



      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>">
      <br><br>

      <label for="email">E-mail Address:</label><br>
      <input type="email" id="email" name="email" value="<?php echo $email; ?>" disabled>
      <p style="color: red;">E-mail address cannot be changed</p>
      <br>

      <label for="Mnum">Mobile Number:</label><br>
      <input type="text" id="Mnum" name="Mnum" value="<?php echo $Mnum; ?>">
      <br><br>

      <label for="userid">User ID:</label><br>
      <input type="text" id="userid" name="userid" value="<?php echo $userID; ?>" disabled>
      <p style="color: red;">User ID cannot be changed</p>
      <br><br>
      <input type="submit" id="submit_button" class="submitButton" name="UPDATE1" value="UPDATE">
    </form>
  </div>
  <br>
  <form action="myAccount.php" method="POST">
    <h4 style="color: red; padding:0px; margin-left:140px;">Enter Your Current Password to Delete Your Account</h4>
    <br>
    <p style="color: grey; margin-top:-30px; margin-left:140px;">If you deleted your BCC Account, you can't able to get it back</p>
    <br>

    <div style=" margin-left: 140px; margin-top: -25px; color: #212121;">
      <input type="password" name="pass" placeholder="************">
    </div><br>

    <input type="submit" id="submit_button" class="delButton" name="DELETE" value="DELETE MY ACCOUNT">
  </form>

  <br><br><br>



  <div style="margin-left: 100px;width: 10%; margin-top: 10px">

    <img src="images/myAccLock.png" style="width:25px;height:29px;">



  </div>

  <h4 style=" margin-left: 140px; margin-top: -23px; color: #212121;">Change Password</h4>
  <br>

  <div style=" margin-left: 140px;">
    <form action="myAccount.php" method="POST">
      <label for="Cpassword">Current Password:</label><br>
      <input type="password"  name="currentPass" placeholder="********">
      <br><br>

      <label for="Npassword">New Password:</label><br>
      <input type="password"  name="newPass" placeholder="Enter New Password">
      <br><br>

      <label for="CNpassword">Confirm New Password:</label><br>
      <input type="password"  name="confirmNewpass" placeholder="Confirm New Password">
      <br><br>
      <input type="submit"  class="submitButton" name="UPDATEPASSWORD" value="UPDATE">
    </form>
  </div>

  <br><br><br>
  <!--<div style="margin-left: 95px;width: 10%; margin-top: 10px">

    <img src="images/myAccPayment.png" style="width:35px;height:22px;">



  </div>

  <h4 style=" margin-left: 140px; margin-top: -23px; color: #212121;">Payment Methods</h4>
  <br>
  <button class="buttonPayment">Add Payment Methods</button>
  <br>
  <button class="buttonPayment02">Saved Payment Methods</button>
  <br>

  <img src="images/visa.png" style="width:70px;height:70px; margin-left: 150px;"><br>
  <h4 style="margin-left: 230px; margin-top: -50px;">Visa Personal Account</h4><br>
  <h4 style="margin-left: 230px; margin-top: -30px;">XXXX-XXXX-XXXX-9561</h4>
  <h4 style="margin-left: 460px; margin-top: -40px;">02/22</h4>
  <button class="buttonDelete">DELETE</button>



  <br><br><br>


  <div style="margin-left: 93px;width: 10%; margin-top: 10px">

    <img src="images/myAccCap.png" style="width:40px;height:26px;">



  </div>

  <h4 style=" margin-left: 140px; margin-top: -23px; color: #212121;">My Courses</h4>
  <br>

  <button class="buttonStudy">Study Area</button>
  <br>

  <button class="buttonView">View All</button>
  <br>
  <h4 style="margin-left: 150px; margin-top: 10px;">Advanced certificate course in pre-school child psycology</h4><br>
  <button class="buttonEnroll">ENROLL</button>
  <br>
  <h4 style="margin-left: 150px; margin-top: 10px;">Diploma in pre-school education</h4><br>
  <button class="buttonCont">CONTINUE</button>-->






  </div>
  <br><br><br>





  <div class="footer">
    <div class="containerPostNew">

      <div class="boxEditPostNew">
        <div class="verticalBar"></div>
        <img src="images/footerLogo.png" style="width:150px;height:150px;">
        <h4>BCC Teacher Training Acedemy</h4>
      </div>

      <div class="boxEditPostNew">
        <div class="verticalBar"></div>
        <br><br>
        <contact>1-800-243-0000 <br> contact@bccacedemy.edu.com</contact>
        <br><br><br>
        <img src="images/payment.png" style="width:300px;height:50px;">
      </div>

      <div class="boxEditPostNew">
        <h3>Follow Us On</h3>

        <a href="https://facebook.com" target="_blank"> <img src="images/facebook.png" style="width:25px;height:25px;"></a>
        <a href="https://twitter.com" target="_blank"><img src="images/twitter.png" style="width:25px;height:25px;"></a>
        <a href="https://www.instagram.com/channuka.d/" target="_blank"><img src="images/instagram.png" style="width:25px;height:25px;"></a>
        <a href="https://linkedin.com" target="_blank"><img src="images/linkedin.png" style="width:25px;height:25px;"></a>
        <br>
        <img class="QR" src="images/QR.png" style="width:70px;height:70px;">
        <br>
        <a href="https://www.apple.com/ios/app-store/" target="_blank"><img src="images/ios.png" style="width:100px;height:32px;"></a>
        <a href="https://play.google.com/store?hl=en" target="_blank"><img src="images/android.png" style="width:100px;height:32px;"></a>
      </div>
    </div>
  </div>

</body>

</html>