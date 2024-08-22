<?php 

include 'dbConnect.php';

if(isset($_POST['submit'])){
  include 'upload.php';
  $title = $_POST['title'];
  $image =$_FILES["fileToUpload"]["name"];
  $txtarea = $_POST['txtarea'];
  $user_id = $_SESSION['user_id'];
  
  
  $sql="insert into blogs(title,user_id,image,description) values('$title','$user_id','$image','$txtarea')";

  if(mysqli_query($con,$sql)){

    echo "<script>alert('data inserted successfully')</script>";
    echo "<script>window.open('blog.php','_self')</script>";
  }
  else{
    echo "error:".mysqli_error($con);
  }
  mysqli_close($con);
}
