<?php

require'config.php';

$tipID = $_GET['tipID']; 

$sql = "DELETE FROM teachingtips WHERE tipID='$tipID'";

  if ($con->query($sql) === TRUE) {
    header("location: listContentforEdit.php");
  } 
  else {
    echo "Error deleting : " . $conn->error;
  }
  
  $conn->close();
  ?>