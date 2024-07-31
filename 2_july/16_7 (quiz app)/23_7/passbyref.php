<?php

function sum(&$value){
    $value = $value + 6;
}

$num = 4;
sum($num);
echo $num;


 
// or            we can use         return $value;
?>


