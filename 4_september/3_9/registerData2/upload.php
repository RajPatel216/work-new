<?php
$target_dir = "./files/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
?>