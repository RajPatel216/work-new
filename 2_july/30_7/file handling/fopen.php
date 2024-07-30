<?php

$f=  fopen("read.txt","r");

if(!$f){
    die("unable to open this !!");
}
$content = fread($f,filesize("read.txt"));
fclose($f);
echo $content;

?>
