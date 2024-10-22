<?php
include 'connect.php';

if(isset($_POST['submit'])){
   include 'upload.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['radio'];
    $hobby= implode(", ",$_POST['hobby']);
    $bio =$_POST['bio'];
    $file =$_FILES["file"]["name"];
    $city=$_POST['city'];

    $sql="insert into user(name,email,gender,hobby,bio,file,city) values('$name', '$email', '$gender', '$hobby', '$bio' ,'$file','$city') ";    
    
    if(mysqli_query($con,$sql)){
      echo "<script>alert('data inserted successfully')</script>";
      echo "<script>window.open('list.php','_self')</script>";
    }
    else{
      echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
} 
?>

<html>
<head> <title>Register Demo</title> </head>

<body>
<form action="" method="POST" enctype="multipart/form-data">     <!-- enctype="multipart/form-data" aa form ma data upload karva use thay!!!!  -->
<div class="container" style="width: 300px;" >

<div style="border: 1px solid; padding: 25px;"> 
    <h2>Add</h2>
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name" placeholder="Enter Name"><br>
    
    <label for="emaill">Email:</label><br>
    <input type="text" name="email" id="emaill" placeholder="Enter Email"><br><br> 
    
    <label for="radio">Gender:</label><br>
    <input type="radio" name="radio" id="radio1" value="0"><span>Male</span>
    <input type="radio" name="radio" id="radio2" value="1"><span>Female</span><br><br>
    
    <label for="Hobby">Hobby:</label><br>
    <input type="checkbox" name="hobby[]" id="hobby1" value="0"><span>Singing</span><br>
    <input type="checkbox" name="hobby[]" id="hobby2" value="1"><span>Cooking</span><br>
    <input type="checkbox" name="hobby[]" id="hobby3" value="2"><span>Dancing</span><br><br>
    
    <label>Write bio :</label><br>
    <textarea name="bio" width="400px"></textarea><br><br>
    
    <label>Add File:</label><br>
    <input type="file" name='file'><br><br>
    
    <label for="">City:</label><br>
    <select name="city">
        <option name="city" value="ahmedabad" selected>Ahmedabad</option>
        <option name="city" value="surat">Surat</option>
        <option name="city" value="patan">Patan</option>
    </select>
    <br><br>
    <button type='submit' name='submit' value='submit'>Submit</button>
  
</form>

</body>
</html>














<!-- ----------------------- Things i've been told to create in a from ---------------------- -->

<!-- 
<label>Title: </label><br>
<input type="text" name='title' value="" placeholder="Enter Title">
<br>

<label>Description: <label><br>
<input type="text" name='description' value="" placeholder="Enter Description">
<br>
 -->


<!--  name   email    gender    hobby    bio     profile      City -->