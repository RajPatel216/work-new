<?php

class fruit{
    
    public $name;
    
    function sett($name){
        $this->name = $name;

    }

    function gett(){
        return $this->name;
    }
}

$apple = new fruit();
$mango = new fruit();

$apple->sett('safargan');
$mango->sett('keri');

echo $apple->gett();
echo '<br>';
echo $mango->gett();




?>