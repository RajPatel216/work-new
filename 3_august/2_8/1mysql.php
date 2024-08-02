<!-- 3 -->

<?php
include 'database.php';

if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
  
        $sql="insert into student(name,email) values('$name','$email')";

        if(mysqli_query($con,$sql)){
              echo "<script>alert('new record inserted')</script>";
        }
        else{
            echo "error:".mysqli_error($con);
        }
        mysqli_close($con);
    }
?>