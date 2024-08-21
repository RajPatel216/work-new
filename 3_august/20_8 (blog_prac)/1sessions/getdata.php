<?php


session_start();

if(isset($_SESSION['username'])){
    
    echo "welcome".$_SESSION['username'];
    echo "<br> your favourite category is".$_SESSION['password'];
    echo "<br>";
}
else{
    echo "plz login to continue";
}



// session_start();
// if(isset($_SESSION['username'])){
//     echo "welcome".$_SESSION['username'];
//     echo "<br> your favorite category is".$_SESSION['favCat'];
//     echo "<br>";
// }
// else{
//     echo "plz login to continue";
// }

?>