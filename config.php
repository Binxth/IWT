<?php



$con = new mysqli("localhost","root","","teachertrainer");
    if ($con->connect_error)    {
        die("connection failed! ".$con->connect_error);
    }

?>