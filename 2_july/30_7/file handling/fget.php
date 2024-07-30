<!-- "fgets" alkhi line word by word      or      "fgetc" akhi line character by character     -->

<?php

$c =  fopen("read.txt","r");
// echo fgets($c);      //only first line print kare
// echo fgets($c);      //only seconde ... ... ...
// echo fgets($c);      //only third  ...  ...  ...   

echo fgetc($c);         //print line character by character


while($a=fgets($c)){
    echo $a;
    // break                khali first line ke first character print karva hoy to....
 }

?>