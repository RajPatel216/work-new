<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "blog";

$con=mysqli_connect($servername,$username,$password,$database);

if (!$con) {
  die("Connection failed: " .mysqli_error($con));
}
else{
  echo "connection done";
}


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="insert into registration(email,password) values('$email','$password')";

    if(mysqli_query($con,$sql)){
        echo "<script>alert('success')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
}
?>