<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table{
        border-collapse:collapse;
      }
      img{
        width:25px;
        height:20px;
      }
    </style>
</head>
<body>

<table border='1' class="tbl">

    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <tr>
        <td>1</td>
        <td class='txt'>hello</td>
        <td><img class="edit"  onclick='edit()' src="./images/edit.jpg" alt="edit"></td>   
        <td><img class="delete"  onclick='dlt()' src="./images/delete.png" alt="delete"></td>   
   
    </tr>
    <tr>
        <td>2</td>
        <td class='txt'>World</td>
        <td><img class="edit"  onclick='edit()' src="./images/edit.jpg" alt="edit"></td>   
        <td><img class="delete"  onclick='dlt()' src="./images/delete.png" alt="delete"></td>
    </tr>
    <tr>
        <td>3</td>
        <td class='txt'>Record</td>
        <td><img class="edit"  onclick='edit()'  src="./images/edit.jpg" alt="edit"></td>   
        <td><img class="delete" onclick='dlt()' src="./images/delete.png" alt="delete"></td>
    </tr>
</table>
    
<script>
    function edit(){
         let row=document.querySelector('.txt')
         row.innerText="";
    }
    function dlt(){
         document.querySelector('.tbl').deleteRow(-1);
    }




</script>
</body>
</html>