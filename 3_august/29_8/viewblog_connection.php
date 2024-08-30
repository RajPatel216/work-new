<?php

include 'dbConnect.php';

if (!isset($_SESSION['user_id'])) {
  die("User not logged in.");
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT id,title,image,description FROM blogs where user_id = ".$_SESSION['user_id'];
$result = mysqli_query($con, $sql);
$info=[];

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
      $info[] = array($row["id"], $row["title"], $row["image"], $row["description"]);
}
 }
else {
}

// mysqli_close($con);
?>


