<?php

include 'dbConnect.php';

$sql = "SELECT title,image,description FROM blogs where user_id = ".$_SESSION['user_id'];
$sql = "SELECT * FROM `blog` WHERE Id=".$_GET['id'];



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

$rowstring=''; 
while($row = mysqli_fetch_assoc($result)){
  $id=$row['id'];
  $fldName=$row['title'];
  $fldEmail=$row['image'];
  $fldPhone=$row['description'];

  $rowstring.='<hr/><div class="row">
  <div>'.$id.'</div>
  <div>'.$fldName.'</div>
  <div>'.$fldEmail.'</div>
  <div>'.$fldPhone.'</div>
  <div>'.$fldMessage.'</div>
  <div><a href="update.php?id='.$id.'">Update</a> | <a href="delete.php?id='.$id.'">Delete</a></div>
  </div>';
  }
  echo $rowheading.$rowstring; // concat row heading and data string and print.
  
  else
  {
  echo "There is no records in our database?";
  
  }

mysqli_close($con);
?>

