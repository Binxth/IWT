<?php

require'config.php';
$videoID = $_GET['videoID'];

    $caption = $_POST["caption"];
    $description = $_POST["description"];
    $moduleCode = $_POST["moduleCode"];
    
    if ($moduleCode =='A'){
        $moduleCode =1;
    }
    else {$moduleCode=2;}


    $sql = "UPDATE video SET caption='$caption',description='$description',moduleCode='$moduleCode'
      WHERE videoID='$videoID'";

    if ($con->query($sql))  {
        echo "Uploaded successfully";
        header("location: listContentforEdit.php"); 
    }
    else    {
        echo "Uploaded successfully - is a lie ". $con->error;
    }



$con->close();
?>