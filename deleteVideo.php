<?php

require'config.php';

$videoID = $_GET['videoID']; 

$sql = "DELETE FROM video WHERE videoID='$videoID'";

  if ($con->query($sql) === TRUE) {
    header("location: listContentforEdit.php");
  } 
  else {
    echo "Error deleting : " . $con->error;
  }
  
  $con->close();
  ?>