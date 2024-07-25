<?php

$arr = ['white','green','red'];

//     method 1
// echo $arr[1].'<br>';
// echo $arr[2].'';
// echo $arr[0];



//     method 2

foreach($arr as $c){
    echo "$c, ";
}
echo "<br>";
sort($arr);

// echo "sorted array is:: <br>";
// foreach($arr as $c){
//     echo "$c, ";
// }
echo "<br>";
echo "now in list form <br>";
echo "<ul>";

foreach($arr as $c){
    echo "<li>$c</li>";
}
echo "</ul>";
?>