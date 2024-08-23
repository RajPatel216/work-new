<?php include 'List_connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <style>
        body{
            background-image: url(./images/plane.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
        }
        button,a{
            color:black;
            text-decoration:none;
        }
        h2{
            position: fixed;
            top:20px;
            left:23em;
        }
        .container{
            width:57vw;
            height:67vh;
            border:1px solid black;
            position:fixed;
            top:120px;
            left:15em;
            overflow-y: auto;
            /* overflow-x: hidden;   */
            }
            
            .btn{
                position: fixed;
                top:25px;
                right:50px;
                text-decoration:none;
                color:black;
            }
            .btns{
                position:fixed;
                top:90px;
                left:45em;
                
            }
            table{
                width: 99.9%;
                height:80vh;   
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
  
        input[type="text"], input[type="email"]{
            width: 100%;
            padding: 5px;
        }
    </style>
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
            <td><?php echo $counter++; ?></td>
            <td contenteditable="false"><?php echo $x[0]; ?></td> 
            <td><img src="uploads/<?php echo $x[1];?>" alt="image" style="height:30px; width:40px;"></td> 
            <td contenteditable="false"><?php echo $x[2]; ?></td> 
        </tr>
        <?php } ?>
    </table>
    </div>

</body>
</html>

