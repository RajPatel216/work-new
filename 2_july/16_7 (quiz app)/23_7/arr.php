<!--              function inside an array               -->

<?php


function lol(){
    'vande matarm';
}

$arr = ['hello','world',lol()];

echo $arr[2]();
?>
