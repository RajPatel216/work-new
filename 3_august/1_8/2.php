<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,td{
            width:400px;
            height:29.9px;
        }

    </style>
</head>
<body>
    <table border='1'>
        <tr>
            <td><?php if(isset($_POST['name'])){echo 'Hello '.$_POST['name'];} ?></td>
        </tr>
        <tr>
        <td><?php if(isset($_POST['name'])){echo $_POST['email'];} ?></td>
        </tr>
        <tr>
        <td><?php if(isset($_POST['name'])){echo implode(', ', $_POST['skills']);} ?></td>
        </tr>
        <tr>
        <td><?php if(isset($_POST['name'])){echo $_POST['gender'];} ?></td>
        </tr>
        <tr>
        <td><?php if(isset($_POST['name'])){echo $_POST['city'];} ?></td>
        </tr>
        <tr>
        <td><?php if(isset($_POST['name'])){echo $_POST['bio'];} ?></td>
        </tr>
    </table>
</body>
</html>


<?php
// print_r($_POST);echo $_POST['email'].'<br>';
//     echo implode(', ', $_POST['skills']).'<br>';
//     echo $_POST['gender'].'<br>';
//     echo $_POST['city'].'<br>';
//     echo $_POST['bio'].'<br>';
// }




?>