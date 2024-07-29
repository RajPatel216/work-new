<?php
$num =0;

try{
    if($num==0){
        throw new Exception('Please insert valid number');
    }
    echo 'answer is '.(8/$num);
}
catch(Exception $e){
    echo $e->getMessage();     //'throwed exception' no message print kare 
    echo '<br>';
    echo $e->getLine();    //kaya number thi exception throw thay a batave kem ke mota code ma khasa exception throw hoe sake !!
    echo '<br>';
    echo $e->getCode();                //kaya number thi whole code chalu thay 6e a batave
    echo '<br>';
    echo $e->getFile();    //file location show kare
}
?>