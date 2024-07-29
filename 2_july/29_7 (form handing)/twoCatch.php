<!-- more than one catch in tryCatch funtion -->
<?php
$nm=4;
class newexc extends Exception{
       function e(){
        return this->getMessage();
       }
}

try{
    if($nm==0){
      throw new exception("wrong number!!");
    }
    if($nm==4){
      throw new exception("wrong number 4444!!");
    }
    echo 8/$nm;
}

catch(exception $e){
    echo $e->getMessage();
}
catch(newexc $e){
    echo $e->getMessage();
}
?>