// defination of an array function in brief:
//  the array function is a built-in PHP function that allows you to manipulate arrays in various ways.
 It provides a wide range of functions for creating, modifying, and accessing arrays, making it easier to work with collections of data.

 //benifites of array function:
// 1. Simplifies array manipulation: Array functions provide a convenient way to perform common operations
//    on arrays, such as sorting, filtering, and searching, without having to write complex loops or logic.
// 2. Enhances code readability: Using array functions can make your code more readable and expressive, as they often have descriptive names that clearly indicate their purpose.
// 3. Improves performance: Many array functions are optimized for performance, allowing you to perform operations on large arrays more
//    efficiently than if you were to implement the same logic manually.
// 4. Reduces code duplication: By using array functions, you can avoid writing repetitive code for common array operations, leading to cleaner and more maintainable code.
// 5. Supports functional programming paradigms: Array functions often support functional programming concepts, such as passing callbacks, which can lead
//    to more flexible and reusable code.


//ways to define and Declare an array function in PHP:
// 1. Using built-in array functions like `array_map`, `array_filter`, `array_reduce`, etc.
// 2. Creating custom array functions using the `function` keyword or arrow functions (`fn` keyword in PHP 7.4 and later).
// 3. Using anonymous functions as callbacks for array operations.
// 4. Defining array functions within classes as methods.
// 5. Using array destructuring to extract values from arrays.


<?php 
// Using built-in array functions
$numbers = [1, 2, 3, 4, 5];
$evenNumbers = array_filter($numbers, function ($number) {
    return $number % 2 === 0;
});
print_r($evenNumbers); // This will output: Array ( [0] => 2 [1] => 4 )
?>

<?php
// Creating a custom array function
function doubleArrayValues(array $arr) {
    return array_map(function ($value) {
        return $value * 2;
    }, $arr);
}
$originalArray = [1, 2, 3, 4, 5];
$doubledArray = doubleArrayValues($originalArray);
print_r($doubledArray); // This will output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
?>


<?php
// Using an arrow function to create a custom array function
$tripleArrayValues = fn(array $arr) => array_map(fn($value) => $value * 3, $arr);
$originalArray = [1, 2, 3, 4, 5];
$tripledArray = $tripleArrayValues($originalArray);
print_r($tripledArray); // This will output: Array ( [0] => 3 [1] => 6 [2] => 9 [3] => 12 [4] => 15 )
?>

<?php
// Using an anonymous function as a callback for array operations
$names = ['Alice', 'Bob', 'Charlie'];
$uppercasedNames = array_map(function ($name) {
    return strtoupper($name);
}, $names);
print_r($uppercasedNames); // This will output: Array ( [0] => ALICE [1] => BOB [2] => CHARLIE )
?>

<?php
// Defining an array function within a class as a method
class MyClass {
    public function __toString() {
        return "This is a custom class method.";
    }
    public function getArrayValues(array $arr) {
        return array_map(function ($value) {
            return $value * 4;
        }, $arr);
    }                                         
}
$myClass = new MyClass();
$originalArray = [1, 2, 3, 4, 5];
$multipliedArray = $myClass->getArrayValues($originalArray);
print_r($multipliedArray); // This will output: Array ( [0] => 4 [1] => 8 [2] => 12 [3] => 16 [4] => 20 )       
?>



<?php// Using array destructuring to extract values from arrays
$person = ['name' => 'John', 'age' => 30, 'city' => 'New York'];
['name' => $name, 'age' => $age, 'city' => $city] = $person;
echo "Name: $name, Age: $age, City: $city"; // This will output: Name: John, Age: 30, City: New York
?> 



<?php// Using array destructuring with a function return value
function getCoordinates() { return [1, 2, 3]; } 
[$x, $y, $z] = getCoordinates();
echo "Coordinates: ($x, $y, $z)"; // This will output: Coordinates: (1, 2, 3)
?>  



<?php// Using array destructuring with a function return value and default values
function getDefaultCoordinates() { return [1, 2]; } 
[$x = 0, $y = 0, $z = 0] = getDefaultCoordinates();
echo "Default Coordinates: ($x, $y, $z)"; // This will output: Default Coordinates: (1, 2, 0)
?>



