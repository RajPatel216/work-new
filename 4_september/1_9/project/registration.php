
<?php
 $nameErr = $emailErr = $passwordErr = "";
 $name = $email = $password = "";

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    //EMPTY
    if(empty($_POST['name'])){
        $nameErr="Name is required";
    }
    else{
        $name=input_data($_POST['name']);
        if(!preg_match("/^[a-z-' ]{3,}$/i",$name)){
            $nameErr="Only alphabet with minimum 5 letters ";
        }
    }

    if(empty($_POST['email'])){
        $emailErr="Email is required";
    }
    else{
        $email=input_data($_POST['email']);
        if(!preg_match("/[a-zA-Z0-9]+@[a-zA-Z]{5,}[.][a-zA-Z]{2,}/",$email)){
            $emailErr="Must contain @ and . ";
            //still space
        }
    }

    if(empty($_POST['password'])){  
        $passwordErr="Password is required";
    }
    else{
        $password=input_data($_POST['password']);
        if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/",$password)){
            $passwordErr="minimum 8 char and 1 alpha,upperAplha,number";
        }
    }

    if(empty($nameErr) && empty($emailErr) && empty($passwordErr)){
        
        include 'registration_connection.php';
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
    <title>Registration Page</title>
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
            left:80px;
        }
        input{
            width:22vw;
        }
        a{
           text-decoration:none;
           color:black;
        }
        .submit{
            width:22.5vw;
        }
        .btns{
            position:fixed;
            right:5%;
            top:5%;
        }
    </style>
</head>
<body>
    <div class="btns">
    <button><a href="login.php">Login</a></button>
    <button><a href="menu.php">Home</a></button>
    </div>

    <div class="container">
        <h2>Registration</h2>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            
            Name: <br>
            <input type="text" name="name" value="<?php echo $name;?>" placeholder="Type your name"> 
            <span class="error">*<?php echo $nameErr; ?></span>
            <br><br>
            
            Email: <br>
            <input type="text" name="email" value="<?php echo $email;?>" placeholder="Type your email"> 
            <span class="error">*<?php echo $emailErr; ?> </span>
            <br><br>
            
            Password:<br>
            <input type="password" name="password" value="<?php echo $password;?>" placeholder="Type Password"> 
            <span class="error">*<?php echo $passwordErr; ?></span>
            <br><br>
            
            <br><br>
            <input class="submit" type="submit" name="submit" value="submit"> <br><br><br>
            
        </form>
    </div>
</body>
</html>
