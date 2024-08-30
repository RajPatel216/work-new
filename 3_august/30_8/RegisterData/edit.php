<html>
    <head>
    </head>
    <body>
<form action="" method="POST">

<div class="container" style="width: 300px;" >

<div style="border: 1px solid; padding: 25px;">
    <h2>Edit</h2>
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name"><br>
    
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
    <input type="file" name='file' accept="image/jpg, image/jpeg, .doc"><br><br>
    
    <label for="">City:</label><br>
    <select name="city">
        <option name="city" value="ahmedabad" selected>Ahmedabad</option>
        <option name="city" value="surat">Surat</option>
        <option name="city" value="patan">Patan</option>
        <option name="city" value="patan">Mahesana</option>
        <option name="city" value="patan">kachh</option>
        <option name="city" value="patan">rajkot</option>
    </select>
    <br><br>

    <button type='submit' name='submit' value='submit' style='width:100px,height:100px'>Submit</button>
</div>
</form>

    </body>
</html>