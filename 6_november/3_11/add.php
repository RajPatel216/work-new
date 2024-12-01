<!-- < ?php
   include 'connect.php';
   if(isset($_POST['submit'])){

    var_dump($_POST); 
     $name = $_POST['firstname'];
     $email = $_POST['email'];

     $sql="insert into users(firstname,email) values('$name','$email')";
   
     if(mysqli_query($con,$sql)){
        echo "<script>alert('data inserted successfully')</script>";
        echo "<script>window.open('view.php','_self')</script>";
     }
     else{
        echo "error:".mysqli_error($con);
     }
     mysqli_close($con);
    }

?> -->
<!-- <html>
  <form action="add.php" method="post">
  <label for="name">Name</label>
  <input type="text" id="name" name="firstname"><br><br>
  <input type="email" name="email" ><br><br>
  <input type="submit" name="submit" value="login">
  </form>
</html> -->



<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    // Show the submitted data for debugging
    // var_dump($_POST); // This will show you what is being submitted

    $name = $_POST['firstname'];
    $email = $_POST['email'];

    // Validate input
    if (!empty($name) && !empty($email)) {
        $sql = "INSERT INTO users (firstname, email) VALUES ('$name', '$email')";

        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Data inserted successfully');</script>";
            echo "<script>window.open('view.php', '_self');</script>";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Please fill in both fields.";
    }
    
    mysqli_close($con);
}
?>

<html>
    <form action="add.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="firstname" required><br><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</html>
