<?php 
$con=mysqli_connect("localhost","root","","blog");

if (!$con) {
  die("Connection failed: " .mysqli_error($con));
}
else{
  echo "";
}

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $image =$_POST['fileToUpload'];
    $txtarea = $_POST['txtarea'];

    $sql="insert into data(title,image,description) values('$title','$image','$txtarea')";

    if(mysqli_query($con,$sql)){
        // echo "<script>alert('data inserted successfully')</script>";
        echo "success";
        echo "<script>window.open('blog.php','_self')</script>";
    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
}

include 'upload.php';