<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method='POST'>
     <input type="text" name='goku'>
     <br><br><br>
     <!-- <button name='butto' value='set'>s e t</button> -->
     <button name='butto' value='sett'>s e t</button>
     <br><br>
     <button name='butto' value='get'>g e t</button>
     <br><br>
     <button name='butto' value='delete'>d e l</button>


    </form>
</body>
</html>

<?php

session_start();
if(isset($_POST['butto'])){
    
    if($_POST['butto']=='sett'){
        $_SESSION['lol']=$_POST['goku'];
    }

    if($_POST['butto']=='get'){
        echo $_SESSION['lol'];
    }
    if($_POST['butto']=='delete'){
        session_destroy();
    }
}

?>

