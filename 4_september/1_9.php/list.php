<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>All Blogs</h2>
    <br>
        <div class="btns">
            <form action="" method="post">
            <button type="submit" name="finish" value="done">Log out</button>
            <button><a href="menu.php">Home</a></button>
            <button><a href="blog.php">Add Blog</a></button>
        </form>
    </div>
 <div class="container">
    <table border='1' class="center">  
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
        </tr>
             
        <?php 
        $counter = 1;
        foreach($info as $x) { ?>
        <tr>
            <td><?php echo $x[0] ?></td>
            <td contenteditable="false"><?php echo $x[1]; ?></td> 
            <td><img src="uploads/<?php echo $x[2];?>" alt="image" style="height:31px; width:42px;"></td> 
            <td contenteditable="false"><?php echo $x[3]; ?></td> 
        </tr>
        <?php } ?>

    </table>
    </div>
</body>
</html>