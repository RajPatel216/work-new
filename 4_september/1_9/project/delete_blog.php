

<?php

include 'dbConnect.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
}

$query ="delete from blogs where id = '$id'";
$result = mysqli_query($con,$query);

if(!$result){
    die("query failed".mysqli_error());
}
else{
     echo "<script>alert('data deleted successfully')</script>";
     echo "<script>window.open('viewblog.php','_self')</script>";
}
?>