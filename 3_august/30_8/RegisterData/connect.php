<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "Register_demo";

$con = mysqli_connect($servername,$username,$password,$database);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
