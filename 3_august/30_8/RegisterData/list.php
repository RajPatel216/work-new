<?php
include 'connect.php';
$sql = "select * from users";
$result = mysqli_query($con, $sql);

?>

<html>
<head>
<title>List</title>
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
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {  
               
                $gender = ($row['gender'] == 0) ? "Male" : "Female";

                $hobbies = explode(",", $row['hobby']);
                $hobbyText = [];

                if (in_array("0", $hobbies)) $hobbyText[] = "singing";
                if (in_array("1", $hobbies)) $hobbyText[] = "Cooking";
                if (in_array("2", $hobbies)) $hobbyText[] = "Dancing";
                $hobbyDisplay = implode(", ", $hobbyText);
                ?>
                <tr>
                    <td><?=$row['id'] ?></td>
                    <td><?=$row['name'] ?></td>
                    <td><?=$row['email'] ?></td>
                    <td><?=$gender ?></td>
                    <td><?=$hobbyDisplay ?></td>
                    <td><?=$row['bio'] ?></td>
                    <td><?=$row['file'] ?></td>
                    <td><?=$row['city'] ?></td>
                    <td><a href="edit.php?id=<?=$row['id'] ?>"><button type='submit' value='edit'>Edit</button></a></td>
                    <td><button type='submit' value='delete'>Delete</button></td>
                </tr>
                <?php }
            } ?>
</table>
</body>
</html>








 <!-- if($hobbies == '0'){
 $hobbyText[] = "Singing";
    }
    else if($hobbies == '1'){
        $hobbyText[] = "cooking";
    }else {
    } 
    $hobbyText[]="dancing"; -->