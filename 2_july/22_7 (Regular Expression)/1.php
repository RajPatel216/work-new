<?php

class bike{
    public $name;
    public $company;

    function set($name){
        $this->vem = $name;
    }

    function get(){
        return $this->vem;
    }
}

$obj1 =new bike();
$obj2 =new bike();
$obj1->set('revolt');
$obj2->set('bajaj');

echo $obj1->get();
echo '<br>';
echo $obj2->get();






// class cars{
//     public $name;
//     public $price;

//     function set($name){
//         $this->name = $name;
//     }

//     function get(){
//         return $this->name;
//     }
// }

// $obj1 =new cars();
// $obj2 =new cars();
// $obj1->set('BMW');
// $obj2->set('porshe');

// echo $obj1->get();
// echo '<br>';
// echo $obj2->get();













//  class fruits{
//     public $color;
//     public $name;

//     function set_name($name){
//          $this->name = $name;
//     }

//     function get_name(){
//         return $this->name;
//     }
//  }

// $apple = new fruits();
// $mango = new fruits();
// $apple->set_name('apple');
// $mango->set_name('kiwi');

// echo $apple->get_name();
// echo "<br>";
// echo $mango->get_name();



?>

<!-- class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('watermelon');
$banana->set_name('kiwi');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name(); -->
