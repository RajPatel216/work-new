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
        .icon{
            width:30px;
            height:30px;
            margin:0px 15px 0px 30px;
            
            box-sizing:border-box;
        }
    </style>
</head>
<body>
    <table border='1' class="center">
        
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
        <?php foreach($info as $x )  { ?>
        <tr>
            <td> <?php echo $x[0]; ?></td>  
            <td> <img src="<?php echo htmlspecialchars($row[1]); ?>" alt="image"  > </td>  
            <td> <?php echo $x[2]; ?> </td>
            <td> <img class='icon' src='./images/edit.jpg' alt='editt'></td>
            <td> <img class='icon' src='./images/delete.png' alt='deletee'></td>
            <br>
        </tr>
        <?php } ?>
</table>
</body>
</html>