<?php

require'config.php';
$videoID = $_GET['videoID'];

    $caption = $_POST["caption"];
    $description = $_POST["description"];
    $module = $_POST["module"];


    $sql = "UPDATE video SET caption='$caption',description='$description',module='$module'
      WHERE videoID='$videoID'";

    if ($con->query($sql))  {
        echo "Uploaded successfully";
    }
    else    {
        echo "Uploaded successfully - is a lie ". $con->error;
    }

header("location: editcontent.php"); 

$con->close();
?>