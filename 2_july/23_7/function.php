<?php 

function printt(){
    echo "hello worlddd";
}

function forr($a){

    for($a=0;$a<5;$a++){
        echo $a;
    }
}

// for($i=0;$i<5;$i++){

    // printt();
    $i=0;
    forr($i);
    // echo $i+1;
    // echo '<br>';
// }

//      the sum function

function sum($a,$b){
    return $a+$b;
}

echo "::::5 and 7 is::" . sum(5,7) . "<br>";
echo "::::6 and 4 is::" . sum(6,4);


?>