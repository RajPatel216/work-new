<?php include('final data.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <link rel="stylesheet" href="final blog.css">
</head>

<body>
    <header class="topbottom">
        <i>
            <h1>Blogs</h1>
        </i>
    </header>
    <h3 class="backto"><a href="final registration.html">Register</a></h3>

    <main>

   <?php  foreach($cars as $key => $value) { ?>
    <div class="sec1">
            <div class="blog">
               <h2><?php echo $value[0]; ?></h2>
               <?php echo $value[1]; ?>
               <p><?php echo $value[2]; ?></p>
               <h4><?php echo $value[3]; ?></h4>
            </div>
        </div>
    <?php }
    
    ?>
</main>


    <footer class="topbottom">
        <h4>all rights reserved ! </h4>
    </footer>

</body>

</html>