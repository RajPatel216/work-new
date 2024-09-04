<?php
include "connect.php";

if(isset($_POST["submit"])){
    include 'upload.php';
    $name=$_POST['name'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration 2</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="container" style="width:300px;">
    <div style="border:1px solid; padding: 25px;">
        <h2>add</h2>
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name"><br>

    <label for="email">Email</label><br>
    <input type="text" name="email" id="email"><br><br>

    <label for="radio">Gender:</label><br>
    <input type="radio" name="radio" id="radio1" value="0"><span>Male</span>
    <input type="radio" name="radio" id="radio2" value="1"><span>Female</span><br><br>

    <label for="checkbox">Hobby:</label><br>
    <input type="checkbox" name="checkbox[]" id="hobby1" value="0"><span>singing</span><br>
    <input type="checkbox" name="checkbox[]" id="hobby2" value="1"><span>cooking</span><br>
    <input type="checkbox" name="checkbox[]" id="hobby3" value="2"><span>dancing</span><br>
   
    <label>Write bio:</label><br>
    <textarea name="bio" width="400px"></textarea><br><br>

    <label>Add File:</label><br>
    <input type="file" name="file"><br><br>

    <label for="">City:</label><br><br>
    <select name="city">
       <option name="city" value="ahmedabad" selected>Ahmedabad</option>
       <option name="city" value="surat">Surat</option>
       <option name="city" value="patan">Patan</option>
    </select>
    <br><br>
    <button type="submit" name="submit" value="submit">Submit</button>
</div>
</div>
</form>
</body>
</html>