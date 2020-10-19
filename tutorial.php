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
    $module = $_POST["module"];

    $fileExt = explode('.', $fileName); //separate file extenstion from the file name 
    $fileActualExt = strtolower(end($fileExt)); //get the file extenstion and make is lowercase (incase if it is uppercase)

    $allowed = array('pdf','jpg', 'jpeg', 'png'); //save allowed extenstion in array

    if (in_array($fileActualExt, $allowed)) //checks whether uploaded file extenstion matches the allowed extenstions  {
    {
        if ($fileError === 0)  { //checks for errors
            if ($fileSize < 10000000000 )   { //only allows lower than 100000kb size files
                $fileNameNew = uniqid('',true).".".$fileActualExt; //creates a unique name with uploaded time in micro-seconds for the image so it wont get a chance to be replaced by an file with the same name
                $fileDestination = 'upload/'.$fileNameNew; //creates the destination path inorder to save the image with the unique file name 
                move_uploaded_file($fileTmpName, $fileDestination); // moves the file from temporary location to the path created above
            }
            else {
                echo "<script> alert('Your file is too big !');</script>";
            }

        }
        else {
            echo "<script> alert('There was an error uploading file!');</script>";
        }
    }
    else
    {
        echo "<script> alert('You cannot upload this type of file!');</script>";
    }
    
    if ($module=="A"){
        $module=1;  
    }
    else if($module="B"){
        $module=2;
    }
    
    
    $sql = "INSERT INTO tutorials(caption,description,moduleCode,file) VALUES('$caption','$description','$module','$fileDestination')";

    if ($con->query($sql))  {
        echo "Uploaded successfully";
    }
    else    {
        echo "Uploaded successfully - is a lie ". $con->error;
    }

header("location: index.html"); 

}
$con->close();
?>