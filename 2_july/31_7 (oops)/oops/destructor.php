<?php

// class local{
//     public $name; 
//     function __construct($name){
//         $this->name=$name;
//     }
//     function __destruct(){
//        echo "this fruit is {$this->name}";
//     }
// }
// $obj =new local("apple");



// 2nd------------------------------------------------------
class local2{
    public $name;
    public $color;
    function __construct($name,$color){
        $this->name =$name;
        $this->color=$color;
    }
    function __destruct(){
        echo $this->name;
        echo '<br>';
        echo $this->color;
    }
}
$obj=new local2("vikrant","red")


//third------------------------------------------------------
// we can not use __construct function more than one time in single code
// class localthree{
//     public $name;
//     public $color;
    
//     function __construct($name){
//         $this->name=$name;
//     }

//     function __construct($color){
//         $this->color=$color;
//     }
    
//     function __destruct(){
//         echo $this->name;
//     }
    
//     function __destruct(){
//         echo $this->color;
//     }
// }
//  $obj =new localthree("punch","silver");




    ?>