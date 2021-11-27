<?php
$host = "localhost";
$user = "itmku";
$password = "admin0411";
$dbname = "inventory";
$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
 die("error in connection");
}

//echo "database connected"
?>