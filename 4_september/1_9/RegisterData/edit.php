<?php
include 'connect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query="select * from users where id=".$id;
 $result = mysqli_query($con, $query);
 if($result->num_rows > 0){
        $row=mysqli_fetch_assoc($result);
        $hobby = explode(',', $row['hobby']); 
    } 
}
//----------------------------------------------------------------- edit functionality

if(isset($_GET['id'])){
    $id = $_GET['id'];  
if(isset($_POST['submit'])){
    
        include 'upload.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['radio'];
        $hobby= implode(", ",$_POST['hobby']);
        $bio = $_POST['bio'];
        $filename=$_FILES["file"]['name'];
        $city=$_POST['city'];
    
    $query2="update users set name = '$name', email='$email', gender='$gender', hobby='$hobby', bio='$bio', file='$filename', city='$city' where id=".$id;
   
    $result = mysqli_query($con,$query2);
    if(!$result){
        die("query Failed".mysqli_error());
    }else{
        
        echo "Inserted";
        header('location: list.php');   
        exit();
    }
}
}
?>

<html>
    <head>
    </head>
    <body>
<form action="edit.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">

<div class="container" style="width: 300px;" >
<div style="border: 1px solid; padding: 25px;">

    <h2>Edit</h2>
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name" value="<?= isset($row['name'])? $row['name']:""; ?>"><br>

    
    <label for="emaill">Email:</label><br>
    <input type="text" name="email" id="emaill" value="<?= isset($row['email'])? $row['email']:""; ?>"><br><br> 
    
    <label for="radio">Gender:</label><br>
     <input type="radio" name="radio" id="radio1" value="0" <?= (isset($row['gender']) && $row['gender'] == 0) ? 'checked' : '' ?>><span>Male</span>
    <input type="radio" name="radio" id="radio2" value="1" <?= (isset($row['gender']) && $row['gender'] == 1) ? 'checked' : '' ?>><span>Female</span><br><br>
    
    <label for="Hobby">Hobby:</label><br>
    <input type="checkbox" name="hobby[]" id="hobby1" value="0" <?= (isset($hobby) && in_array(0, $hobby)) ? 'checked' : '' ?>><span>Singing</span><br>
    <input type="checkbox" name="hobby[]" id="hobby2" value="1" <?= (isset($hobby) && in_array(1, $hobby)) ? 'checked' : '' ?>><span>Cooking</span><br>
    <input type="checkbox" name="hobby[]" id="hobby3" value="2" <?= (isset($hobby) && in_array(2, $hobby)) ? 'checked' : '' ?>><span>Dancing</span><br><br>
    
    <label>Write bio :</label><br>
     <textarea name="bio" style="width: 150px;"><?= isset($row['bio']) ? htmlspecialchars($row['bio']) : '' ?></textarea><br><br>
    
    <label>Add File:</label><br>
    <input type="file" name='file' accept="image/jpg, image/jpeg, .doc"><br><br>
    
    <label for="">City:</label><br>
    <select name="city">
      <option value="ahmedabad" <?= (isset($row['city']) && $row['city'] == 'ahmedabad') ? 'selected' : '' ?>>Ahmedabad</option>
      <option value="surat" <?= (isset($row['city']) && $row['city'] == 'surat') ? 'selected' : '' ?>>Surat</option>
      <option value="patan" <?= (isset($row['city']) && $row['city'] == 'patan') ? 'selected' : '' ?>>Patan</option>
    </select>
 
    <br><br>

    <button type='submit' name='submit' value='submit' style='width:100px,height:100px'>Submit</button>
</div>
</form>

</body>
</html>














<!--%%%%%%%%%%%%% without isset function code of raj  $$$$$$$$$$$$$$$$$$$$$$$$-->
 <!-- <input type="radio" name="radio" id="radio1" value="0" < ?= ($row['gender'] == 0) ? 'checked' : '' ?>><span>Male</span> -->
