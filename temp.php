
if(isset($_POST['login']))
{
    
    //$newPIN = "";

    $sql = "SELECT * FROM payment WHERE pin = '{$oldPIN}'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
        $row = $result->fetch_assoc();
        
            $_SESSION['pin'] = $row['pin'];
            echo "success";


            //header('refresh:3; url=myAccount.php');




        
    } 
    else 
    {
        $errors="Invalid Login. Please check the email & Password";
        echo "wrong pin";
    }
    
    $con->close();

}

else
{
    //////////////////////////
}











if ($result->num_rows > 0) {

$row = $result->fetch_assoc();

$crdname = $row["crdname"];
$cardnum = $row["cardnum"];
$expmonth = $row["expmonth"];
$expyear = $row["expyear"];
$cvv = $row["cvv"];
$result = "";
}
