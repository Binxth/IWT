<?php

require'config.php';

$tuteID = $_GET['tuteID']; 

$sql = "DELETE FROM tutorials WHERE tuteID='$tuteID'";

  if ($con->query($sql) === TRUE) {
    header("location: listContentforEdit.php");
  } 
  else {
    echo "Error deleting : " . $con->error;
  }
  
  $con->close();
  ?>