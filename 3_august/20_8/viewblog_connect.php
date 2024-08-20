<?php
include 'dbConnect.php';

$sql = "SELECT title,image,description FROM data";
$result = mysqli_query($con, $sql);

// $info=[];

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
      $info[] = array($row["title"], $row["image"], $row["description"]);
  }
} 
else {
  echo "0 results";
}

mysqli_close($con);
?>

