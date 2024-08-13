<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
            width:110px;
            height:42px;
            border-radius:6px;
            font-weight:700;
            border:none;
            color:white;
            font-size:18px;
        }
        .addblog:hover{
            background-color:rgb(15, 192, 15);
        } 
        #container{
            /* border:1px solid blue; */
            display: flex;
            margin-top:6%;
            justify-content: center;
        }

        form{
            /* border:1px solid red; */
            background-color: rgb(229, 230, 231);
            position: relative;
            width:30vw;
            height:80vh;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border-radius: 10px;
        }
        .title{
            background-color:rgb(229, 230, 231);
            border-radius:3px;
            border:1px solid black;
            width:100px;
        }
        .image{
           margin:10px;
           
        }
        textarea{
            border-radius:6px;
            padding:5px;
        }
        .submit{
          margin:4%;
        }
        
        </style>

</head>
<body>
    <!-- <button class="addblog">Add blog</button> -->
    <a href="viewblog.php"><button class="viewblog" id="addblog">View Blogs</button></a>
   
    <div id="container">
        <form action="blog2.php" method="POST" enctype="multipart/form-data">
       
        <h3><input class="title" type="text" name="title" placeholder="&nbsp &nbsp &nbsp T I T L E"></h3>

        <input class="image" type="file" name="fileToUpload" id="fileToUpload">
        
        <textarea id="txtarea" name="txtarea" rows="14" cols="36"></textarea>
        
        <input class="submit" type="submit" value="Submit" name="submit">
       </form>
    </div>

</body>
</html>
