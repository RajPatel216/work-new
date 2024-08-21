<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_GET['favcolor'])) {
    $favcolor = $_GET['favcolor'];
} else {
    $favcolor = ''; }

// Check if 'favanimal' exists in the $_GET array
if (isset($_GET['favanimal'])) {
    $favanimal = $_GET['favanimal'];} 
    else { $favanimal = ''; }
?>

</body>
</html>
