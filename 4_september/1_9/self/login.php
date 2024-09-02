<?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $sql="select * from users where email='$email' and password='$password'";

    $que=mysqli_query($con,$sql);
    if(mysqli_num_rows($que)>0){
        echo "<script>alert('login successfully')</script>";
        echo "<script>window.open('list.php','_self')</script>";
        $result = $que->fetch_assoc();     //*********cram*/
   
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['email'] = $email;
    } 
    else{
        echo "<script>alert('wrong data')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    mysqli_close($con);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
                background-image: url(./images/plane.jpg);
                background-size: 100%;
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
        .btns{
            position:fixed;
            right:5%;
            top:5%;
        }
        </style>
</head>
<body>
    <div class="container">
        <div class="btns">
           <button><a href="registration.php">Registration</a></button>
           <button><a href="menu.php">Home</a></button>
        </div>
        <h2>Login</h2>
        
        <form method="POST">
            Email: <br>
            <input type="text" name="email" placeholder="Type your email">
            <br><br>
            
            Password: <br>
            <input type="password" name="password" placeholder="Enter Password">
            <br><br><br>
            
            <input class="submit" type="submit" name="submit" value="submit"> <br><br><br>
        </form>
    </div>
</body>
</html>