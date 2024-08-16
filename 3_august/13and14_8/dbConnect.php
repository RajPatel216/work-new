<?php 
// Create connection
$con = mysqli_connect("localhost","root","","blog");
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

?>