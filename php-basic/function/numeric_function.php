//numeric function defination in simple words:
// A numeric function in PHP is a built-in function that performs operations on numbers, such as mathematical operations, rounding, and conversion between different number types.
// These functions are often used for numerical calculations and data processing within your PHP application.


//benifites of numeric function (some words):
// 1. Simplifies mathematical operations: Numeric functions provide a straightforward way to perform common mathematical
//    operations like addition, subtraction, multiplication, and division without having to write complex logic.
// 2. Enhances code readability: Using numeric functions can make your code more readable and expressive, as they often have descriptive names that clearly indicate their purpose.
// 3. Improves performance: Many numeric functions are optimized for performance, allowing you to perform operations on large numbers or datasets more
//    efficiently than if you were to implement the same logic manually.


//ways to define and Declare a numeric function in PHP:
// 1. Using built-in numeric functions like `abs`, `round`, `sqrt`, `pow`, etc.
// 2. Creating custom numeric functions using the `function` keyword or arrow functions (`fn` keyword in PHP 7.4 and later).
// 3. Using anonymous functions as callbacks for numeric operations.
// 4. Defining numeric functions within classes as methods. 
// 5. Using numeric functions from external libraries or frameworks.


//example of numeric function:


<?php
// Define a numeric function to calculate the square of a number
function square($number) {
    return $number * $number;
}

// Use the numeric function
$result = square(5); // Output: 25
echo $result;
?>


<?php// Define a numeric function to calculate the factorial of a number
function factorial($number) {
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    }
    if ($number === 0) {
        return 1; // Factorial of 0 is 1
    }
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}                                       
// Use the numeric function
$result = factorial(5); // Output: 120
echo $result;
?>


<?php
// Define a numeric function to calculate the power of a number
function power($base, $exponent) {
    return pow($base, $exponent);
}

// Use the numeric function
$result = power(2, 3); // Output: 8
echo $result;
?>


//types of numeric function:
// 1. Arithmetic Functions: These functions perform basic arithmetic operations like addition, subtraction, multiplication, and division.
//    Examples: `abs()`, `round()`, `ceil()`, `floor()`, `sqrt()`, `pow()`, etc.
// 2. Trigonometric Functions: These functions perform trigonometric calculations such as sine, cosine, and tangent.
//    Examples: `sin()`, `cos()`, `tan()`, `asin()`, `acos()`, `atan()`, etc.
// 3. Statistical Functions: These functions perform statistical calculations like mean, median, mode, and standard deviation.
//    Examples: `min()`, `max()`, `array_sum()`, `count()`, `avg()`, etc.
// 4. Number Formatting Functions: These functions format numbers for display purposes, such as adding commas or controlling decimal places.
//    Examples: `number_format()`, `sprintf()`, `printf()`, etc.
// 5. Random Number Functions: These functions generate random numbers or perform operations related to randomness.
//    Examples: `rand()`, `mt_rand()`, `random_int()`, etc.
// 6. Conversion Functions: These functions convert numbers between different formats or types, such as converting between integers and floats.
//    Examples: `intval()`, `floatval()`, `strval()`, etc.
// 7. Mathematical Constants: These functions provide access to mathematical constants like Pi and Euler's number.
//    Examples: `M_PI`, `M_E`, `PHP_FLOAT_MAX`, etc.
// 8. Bitwise Functions: These functions perform bitwise operations on integers, such as AND, OR, XOR, and bit shifting.
//    Examples: `bitwise_and()`, `bitwise_or()`, `bitwise_xor()`, `bit_shift_left()`, `bit_shift_right()`, etc.
//
// 9. Numeric Validation Functions: These functions check if a value is numeric or validate numeric formats.
//    Examples: `is_numeric()`, `is_int()`, `is_float()`, `is_double()`, etc.
// 10. Numeric Comparison Functions: These functions compare numeric values and return results based on the comparison.
//     Examples: `max()`, `min()`, `compare()`, `equal()`, etc.


//example of numeric function based on above types:


<?php    
// Define a numeric function to calculate the absolute value of a number
function absoluteValue($number) {
    return abs($number);
}

// Use the numeric function
$result = absoluteValue(-5); // Output: 5
echo $result;
?>  

<?php
// Define a numeric function to calculate the square root of a number
function squareRoot($number) {
    return sqrt($number);
}

// Use the numeric function
$result = squareRoot(16); // Output: 4
echo $result;
?>  



<?php// Define a numeric function to calculate the sine of an angle in radians
function sine($angle) {
    return sin($angle);
}                       
// Use the numeric function
$result = sine(M_PI / 2); // Output: 1
echo $result;
?>  


<?php   // Define a numeric function to calculate the mean of an array of numbers
function mean(array $numbers) {
    if (count($numbers) === 0) {
        return 0; // Avoid division by zero
    }
    return array_sum($numbers) / count($numbers);
}
// Use the numeric function 
$result = mean([1, 2, 3, 4, 5]); // Output: 3
echo $result;
?>


<?php// Define a numeric function to format a number with commas and two decimal places
function formatNumber($number) {
    return number_format($number, 2, '.', ',');
}
// Use the numeric function
$result = formatNumber(1234567.89); // Output: 1,234,567.89
echo $result;
?>      


<?php // Define a numeric function to generate a random integer between two values  
function randomInteger($min, $max) {
    return mt_rand($min, $max); // Use mt_rand for better randomness            
}
// Use the numeric function
$result = randomInteger(1, 100); // Output: A random integer between 1 and 100
echo $result;
?> 



<?php// Define a numeric function to convert a string to an integer
function stringToInt($string) {
    return intval($string);
}
// Use the numeric function 
$result = stringToInt("123"); // Output: 123
echo $result;
?>  


<?php// Define a numeric function to compare two numbers and return the larger one
function maxNumber($a   , $b) {
    return max($a, $b);
}
// Use the numeric function
$result = maxNumber(10, 20); // Output: 20
echo $result;
?>


<?php// Define a numeric function to check if a value is numeric
function isNumericValue($value) {
    return is_numeric($value);    
}
// Use the numeric function 
$result = isNumericValue("123"); // Output: true
echo $result;
?>  


<?php// Define a numeric function to perform a bitwise AND operation
function bitwiseAnd($a, $b) {
    return $a & $b;
}
// Use the numeric function
$result = bitwiseAnd(5, 3); // Output: 1 (binary 0101 & 0011 = 0001)
echo $result;
?>


<?php// Define a numeric function to check if a number is even
function isEven($number) {
    return $number % 2 === 0;
}
// Use the numeric function
$result = isEven(4); // Output: true
echo $result ? 'Even' : 'Odd'; // Output: Even
?>


<?php// Define a numeric function to calculate the factorial of a number    
function factorial($number) {
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    }
    if ($number === 0) {
        return 1; // Factorial of 0 is 1
    }
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}// Use the numeric function
$result = factorial(5); // Output: 120
echo $result;
?>










