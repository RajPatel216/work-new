<?php
include 'connect.php';

if(isset[$_POST['submit']]){
    include 'upload.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $radio=$_POST['radio'];
    $checkbox= impload(",",$_POST['radio']);
    $bio =$_POST['bio'];
    $file =$_FILES['file']['name'];
    $city=$_POST['city'];

    $sql = "insert into user(name,email,radio,checkbox,bio,file,city) values($name,$email,$radio,$checkbox,$bio,$file,$city)";

    if(mysqli_query($con,$sql)){
      echo "<script>alert('successful')</script>";
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
<form action="" method="POST" enctype="multipart/form-data">  
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
    
    <label for="checkbox">Hobby:</label><br>
    <input type="checkbox" name="checkbox[]" id="hobby1" value="0"><span>Singing</span><br>
    <input type="checkbox" name="checkbox[]" id="hobby2" value="1"><span>Cooking</span><br>
    <input type="checkbox" name="checkbox[]" id="hobby3" value="2"><span>Dancing</span><br><br>
    
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
</div>
</div>
</form>

</body>
</html>

