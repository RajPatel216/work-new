<?php

$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

// if(isset($_POST["submit"]) && !empty($_FILES["file"]["tmp_name"]))  {
    
//     $check = getimagesize($_FILES["file"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//       } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//       }
// }

?>




<!-- ------------------------------------------------- old code for image -->
<!-- if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";die;
  }
} -->