<?php include 'viewblog_connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Blogs</title>
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
        .btns{
            position:fixed;
            right:5%;
            top:5%;
        }
        
    </style>
</head>
<body>
<div class="btns">
    <a href="List.php"><button class="viewblog" id="addblog">Main Menu</button></a>
    <a href="blog.php"><button class="viewblog" id="addblog">Add Blogs</button></a>
    </div>
      <h2>Your Blogs</h2>

      <div class="container">
      <table border='1' class="center">  
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th> 
        </tr>
             
        <?php 
        $counter = 1;   
        foreach($info as $x) { ?>
        <tr>
            <td><?php echo $counter++; ?></td>
            <td><?php echo $x[0]; ?></td> 
            <td><img src="uploads/<?php echo $x[1];?>" alt="image" style="height:30px; width:40px;"></td> 
            <td><?php echo $x[2]; ?></td> 
            <td><a href='update.php?id=<?php echo $id;?>'><img class="icon edit" src="./images/edit.jpg" alt="edit"></a></td>   
            <td><img class="icon delete" src="./images/delete.png" alt="delete"></td>   
        </tr>
        <?php } ?>
    </table>
</div>

<script>
    
        //for delete functionality
        document.querySelectorAll('.delete').forEach(function(delBtn){
            delBtn.addEventListener('click', function() {
                let text = "Press a button!\nEither OK or Cancel.";
                if (confirm(text) == true) {
                    this.closest('tr').remove();
                    <?php DELETE * FROM blogs WHERE user_id  ?>
                }
            });
        });
           
           
           
           
           
           </script>

</body>
</html>