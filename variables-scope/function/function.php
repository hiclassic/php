 //elaborate disscussioon on function scope in PHP
 <?php
// Function scope example
function myFunction() {
    $localVariable = "I am local to myFunction";
    echo $localVariable . "\n"; // This will work
};
myFunction();
// echo $localVariable; // This will cause an error because $localVariable is not defined in this scope
?>
//in php, function scope is the context in which a variable is defined and can be accessed. Variables defined inside a function are local to that function and cannot be accessed outside of it. This helps prevent variable name conflicts and keeps the code organized.

<?php
// Global variable example
$globalVariable = "I am global";

function myFunction() {
    global $globalVariable; // Declare the variable as global
    echo $globalVariable . "\n"; // This will output: I am global
};

myFunction();
echo $globalVariable; // This will output: I am global
?> <?php
// Static variable example
function myFunction() {
    static $staticVariable = 0; // This variable will retain its value between function calls
    $staticVariable++;
    echo $staticVariable . "\n"; // This will output the incremented value each time
};

myFunction();
myFunction();
myFunction();
?> 
//types of functions in PHP
<?php
// User-defined function
function myFunction() {
    echo "This is a user-defined function.\n";
}; 
?>
<?php
// Anonymous function (Closure)
$myFunction = function() {
    echo "This is an anonymous function.\n";
};
$myFunction(); // Call the anonymous function
//real use case of anonymous function
$numbers = [1, 2, 3, 4, 5];
$doubleNumbers = array_map(function($number) {
    return $number * 2;
}, $numbers);
print_r($doubleNumbers); // This will output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
//simple example of anonymous function with number
$myFunction = function($number) {
    return $number * 2;
};
echo $myFunction(5); // This will output: 10
?>
//how many ways to declar anonymous function in PHP
<?php
// Anonymous function with parameters
<?php   _ini_set("display_errors","");

$myFunction = function($name) {
    echo "Hello, $name!\n";
};
$myFunction("Alice"); // Call the anonymous function with a parameter
// This will output: Hello, Alice!
?>
// Anonymous function with return value
$myFunction = function($a, $b) {
    return $a + $b;
};
echo $myFunction(3, 4); // This will output: 7
// Anonymous function with array mapping
$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = array_map(function($number) {
    return $number * 2;
}, $numbers); // This will output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
print_r($doubledNumbers);
// Anonymous function with array filtering
<?php 
$numbers = [1, 2, 3, 4, 5];
$evenNumbers = array_filter($numbers, function($number) {
    return $number % 2 === 0;
}); // This will output: Array ( [0] => 2 [1] => 4 )
print_r($evenNumbers);
?>
// Arrow function example
<?php   
// Arrow functions are a shorthand syntax for anonymous functions introduced in PHP 7.4.
// They are more concise and automatically capture variables from the surrounding scope.    
// Arrow functions are defined using the `fn` keyword and have a simpler syntax compared to traditional anonymous functions.











// Arrow function
$myFunction = fn() => echo "This is an arrow function.\n";
$myFunction(); // Call the arrow function
?>
//more examples of arrow functions in simple 
<?php
// Arrow function with parameters
$double = fn($number) => $number * 2;
echo $double(5); // This will output: 10
?>  
// Arrow function with array mapping
<?php
$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = array_map(fn($number) => $number * 2, $numbers);
print_r($doubledNumbers); // This will output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
?>
//more types of array functions in PHP
<?php
// Built-in function example
$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = array_map('square', $numbers);
print_r($squaredNumbers); // This will output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

function square($n) {
    return $n * $n;
};
echo square($squaredNumbers);
echo square(2);
echo square(3);

?>

<?php
// Recursive function example
function factorial($n) {
    if ($n <= 1) {
        return 1; // Base case
    }
    return $n * factorial($n - 1); // Recursive case
};
echo factorial(5); // This will output: 120
?>