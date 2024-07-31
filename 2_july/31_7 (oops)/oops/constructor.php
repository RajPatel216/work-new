<?php


class Constru{
    public $name;
    
    function __construct($name){
        $this->name=$name;
    }
    
    function display(){
        return $this->name;
    }
}
$nam=new Constru("sanji");
echo $nam->display();



// ------------------------------ 2nd
// class neww{
//     public $name;
//     function __construct($nam){
//         $this->name=$nam;
//     }
//     function disp(){
//         echo $this->name;
//     }
// }

// $name = new neww('luffy');
// $name->disp();


            
// ---------------------------------- third
// class local{
//     public $name;
//     public $color;
    
//     function __construct($name, $color){
//         $this->name =$name;
//         $this->color =$color;
//     }
    
//     function display(){
//         echo $this->name;
//     }
    
//     function dis2(){
//         echo $this->color;
//     }
// }

// $car = new local("bmw","yellow");

// $car->display();
// echo '<br>';
// $car->dis2();

?>