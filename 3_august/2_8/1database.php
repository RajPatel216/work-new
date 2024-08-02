<?php
$servername="localhost";
$username="root";
$password="";
$database="college";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die("Error deleting record:".mysqli_error($con));
}
else{
    echo "successful!";
}
?>