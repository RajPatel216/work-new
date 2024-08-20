
<?php
// Initialize error variables
$nameErr = $emailErr = $passwordErr = $passwordErr2 = "";
$name = $email = $password = $password2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid = true;

    // Name validation
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
        $valid = false;
    } else {
        $name = input_data($_POST['name']);
        if (!preg_match("/^[a-z-' ]{5,}$/i", $name)) {
            $nameErr = "Only alphabet with minimum 5 letters";
            $valid = false;
        }
    }

    // Email validation
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
        $valid = false;
    } else {
        $email = input_data($_POST['email']);
        if (!preg_match("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/", $email)) {
            $emailErr = "Invalid email format";
            $valid = false;
        }
    }

    // Password validation
    if (empty($_POST['password'])) {
        $passwordErr = "Password is required";
        $valid = false;
    } else {
        $password = input_data($_POST['password']);
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)) {
            $passwordErr = "Minimum 8 characters, at least 1 uppercase letter, 1 lowercase letter, and 1 number";
            $valid = false;
        }
    }

    // Confirm Password validation
    if (empty($_POST['password2'])) {
        $passwordErr2 = "Please confirm your password";
        $valid = false;
    } else {
        $password2 = input_data($_POST['password2']);
        if ($password !== $password2) {
            $passwordErr2 = "Passwords do not match";
            $valid = false;
        }
    }
    // include 'viewblog_connect.php';

    // If all inputs are valid, proceed with database insertion
    if ($valid) {
        $sql = "INSERT INTO registration (name, email, password) VALUES ('$name', '$email', '$password')";
        
        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Data inserted successfully');</script>";
            echo "<script>window.open('login.php', '_self');</script>";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}

function input_data($data) {
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
    <title>Registration Real</title>
    <style>
        body{
            background-image: url(./images/plane.jpg);
            background-size: 100vw 100vh;
            background-repeat: no-repeat;
        }
        .container{
            position: absolute;
            top: 10%;
            left: 40%;  
        }
        h2{
            position: relative;
            left: 80px;
        }
        input{
            width: 22vw;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .submit{
            width: 22.5vw;
        }
        button{
            position: fixed;
            right: 5%;
            top: 5%;
        }
    </style>
</head>
<body>
    <button><a href="login.php">Login</a></button>

    <div class="container">
        <h2>Registration</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            Name: <br>
            <input type="text" name="name" value="<?php echo $name;?>" placeholder="Type your name"> 
            <span class="error">* <?php echo $nameErr; ?></span>
            <br><br>

            Email: <br>
            <input type="text" name="email" value="<?php echo $email;?>" placeholder="Type your email"> 
            <span class="error">* <?php echo $emailErr; ?></span>
            <br><br>

            Password:<br>
            <input type="password" name="password" value="<?php echo $password;?>" placeholder="Type Password"> 
            <span class="error">* <?php echo $passwordErr; ?></span>
            <br><br>

            Confirm Password: <br>
            <input type="password" name="password2" placeholder="Confirm Password"> 
            <span class="error">* <?php echo $passwordErr2; ?></span>
            <br><br>

            <input class="submit" type="submit" name="submit" value="Submit"> 
        </form>
    </div>
</body>
</html>



