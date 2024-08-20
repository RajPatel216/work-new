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
            width:97vw;
            height:97vh;
            display: flex; 
            align-items: center;
            flex-direction: column; 

        }
        .submit{
            width:100%;
        }
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <!-- <span class="error">* Required Field</span> -->
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <table border="0">
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" placeholder="Type your email"></td>
        </tr>

        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="Enter Password"></td>
        </tr>

        <tr><td colspan="2">&nbsp</td></tr>
       
        <tr><td colspan="2" width="100%"><input class="submit" type="submit" name="submit" value="submit"></td></tr>
        <!-- <tr><td colspan="2" width="100%"><a href="registration.html"><button class="submit">Registration</button></a></td></tr> -->

    </table>
<!--  
    <tr><td width="100%"><input class="submit" type="submit" name="submit" value="submit"></td>
        <td width=""><a href="registration.html"><button class="submit">Login</button></a></td></tr>
   -->
</form>
</div>
</body>
</html>
