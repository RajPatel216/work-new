<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

        .btn{
            border:1px solid black;
            width:150px;
            height:24px;
            background:transparent;
            margin:5px;
            position: absolute;
            left:20px;
            border-radius:5px;
            
        }

        a{
            text-decoration: none;
            color:black;
            background: transparent;
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
            background-color: rgb(248, 240, 228);
            box-shadow:2px 2px 10px;
        }
        p,i,b{
            background: transparent;
            margin:15px 6px 0px 24px;
        }
        .btns{
            margin-top:30px;
            padding-left:40px;
            background:transparent;
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
         <button><a href="List.php">Main Menu</a></button>
         <button><a href="registration.php">Registration</a></button>
         <br>
         <button href="login.php"><a href="login.php">Login</a></button>
        </div>
    </div>
</body>
</html>