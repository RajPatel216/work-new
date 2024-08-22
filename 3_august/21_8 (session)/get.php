<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="hs" value="get">Print</button>
    </form>

    <?php
    session_start();

    if (isset($_POST['hs']) && $_POST['hs'] === 'get') {
        if (isset($_SESSION['naam']) && isset($_SESSION['emaill'])) {
            echo "Name: " . $_SESSION['naam'] . "<br>";
            echo "Email: " . $_SESSION['emaill'] . "<br>";
        } else {
            echo "Session variables are not set.";
        }
    }
    session_unset();
    session_destroy();
    ?>
</body>
</html>
