<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "userdb";
// Creating the connection
$connection = mysqli_connect($servername, $dbusername, $dbpassword,$dbname);

//$connection= mysqli_connect('localhost','root','','userdb')
// Checking the  connection
if ($connection->connect_error) {
 die("Connection failed: " . $connection->connect_error);
}
//echo "Connected successfully <br>";
?>

