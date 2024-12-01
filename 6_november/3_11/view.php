<?php
print_r($_POST);die;

   if (isset($_POST['submit'])) {  
    echo "Your firstname is " . $_POST['firstname'] . "<br>";

    echo "You email is " . $_POST['email'] ;

   }  else {

    echo "Your form is not submited yet please fill the form and visit again";
  }
?>