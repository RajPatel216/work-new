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
    </style>
</head>
<body>
    <table border='1' class="center">
        
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
        </tr>
        
        <tr>
            <?php foreach($info as $x)  { ?>
            <td> <?php echo $x[0];?></td>  
            <td> <?php echo $x[1];?></td>  
            <td> <?php echo $x[2];?></td>  
        </tr>
            <?php  }?>
            

    <br><br>
  <?php  ?>

</table>
</body>
</html>