<?php

include 'viewblog_connection.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query="select * from blogs where id =". $id;      

      // dont use too much inverted commas like i used ('blogs') it will give you error so use only (blogs)

 $result = mysqli_query($con, $query);
 if($result && mysqli_num_rows($result) > 0){
     $row=mysqli_fetch_assoc($result);
    }
    else {
        echo "Blog not found.";
        exit;
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
if(isset($_POST['update_students'])){
    $title=$_POST['title'];
    $description=$_POST['description'];    

$query2="update blogs set title = '$title', description='$description' where id=".$id;

$result = mysqli_query($con,$query2);
 if(!$result){
    die("query Failed".mysqli_error());
 }else{
   
    header('location: viewblog.php');   
    exit();
 }
}
}
?>

<html>
<head>
<title>The Update</title>
<style>
    body{
        background-image:url(./images/plane.jpg)
    }
    h2{
        position: fixed;
        top:20px;
        left:23em;
    }
    .container{
        width:57vw;
        height:67vh;
        position:fixed;
        top:120px;
        left:15em;
        overflow-y: auto;
        overflow-x:hidden;
        border:none;
    }
    table{
        width:99.9%;
        height:10vh;   
    }
    .center {
        margin-left: auto;
        margin-right: auto; 
    }
    td{
        text-align:center;
        width:100px;
        height:20px;
    }
    th{
        text-align:center;
    }
    .icon{
        height: 30px;
        width: 30px;
        cursor: pointer;
    }
    input[type="text"], input[type="email"]{
        width: 100%;
        padding: 5px;
    }
</style>
</head>
<body>
<h2>Update Blogs</h2>

<form action="" method="post">
<div class="container">
 
    <?php $counter = 1; ?>
    Title: <br>
    <input type="hidden" name='title' value="<?= $row['id'] ?>">
    <!-- <input type="text" name='title' value="<?= isset($row['title'])? $row['title']:""; ?>"> -->
    <input type="text" name='title' value="<?= isset($row['title'])? $row['title']:""; ?>">
    <br><br>
    Description: <br>
    <input type="text" name='description' value="<?= isset($row['description'])? $row['description']:"";  ?>">
    <br><br>
    <button type='submit' name='update_students' value='update' style='width:100px,height:100px'>Submit</button>


</div>
</form>

</body>
</html>
