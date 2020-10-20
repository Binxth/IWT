<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "userdb";
// Creating the connection
$con = mysqli_connect($servername, $dbusername, $dbpassword,$dbname);

//$connection= mysqli_connect('localhost','root','','userdb')
// Checking the  connection
if ($con->connect_error) {
 die("Connection failed: " . $con->connect_error);
}
//echo "Connected successfully <br>";
?>

