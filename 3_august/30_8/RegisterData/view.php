<p>Hello</p>

<?php
print_r($_POST);
echo "<br>";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['radio'];
    $hobby=implode(", ",$_POST['hobby']);
    $bio=$_POST['bio'];
    $city=$_POST['city'];
}
?>
