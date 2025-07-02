<?php
//php  error exception
// This code demonstrates how to handle an error exception in PHP
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new ErrorException("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}    
try {
    echo divide(10, 2) . "<br>"; // This will work
    echo divide(10, 0) . "<br>"; // This will cause an error exception
} catch (ErrorException $e) {
    echo "Caught error exception: " . $e->getMessage() . "<br>";
}
finally {
    echo "Execution completed.<br>";
}
?>
