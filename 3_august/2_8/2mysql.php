
<?php
include '2db.php';

if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
  
        $sql="insert into collegestu(name,email) values('$name','$email')";

        if(mysqli_query($conn,$sql)){
              echo "<script>alert('new record inserted')</script>";
        }
        else{
            echo "error:".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>