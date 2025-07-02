<?php
//deprecated error in PHP
// This code demonstrates how to handle a deprecated error in PHP
function oldFunction() {
    trigger_error("This function is deprecated and will be removed in future versions.", E_USER_DEPRECATED);
    return "This is an old function.";
}   
echo oldFunction(); // This will trigger a deprecated error
?>
<?php
// Output:
// This function is deprecated and will be removed in future versions.
// This is an old function.
?>
<?php
// Note: The deprecated error will not stop the execution of the script, but it will generate a warning in the logs or output, depending on the error reporting settings of PHP. It is recommended to update the code to use a newer function or method if available, as deprecated features may be removed in future versions of PHP.
?>
