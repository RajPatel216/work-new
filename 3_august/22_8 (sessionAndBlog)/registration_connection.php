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




// $con = mysqli_connect('localhost', 'root', '', 'blog');

// if (!$con) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// if(isset($_POST['submit'])){
//     $name = mysqli_real_escape_string($con, $_POST['name']);
//     $email = mysqli_real_escape_string($con, $_POST['email']);
//     $password = password_hash(mysqli_real_escape_string($con, $_POST['password']), PASSWORD_BCRYPT);

//     $sql = "INSERT INTO registration (name, email, password) VALUES ('$name', '$email', '$password')";

//     if(mysqli_query($con, $sql)){
//         echo "<script>alert('Data inserted successfully');</script>";
//         echo "<script>window.open('login.php', '_self');</script>";
//     } else {
//         echo "Error: " . mysqli_error($con);
//     }
//     mysqli_close($con);
// }
?>