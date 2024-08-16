<?php 
$con=mysqli_connect('localhost','root','','blog');

if (!$con) {
  die("Connection failed: " .mysqli_error($con));
}
else{
  echo "";
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="insert into registration(name,email,password) values('$name','$email','$password')";

    if(mysqli_query($con,$sql)){
        echo "<script>alert('data inserted successfully')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
}

?>