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
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
            $nameErr="Only alpha and white space are allowed";
        }
    }

    if(empty($_POST['email'])){
        $emailErr="Email is required";
    }
    else{
        $name=input_data($_POST['email']);
        if(!preg_match("/^[a-zA-Z@a-zA-Z.a-zA-Z]*$/",$email)){
            $emailErr="Fill correct email !!";
        }
    }

    if(empty($_POST['password'])){
        $passwordErr="Password is required";
    }
    else{
        $name=input_data($_POST['email']);
        if(!preg_match("/^[a-zA-Z@a-zA-Z.a-zA-Z]*$/",$password)){
            $passwordErr="Enter password !!";
        }
    }

 }

 function input_data($data){
    //remove space and special symbol
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
            background-repeat: no-repeat;}
        .container{
            width:97vw;
            height:97vh;
            display: flex;
            align-items: center;
            flex-direction: column;}
        h2{
            text-align: center;}
        .submit{
            width:100%;}
        .error{
            color:red;}
            td{
                width:150px;
            }
    </style>
</head>

<body>
    <div class="container">
        
    <h2>Registration</h2>
    <!-- <span class="error">* Required Field</span> -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <table border="0">
 
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" placeholder="Type your name"></td> 
            <td><span class="error">* <?php echo $nameErr; ?> </span></td>
        </tr>
        
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" placeholder="Type your email"></td>
            <td><span class="error">* <?php echo $emailErr; ?> </span></td>
        </tr>
        
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="Type Password"></td>
            <td><span class="error">* <?php echo $passwordErr; ?> </span></td>
        </tr>

        <tr>
            <!-- <td>Password:</td> -->
             <td>&nbsp;</td>
            <td><input type="password" name="Password" placeholder="Confirm Password"></td>
        </tr>

       <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td colspan="2" width="100%"><input class="submit" type="submit" name="submit" value="submit"></td></tr>
        <!-- <tr><td colspan="2" width="100%"><a href="Login.html"><button class="submit">Login</button></a></td></tr> -->
        
    </table>
</form>
</div>
</body>
</html>