<!-- <input type="checkbox" name="hobby[]" id="hobby2" value="1" < ?= in_array(0,$hobby) ? 'checked' : '' ?>><span>Cooking</span><br> -->
 <!-- <textarea name="bio" style="width: 150px;">< ?= htmlspecialchars($row['bio']) ?></textarea><br><br> -->
 <!-- <option value="surat" < ?= ($row['city'] == 'surat') ? 'selected' : '' ?>>Surat</option> -->

 



<!-- 8888888888888888888        back up for select city option    88888888888888888888888888888-->
<!-- <label for="">City:</label><br>
    <select name="city">
        <option name="city" value="ahmedabad" selected>Ahmedabad</option>
        <option name="city" value="surat">Surat</option>
        <option name="city" value="patan">Patan</option>
    </select> -->


    
<!-- 8888888888888888888        back up for select file option    88888888888888888888888888888-->
    <!-- <label>Add File:</label><br>
    <input type="file" name='file' accept="image/jpg, image/jpeg, .doc" value="<?= $row['file']?>"><br><br> -->


<!-- 8888888888888888888        back up for select bio textarea option    88888888888888888888888888888-->
    <!-- <label>Write bio :</label><br>
    <textarea name="bio" width="400px" value="< ?= $row['bio']?>"></textarea><br><br> -->


<!-- ------------------------ backup code real ------------------- -->
    <!-- <form action="edit.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
    <div class="container" style="width: 300px;">
        <div style="border: 1px solid; padding: 25px;">
            <h2>Edit</h2>
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" value="<?= isset($row['name']) ? $row['name'] : ""; ?>"><br>

            <label for="emaill">Email:</label><br>
            <input type="text" name="email" id="emaill" value="<?= isset($row['email']) ? $row['email'] : ""; ?>"><br><br>

            <label for="radio">Gender:</label><br>
            <input type="radio" name="radio" id="radio1" value="0" <?= (isset($row['gender']) && $row['gender'] == 0) ? 'checked' : '' ?>><span>Male</span>
            <input type="radio" name="radio" id="radio2" value="1" <?= (isset($row['gender']) && $row['gender'] == 1) ? 'checked' : '' ?>><span>Female</span><br><br>

            <label for="Hobby">Hobby:</label><br>
            <input type="checkbox" name="hobby[]" id="hobby1" value="0" <?= (isset($hobby) && in_array(0, $hobby)) ? 'checked' : '' ?>><span>Singing</span><br>
            <input type="checkbox" name="hobby[]" id="hobby2" value="1" <?= (isset($hobby) && in_array(1, $hobby)) ? 'checked' : '' ?>><span>Cooking</span><br>
            <input type="checkbox" name="hobby[]" id="hobby3" value="2" <?= (isset($hobby) && in_array(2, $hobby)) ? 'checked' : '' ?>><span>Dancing</span><br><br>

            <label>Write bio :</label><br>
            <textarea name="bio" style="width: 150px;"><?= isset($row['bio']) ? htmlspecialchars($row['bio']) : '' ?></textarea><br><br>

            <label>Add File:</label><br>
            <input type="file" name='file' accept="image/jpg, image/jpeg, .doc"><br><br>

            <label for="">City:</label><br>
            <select name="city">
                <option value="ahmedabad" <?= (isset($row['city']) && $row['city'] == 'ahmedabad') ? 'selected' : '' ?>>Ahmedabad</option>
                <option value="surat" <?= (isset($row['city']) && $row['city'] == 'surat') ? 'selected' : '' ?>>Surat</option>
                <option value="patan" <?= (isset($row['city']) && $row['city'] == 'patan') ? 'selected' : '' ?>>Patan</option>
            </select>

            <br><br>

            <button type='submit' name='submit' value='submit' style='width:100px;height:100px'>Submit</button>
        </div>
    </div>
</form>

</body>
</html> -->