<?php 

include 'dbConnect.php';

if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql="insert into users(name,email,password) values('$name' , '$email' , '$password') ";    
      

      if(mysqli_query($con,$sql)){
        echo "<script>alert('Registration Successfull')</script>";
        echo "<script>window.open('login.php','_self')</script>";
        
        //storing sessions 
        $id=mysqli_insert_id($con);
        $_SESSION['user_id'] = $id;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;    
        // print_r($_SESSION);   //if error acqure then print path like this
    }
    else{
      echo "error:".mysqli_error($con);
      echo "error".$sql."<br>".mysqli_error($con);
    }
    mysqli_close($con);
    exit();
  }
?>
    



            <!-- $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password']; -->