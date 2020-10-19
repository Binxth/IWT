<?php

require'config.php';

$videoID = $_GET['videoID']; 

$sql = "DELETE FROM video WHERE videoID='$videoID'";

  if ($con->query($sql) === TRUE) {
    header("location: editcontent.php");
  } 
  else {
    echo "Error deleting : " . $conn->error;
  }
  
  $conn->close();
  ?>