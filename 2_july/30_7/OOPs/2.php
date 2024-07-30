<?php


class newc{
    public $a = 50;

    function showva(){
        return $this->$a++;
    }
}

$obj = new newc();

// echo $obj->showva();
echo $obj->a;


?>