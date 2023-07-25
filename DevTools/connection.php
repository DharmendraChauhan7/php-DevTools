<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "devtools";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Sorry" . mysqli_connect_error());
}
//echo "SucccessFully Connected...";
?>