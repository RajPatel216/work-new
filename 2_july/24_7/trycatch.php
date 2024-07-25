<?php
// Example function that might throw an exception
function divide($numerator, $denominator) {
    if ($denominator === 0) {
        throw new Exception("Division by zero error");
    }
    return $numerator / $denominator;
}

// Example of using try-catch block
try {
    $result = divide(10, 2); // This will work fine
    echo "Result: " . $result . "\n";

    $result = divide(10, 0); // This will throw an exception
    echo "Result: " . $result . "\n"; // This line will not execute
}
 catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "\n";
}

?>

