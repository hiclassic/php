<?php
//php notice error
// This code demonstrates how to handle a notice error in PHP
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        trigger_error("Division by zero is not allowed.", E_USER_NOTICE);
        return null; // Return null to avoid further issues
    }
    return $numerator / $denominator;
}

echo divide(10, 2) . "<br>"; // This will work  
echo divide(10, 0) . "<br>"; // This will cause a notice error
?>