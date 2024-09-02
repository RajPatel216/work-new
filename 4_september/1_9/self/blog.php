<?php

include 'dbconnect.php';
if(isset($_POST['submit'])){
    include 'upload.php';
    $title = $POST['title'];
    $image = $_files['fileToUpload']['name'];
    $txtarea = $_POST['txtarea'];
    $user_id = $_SESSION['user_id'];

    $sql="insert into blogs(title,user_id,image,description) value('$title','$user_id','$image','$txtarea')";

    if(mysqli_query($con,$sql)){
        echo "<script>alert<'data inserted successfully')</scirpt>";
        echo "<script>window.open('blog.php','_self')</script>";
    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <style>
        body{
            background-image:url(./images/plane.jpg);
        }
        h2{
            position: fixed;
            top:20px;
            left:23em;
            margin:0px 0px 5px 0px;
        }
        #container{
            margin:6%;
            display: flex;
            justify-content: center;
            height:23em;
        }
        form{
            background-color: rgb(205, 208, 211);
            position: relative;
            width:22em;
            height:23em;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border-radius: 10px;
        }
        .title{
            background-color:rgb(229, 230, 231);
            border-radius:3px;
            border:1px solid black;
            width:100px;
        }
        .image{
           margin:10px 0px 10px 80px;
           
        }
        textarea{
            border-radius:6px;
            padding:5px;
        }
        .submit{
          margin:4%;
        }
        .btns{
            position:fixed;
            right:5%;
            top:5%;
        }
        </style>
</head>
<body>
  <div class="btns">
    <a href="List.php"><button class="viewblog" id="addblog">Main Menu</button></a>
    <a href="viewblog.php"><button class="viewblog" id="addblog">Your Blogs</button></a>
  </div>
    
  <h2>Blog</h2>
    
  <div id="container">

   <form action="" method="POST" enctype="multipart/form-data">
      <div>
        <label for="title">Title:</label>
        <input class="title" type="text" name="title" id="title">
      </div>

        <input type="file" name="fileToUpload" id="fileToUpload">
     
      <div>
        <textarea id="txtarea" name="txtarea" rows="14" cols="36"></textarea>
      </div>  

      <div>
        <input class="submit" type="submit" value="submit" name="submit">
      </div>

    </form>
  </div>
</body>
</html>