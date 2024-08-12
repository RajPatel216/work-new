<?php 

$con=mysqli_connect("localhost","root","","blog");
if (!$con) {
  die("Connection failed: " .mysqli_error($con));
}
else{
  echo "";
}
// -------------------------------------------------------------

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from registration where email='$email' and password='$password'";
    $que=mysqli_query($con,$sql);
    if(mysqli_num_rows($que)>0){
        echo "<script>alert('login successfully')</script>";
        echo "<script>window.open('1.php','_self')</script>";
    }
    else{
        echo "<script>alert('wrong data')</script>";
        echo "<script>window.open('registration.php','_self')</script>";
    }
}
?>
<!-- ----------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login duplicate</title>
        <style>
            body{
                background-image: url(./images/plane.jpg);
                background-size: 100vw 100vh;
                background-repeat: no-repeat;
            }
        .container{
            position:absolute;
            top:10%;
            left:40%;  
            
        }
        h2{
            position:relative;
            left:100px;
        }
        input{
            width:22vw;
        }
        .submit{
            width:22.5vw;
        }
        a{
            color:black;
            text-decoration:none;
        }
        button{
            position:fixed;
            right:5%;
            top:5%;
        }
        </style>
</head>
<body>
    <div class="container">
        <button><a href="registration.php">Registration</a></button>
        <h2>Login</h2>
        
        
        <form method="POST">
            
            Email: <br>
            <input type="email" name="email" placeholder="Type your email">
            <!-- <span class="error">* echo $emailErr;  </span> -->
            <br><br>
            
            Password: <br>
            <input type="password" name="password" placeholder="Enter Password">
            <!-- <span class="error">* echo $passwordErr; </span> -->
            <br><br>
            
            <input class="submit" type="submit" name="submit" value="submit"> <br><br><br>
        </form>
    </div>
</body>
</html>

