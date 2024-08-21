<?php include 'viewblog_connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        body{
            background-image:url(./images/plane.jpg)
        }
        .addblog{
            position:fixed;
            left:30px;
            top:20px;
            background-color:#10e310;
            width:110px;
            height:42px;
            border-radius:6px;
            font-weight:700;
            border:none;
            color:white;
            font-size:18px;
        }

        .viewblog{
            position:fixed;
            right:30px;
            top:20px;
            background-color:#10e310;
            width:100px;
            height:35px;
            border-radius:6px;
            font-weight:700;
            border:none;
            color:white;
            font-size:15px;
        }
        .addblog:hover{
            background-color:rgb(15, 190, 15);
        } 

        table{
            width:40vw;
            height:10vh;
            /* text-align:center; */
            
        }
        .center {
            margin-left: auto;
            margin-right: auto;
            
        }
        td{
            text-align:left;
            /* vertical-align:top; */
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
      <a href="blog.php"><button class="viewblog" id="addblog">Add Blogs</button></a>
      <br>
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
            <td contenteditable="false"><?php echo $x[0]; ?></td> 
            <td><img src="uploads/<?php echo $x[1];?>" alt="image" style="height:30px; width:40px;"></td> 
            <td contenteditable="false"><?php echo $x[2]; ?></td> 
            <td><img class="icon edit" src="./images/edit.jpg" alt="edit"></td>   
            <td><img class="icon delete" src="./images/delete.png" alt="delete"></td>   
        </tr>
        <?php } ?>
    </table>
 
    <script>
        //for delete functionality
        document.querySelectorAll('.delete').forEach(function(delBtn) {
            delBtn.addEventListener('click', function() {
                let text = "Press a button!\nEither OK or Cancel.";
                if (confirm(text) == true) {
                    this.closest('tr').remove();
                } else {
                }
            });
        });
         
        //for edit functionality
        document.querySelectorAll('.edit').forEach(function(editBtn) {
            editBtn.addEventListener('click', function() {
                let cells = this.closest('tr').querySelectorAll('td[contenteditable="false"]');
                let editOn = 1
                // Toggle editable state
             
                cells.forEach(function(cell) {
                    cell.contentEditable = cell.contentEditable === "false" ? "true" : "false";
                    cell.style.backgroundColor = cell.contentEditable === "true" ? "" : "";
                    cell.style.border = cell.contentEditable === "true" ? "2px solid black" : "";
                });

                // Change the icon
                if (editBtn.src.includes('edit.jpg')) {
                    editBtn.src = './images/edit.jpg'; // Switch to save icon when editing
                } else {
                    editBtn.src = './images/edit.jpg'; // Switch back to edit icon after saving
                }
            });
        });
    </script>

</body>
</html>