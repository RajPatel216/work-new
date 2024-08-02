<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin-left:450px;
        }
    </style>
</head>
<body>
    <form action="2mysql.php" method="post">
    <table border="1">
        <th>
            <td>Table Head</td>
        </th>
        
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" id="name" placehodler="Type your name"></td>
        </tr>
        
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" id="email" placehodler="Type your email"></td>
        </tr>
       
        <tr><td><button name="submit" value="submit">submit</button></td></tr> 
    </table>
</form>
</body>
</html>
