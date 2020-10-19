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
        echo '<a class="logbutton" href="loginTeacher.php">Login</a>';
      }
      /////////////////////////////////////////////////////////////////////////////////////
      ?>