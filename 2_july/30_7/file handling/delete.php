
<?php
  
$file = "del.txt"; 
   
if (!unlink($file)) { 
    echo ("$file cannot be deleted"); 
} 
else { 
    echo ("$file deleted"); 
} 
  
?> 