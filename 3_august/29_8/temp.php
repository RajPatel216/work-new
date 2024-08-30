


  <tr>
                <td><?php echo htmlspecialchars($id); ?></td>
                <td><input type="text" name="title" value="<?php echo htmlspecialchars($current_title); ?>"></td>
                <td><img src="uploads/<?php echo htmlspecialchars($row['image']); ?>" alt="image" style="height:30px; width:40px;"></td>
                <td><input type="text" name="description" value="<?php echo htmlspecialchars($current_description); ?>"></td>
                <td><a href="update_blog.php?id=<?php echo $id ?>"><img class="icon edit" src="./images/edit.jpg" alt="edit"></a></td>
                <td><button type="submit" name="update_students" value="update" style="width:80px,height:30px">Submit</button></td>
                <td><a href="delete_blog.php?id=<?php echo $id; ?>"><img class="icon delete" src="./images/delete.png" alt="delete"></a></td>
            </tr>






               <!-- <tr>
            <td><?php echo $counter++ ?></td>
            <td> </td> 
            <td><img src="uploads/<?php echo $x[2];?>" alt="image" style="height:30px; width:40px;"></td> 
            <td ></td> 
           <td></td>
            <td><a href="delete_blog.php?id=<?php echo $x[0];?>"><img class="icon delete" src="./images/delete.png" alt="delete"></a></td>   
        </tr>  -->





        <?php 
include 'viewblog_connection.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

 $query="select * from 'blogs' where 'id' =".$id;
 $result = mysqli_query($con, $sql);
 if(!$result){
    die("query Failed".mysqli_error());
 }
else{
    $row=mysqli_fetch_assoc($result);
    // print_r($row);
}

 