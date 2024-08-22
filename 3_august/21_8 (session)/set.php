<!DOCTYPE html>
<html>
<body>
<form action="set.php" method="post">
    Name: <br>
    <input type="text" name="name" required>
    <br>
    Email: <br>
    <input type="text" name="email" required>
    <br>
    <button type="submit" name="button" value="submit">Submit</button>
</form>
</body>
</html>

<?php
session_start();

if (isset($_POST['button']) && $_POST['button'] === 'submit') {
    $_SESSION['naam'] = $_POST['name'];
    $_SESSION['emaill'] = $_POST['email'];
    header("Location: get.php");
    exit(); 
}
?>
