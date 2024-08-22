<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="submit" value="print">Print</button>
        <button type="submit" name="finish" value="done">Finish</button>
    </form>

    <?php
    session_start();
    if (isset($_POST['submit']) && $_POST['submit'] === 'print') {
        if (isset($_SESSION['naam']) && isset($_SESSION['emaill'])) {
            echo "Name: " . $_SESSION['naam'] . "<br>";
            echo "Email: " . $_SESSION['emaill'] . "<br>";
        } else {
            echo "Session variables are not set.";
    }
    }
 
    if (isset($_POST['finish']) && $_POST['finish'] === 'done') {
        session_unset();
        session_destroy();
        echo "Session has been destroyed.";   
    }
    ?>  

</body>
</html>
