
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

    <form  method="POST" action="2.php">
        Name: <input type="text" name="name" ><br><br>
        Email: <input type="text" name="email"><br><br>
        
        <input type="checkbox" name="skills[]" value="cpp"><spam>CPP</spam>
           <br><br>
           <input type="checkbox" name="skills[]"  value="php"><spam>php</spam>
           <br><br>
           <input type="checkbox" name="skills[]" value="py"><spam>python</spam>
           <br><br>
           <input type="checkbox" name="skills[]" value="html"><spam>html</spam>
           <br><br><hr>
           <input type="radio" name="gender" value="male"><spam>Male</spam>
           <br><br>
           <input type="radio" name="gender" value="female"><spam>Female</spam>
           <br><br>
           <select name="city">
            <option>Select your city</option>
            <option value="delhi">Delhi</option>
            <option value="amd">amd</option>
            <option value="goa">goa</option>
           </select>
           <br>
           <hr>
           <textarea name="bio" id=""></textarea>
           <br><br>
           <button>Log in nai register pela</button>
        
    </form>

</body>

</html>


   