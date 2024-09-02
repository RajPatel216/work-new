<?php

include 'connect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    }

$del ="delete from users where id = '$id'";
$result2 = mysqli_query($con,$del);
if(!$result2){
    die("query failed".mysqli_error());
}
else{
     echo "<script>confirm('data deleted successfully')</script>";
     echo "<script>window.open('list.php','_self')</script>";
}
?>
