<?php
include 'dbConnect.php';
// -------------------------------------------------------------
if(isset($_POST['submit'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from user where email='$email' and password='$password'";
   
    $que=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($que)>0){
        echo "<script>alert('login successfully')</script>";
        echo "<script>window.open('List.php','_self')</script>";
        $result = $que->fetch_assoc();
       
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['email'] = $email; 
       
    }
    else{
        echo "<script>alert('wrong data')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    mysqli_close($con);
    exit();
}

?>