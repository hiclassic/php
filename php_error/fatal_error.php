<?php
//php fatal error
// This code demonstrates how to handle a fatal error in PHP
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

try {
    echo divide(10, 2) . "<br>"; // This will work
    echo divide(10, 0) . "<br>"; // This will cause a fatal error
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>";
} finally {
    echo "Execution completed.<br>";
}

 ?>
