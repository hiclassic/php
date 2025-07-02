<?php
//php warning error
// This code demonstrates how to handle a warning error in PHP
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        trigger_error("Division by zero is not allowed.", E_USER_WARNING);
        return null; // Return null to avoid further issues
    }
    return $numerator / $denominator;
}

echo divide(10, 2) . "<br>"; // This will work
echo divide(10, 0) . "<br>"; // This will cause a warning   
 ?>
