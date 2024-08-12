<?php
$emailErr = $passwordErr = "";
$email = $password = "";

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    //EMPTY
    if(empty($_POST['email'])){
        $emailErr="Email is required";
    }
    else{
        $name=input_data($_POST['email']);
        if(!preg_match("/^[a-zA-Z@a-zA-Z.a-zA-Z]*$/",$email)){
            $emailErr="Invalid Format !!";
        }
    }

    if(empty($_POST['password'])){
        $passwordErr="Password is required";
    }
    else{
        $name=input_data($_POST['email']);
        if(!preg_match("/^[a-zA-Z@a-zA-Z.a-zA-Z]*$/",$password)){
            $passwordErr="Invalid Format !!";
        }
    }
 }

 function input_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

            Email: <br>
            <input type="email" name="email" placeholder="Type your email">
            <span class="error">*<?php echo $emailErr; ?> </span>
            <br><br>
            
            Password: <br>
            <input type="password" name="password" placeholder="Enter Password">
            <span class="error">*<?php echo $passwordErr; ?></span>
            <br><br>
            
            <input class="submit" type="submit" name="submit" value="submit"> <br><br><br>
           
        </form>
    </div>
</body>
</html>

