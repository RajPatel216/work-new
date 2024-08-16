<?php 

$numbers = array(
    array(10, 20, 30, 40, 50),
      array(15, 30, 45, 60, 75),
      array(20, 40, 60, 80, 100),
      array(25, 50, 75, 100, 125),
      array(30, 60, 90, 120, 150)
);  
?>

<html>
<body>
    
    <table border=1>
        <tr>
        <?php foreach ($numbers as $number) { ?>

    <?php foreach ($number as $num) { ?>
<td> <?php echo $num ?> </td>
<?php } ?>

</tr>
<?php } ?>
</table>
</body>
</html>