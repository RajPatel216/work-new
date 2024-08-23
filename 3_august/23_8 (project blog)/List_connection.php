<?php
include 'dbConnect.php';

$sql = "SELECT title,image,description FROM blogs";

$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
      $info[] = array($row["title"], $row["image"], $row["description"]);
  }
} 
else {
  echo "0 results";
}

if (isset($_POST['finish']) && $_POST['finish'] === 'done') {
    session_unset();
    session_destroy();  
    echo "<script>alert('session has been destroyed')</script>";
    echo "<script>window.open('login.php','_self')</script>";
}

mysqli_close($con);
?>

