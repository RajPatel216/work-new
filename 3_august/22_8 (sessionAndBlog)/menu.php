<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        *{  
            margin:0px;
            padding:0px;
            background-image: url('./images/plane.jpg');
            background-repeat:no-repeat;
            background-size:100%;   
        }

        body{
            display: flex;
            align-items: center;
        }

        #box{
          border-radius:8px;
          border: 1px solid black;
          background: transparent;
          box-shadow: 3px 3px 10px;
          width:15em;
          height:15em;
          position:relative;
          left:40%;
          top:110px;
          box-sizing: border-box;
        }

        a{
            text-decoration: none;
            color:black;
            width:120px;
            background: transparent;
            display:block;
            width:100%;
        }

        button{
            background: transparent;
            width:150px;
            height:24px;
            margin:5px;
            border:1px solid black;
            box-shadow: 2px 2px 5px;
            border-radius:3px;
        }
        button:hover{
            background-color: rgb(240, 241, 245);
            box-shadow:2px 2px 10px;
        }
        .btns{
            margin-top:20px;
            padding-left:40px;
            background:transparent;
        }
        p,i,b{
            background: transparent;
            margin:22px 5px 0px 25px;
        }
   
        h3{
            background: transparent;
            text-align: center;
            margin-top:10px
        }
    </style>
</head>
<body>
    <div id="box">
        <h3>HOME</h3>

        <p>Welcome to Stark Industries <br> <i><b> I am Iron Man </b></i></p>
         <div class="btns">
         <button><a class='check' href="List.php">List Page</a></button>
         <button><a href="registration.php">Registration</a></button>
         <br>
         <button><a href="login.php">Login</a></button>
        </div>
    </div>
</body>
</html>