<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "theCompany_db";

// Ceate Connection
$connection = mysqli_connect($db_host,$db_user,$db_password,$db_name);

// Checking Connection
if(!$connection){
    echo "Connection failed";
    die(mysqli_connect_error());
}//else{
//    echo "Connectiom successful!";
//}

?>