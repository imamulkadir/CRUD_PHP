<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Failed to connect to databse!" . mysqli_connect_error());
}
// echo "Connection Established!";