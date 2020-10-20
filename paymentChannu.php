<?php
//link the config file

require"config.php";
$name=$_POST["crdname"];
$number=$_POST["cardnumber"];
$month=$_POST["expmonth"];
$year=$_POST["expyear"];
$cvv=$_POST["cvv"];
$sql="INSERT INTO payment(name,cardNo,Month,year,cvv)VALUES($name, $number,$month,$year,$cvv)";
      if($con->query[$sql]){
          echo "details inserted successfully";
      }
      else{
          echo "Error:". $con->error;
      }
$con->close();

?>