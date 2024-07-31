<?php

class sports{

    public $name;
    public $popularity;

    function set($name){
        $this->name = $name;
    }
    function get(){
         return $this->name;
    }
    function setc($popularity){
        $this->name=$popularity;
    }
    function getc(){
        return $this->name;
    }
}

$football = new sports();
$popularity = new sports();

$football->set('football');
$popularity->setc('high');

echo $football->get();
echo '<br>';
echo $popularity->getc();


?>