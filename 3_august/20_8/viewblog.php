<?php include 'viewblog_connect.php' ?>
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
        /* .icon{
            height:30px;
            width:30px;
            margin-left:15px;
        } */
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
    <table border='1' class="center">
        
        <tr>
             <th>#</th>
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
            <!-- <td>  echo $x[0];</td>     add php-->
            <td><img src="uploads/<?php echo $x[1];?>" alt="image" style="height:30px; width:40px;"></td> 
            <td contenteditable="false"><?php echo $x[2]; ?></td> 
            <!-- <td>  echo $x[2];  add php</td>   -->
            <!-- <td><img class="icon" src="./images/edit.jpg" alt="image"></td>   
            <td><img class="icon" src="./images/delete.png" alt="image"></td>    -->
            <td><img class="icon edit" src="./images/edit.jpg" alt="edit"></td>   
            <td><img class="icon delete" src="./images/delete.png" alt="delete"></td>   
        </tr>
        <?php } ?>
    </table>
 
    <script>
        // Function to handle row deletion
        document.querySelectorAll('.delete').forEach(function(delBtn) {
            delBtn.addEventListener('click', function() {
                this.closest('tr').remove();
            });
        });

        // Function to handle row editing
        document.querySelectorAll('.edit').forEach(function(editBtn) {
            editBtn.addEventListener('click', function() {
                let row = this.closest('tr');
                let cells = row.querySelectorAll('td[contenteditable="false"]');
                
                // Toggle editable state
                cells.forEach(function(cell) {
                    cell.contentEditable = cell.contentEditable === "false" ? "true" : "false";
                    cell.style.backgroundColor = cell.contentEditable === "true" ? "#f0f0f0" : "";
                });

                // Change the icon
                if (editBtn.src.includes('edit.jpg')) {
                    editBtn.src = './images/save.png'; // Switch to save icon when editing
                } else {
                    editBtn.src = './images/edit.jpg'; // Switch back to edit icon after saving
                }
            });
        });
    </script>

</body>
</html>