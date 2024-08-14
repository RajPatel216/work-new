<?php 
include 'dbConnect.php';

if(isset($_POST['submit'])){
  include 'upload.php';
  $title = $_POST['title'];
  // move_uploaded_file
  $image =$_FILES["fileToUpload"]["name"];
  $txtarea = $_POST['txtarea'];
  
  $sql="insert into data(title,image,description) values('$title','$image','$txtarea')";
  
  if(mysqli_query($con,$sql)){
    // echo "<script>alert('data inserted successfully')</script>";
    echo "<script>alert('data inserted successfully')</script>";
    echo "<script>window.open('blog.php','_self')</script>";
  }
  else{
    echo "error:".mysqli_error($con);
  }
  mysqli_close($con);
}
