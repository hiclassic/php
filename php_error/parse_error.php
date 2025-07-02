<?php
// parse error in PHP
// This code demonstrates how to handle a parse error in PHP
// Note: Parse errors cannot be caught or handled in a try-catch block.
// They occur during the parsing stage before the script is executed.    
echo divide(10, 0); // This will cause a parse error because the function is not defined        
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}   
?>
