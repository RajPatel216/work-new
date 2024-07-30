<?php

$a = fopen("fwrite2.txt",'w');                     // write function overwrite file data
fwrite($a,'this is another contect 1');
 
$b = fopen("fwrite2.txt",'a');
fwrite($b,' this is    a p p e n d   version');           // append function add new data into old file

fclose($a);
?>
