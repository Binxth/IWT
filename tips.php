<?php

require'config.php';


if(isset($_POST['submit'])){

    
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];

    $caption = $_POST["caption"];
    $description = $_POST["description"];

    if ($fileError === 0)  {
    $fileDestination = 'upload/'.$fileName; 
    move_uploaded_file($fileTmpName, $fileDestination);
    }
    
    
    $sql = "INSERT INTO teachingtips(caption,description,file) VALUES('$caption','$description','$fileDestination')";

    if ($con->query($sql))  {
        echo "Uploaded successfully";
    }
    else    {
        echo "Uploaded successfully - is a lie ". $con->error;
    }
    

header("location: uploadcontents.php"); 
}

$con->close();
?>