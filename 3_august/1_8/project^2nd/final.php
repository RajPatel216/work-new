<?php include('final data.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <link rel="stylesheet" href="final blog.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>

<body>
    <header class="topbottom">
        <i>
            <h1>Blogs</h1>
        </i>
    </header>
    <h3 class="backto"><a href="final registration.html">Register</a></h3>

    <main>
    <div class="container">
    <div class="row">

        <?php  foreach($cars as $key => $value) { ?>
            
         <div class="col-md-12 col-md-12 col-md-12 col-lg-6"> 
           
         <div class="blog">
               <h2><?php echo $value[0]; ?></h2>
               <?php echo $value[1]; ?>
               <p><?php echo $value[2]; ?></p>
               <h4><?php echo $value[3]; ?></h4>
            </div>
        </div>
        
        
    <?php } ?>
    </div>
       

     </div>
</main>


    <footer class="topbottom">
        <h4>all rights reserved ! </h4>
    </footer>

</body>

</html>

