<?php 

function name($lastname,...$firstname){
    $n=" ";
    
    $len = count($firstname);
    for($j=0;$j<$len;$j++){
        $n = $n."hi, $firstname[$j] $lastname.<br>";
    }
    return $n;
}

$let = name("PATEL","Raj","Dhoon","hiyansh");
echo $let;






// function sum(...$l){
//    $n  = 0;
//    $len = count($l);
//    for($j=0;$j<$len;$j++){
//     $n += $l[$j];
//    }
//    return $n;
// }

//  $para = sum(2,2,2,2,1,1);
//  echo $para;
?>
