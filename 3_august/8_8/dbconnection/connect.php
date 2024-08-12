<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$con=mysqli_connect($servername,$username,$password,$database);

if (!$con) {
  die("Connection failed: " .mysqli_error($con));
}
else{
  echo "connection done";
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql="insert into student(name,email) values('$name','$email')";

    if(mysqli_query($con,$sql)){
        echo "<script>alert('success')</script>";
        echo "<script>window.open('frontEnd.html','_self')</script>";
    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);


}


?>