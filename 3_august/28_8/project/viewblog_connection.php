<?php

include 'dbConnect.php';

$sql = "SELECT title,image,description FROM blogs where user_id = ".$_SESSION['user_id'];
$result = mysqli_query($con, $sql);

$info=[];

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
      $info[] = array($row["title"], $row["image"], $row["description"]);
}
}
else {
  echo "0 results";
}

$del = "DELETE FROM employee WHERE userid='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($con);
?>

