<?php include('data copy final2.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <link rel="stylesheet" href="blog.css">
</head>

<body>
    <header class="topbottom">
        <i>
            <h1>Blogs</h1>
        </i>
    </header>
    <h3 class="backto"><a href="registration.html">Register</a></h3>

    <main>
       

    
   <?php  foreach($cars as $key => $value) { ?>

    <div class="sec1">
            <div class="blog">
               
            <h2><?php echo $value['name']; ?></h2>

               <img src="<?php echo $value['image']; ?>" alt="">
              
               <p><?php echo $value['description']; ?></p>
               
               <h4><?php echo $value['author']; ?></h4>

            </div>
        </div>

    <?php } ?>


 </main>


    <footer class="topbottom">
        <h4>all rights reserved ! </h4>
    </footer>

</body>

</html>