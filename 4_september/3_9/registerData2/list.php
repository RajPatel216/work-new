<?php
include 'connect.php';
$sql="select * from user";
$result = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List File !!!!!!!!!!</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Hobby</th>
            <th>Bio</th>
            <th>File</th>
            <th>City</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    
        <?php
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){

                $gender = ($row['gender']==0) ? "Male" : "Female";

                $hobbies=explode(",",$row['hobby']);
                $hobbyText=[];
                if(in_array("0",$hobbies)) $hobbyText[] ="singing";
                if(in_array("1",$hobbies)) $hobbyText[]= "cooking";
                if(in_array("2",$hobbies)) $hobbyText[]="Dancing";
                $hobbyDisplay =implode(",",$hobbyText);
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $gender ?></td>
                    <td><?= $hobbyDisplay ?></td>
                    <td><?= $row['bio'] ?></td>
                    <td><img src="./files/<?=$row['file']?>" alt="image" style="height:30px; width:40px;"></td>
                    <td><?= $row['city'] ?></td>
                    <td><a href="edit.php?id=<?=$row['id']?>"><button></button></a></td>
                    <td><a href="delete.php?id=<?=$row['id'] ?>"><button></button></a></td>
                </tr>        
            <?php}
        }?>
    </table>
</body>
</html>