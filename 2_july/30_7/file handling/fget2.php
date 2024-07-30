<?php

$e =fopen('read.txt','r');

while($a = fgetc($e)){
    echo $a;
    if($a == "m"){
        break;
    }
}
fclose($e);

?>

