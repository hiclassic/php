//defination of an annoynmous function in brief:
// An anonymous function is a function that does not have a name.
// It is often used as a callback function or for short-lived operations.
// Anonymous functions can be assigned to variables, passed as arguments, or returned from other functions.
//// They are also known as closures or lambda functions in some programming languages.
// Anonymous functions can capture variables from the surrounding scope, allowing them to access and manipulate those variables.
// This feature is known as "lexical scoping" or "variable capturing".
// Anonymous functions can be used to create higher-order functions, which are functions that take other functions as arguments or return functions as results.
// They can also be used to create self-contained code blocks that can be executed independently.
// Anonymous functions can be defined using the `function` keyword or using the `fn` keyword for arrow functions in PHP 7.4 and later.


//benifites of using anonymous functions in PHP:
// 1. **Conciseness**: They allow for more concise code
// 2. **Encapsulation**: They can encapsulate logic without polluting the global namespace
// 3. **Callbacks**: They are often used as callbacks for functions like `array_map`, `array_filter`, and `usort`
// 4. **Closures**: They can capture variables from the surrounding scope, allowing for more flexible and powerful code
// 5. **Higher-Order Functions**: They enable the creation of higher-order functions, which can take other functions as arguments or return functions as results
// 6. **Readability**: They can improve code readability by keeping related logic together
// 7. **Dynamic Behavior**: They can be used to create dynamic behavior in code, allowing for more flexible and reusable components
// // 8. **Event Handling**: They are commonly used in event handling, such as in JavaScript frameworks, to define event listeners without needing to create a separate named function
// 9. **Functional Programming**: They support functional programming paradigms, allowing for more expressive and functional-style code
// 10. **Anonymous Callbacks**: They can be used as anonymous callbacks in asynchronous programming, making it easier to handle events and responses without needing to define separate named functions


//ways to define and Declare an anonymous function in PHP:
// 1. Using the `function` keyword
// 2. Using the `fn` keyword (arrow functions, available in PHP 7.4 and later)
// 3. Assigning an anonymous function to a variable
// 4. Passing an anonymous function as an argument to another function
// 5. Returning an anonymous function from another function
// 6. Using anonymous functions in array methods like `array_map`, `array_filter`, and `usort`
// 7. Using anonymous functions in event handling or callbacks
// 8. Using anonymous functions in closures to capture variables from the surrounding scope
// 9. Using anonymous functions in object-oriented programming as method callbacks or event listeners
// 10. Using anonymous functions in functional programming paradigms to create higher-order functions
// 11. Using anonymous functions in asynchronous programming to handle promises or callbacks
// 12. Using anonymous functions in testing frameworks to define test cases or assertions
// 13. Using anonymous functions in middleware for request handling in web applications
// 14. Using anonymous functions in dependency injection containers to define service providers
// 15. Using anonymous functions in configuration files to define settings or options


// Example of an anonymous function in PHP based on the above points:
<?php
// Using the `function` keyword to define an anonymous function
$anonymousFunction = function ($a, $b) {
    return $a + $b;
};
echo $anonymousFunction(3, 4); // This will output: 7
?>  
<?php
// Using the `fn` keyword (arrow function) to define an anonymous function
$arrowFunction = fn($a, $b) => $a + $b;
echo $arrowFunction(3, 4); // This will output: 7
?>
<?php
// Assigning an anonymous function to a variable
$greet = function ($name) {
    return "Hello, $name!"; // This will output: Hello, John!
};
echo $greet("John");
?>

<?php
// Passing an anonymous function as an argument to another function
function executeFunction($func, $arg) {
    return $func($arg);
}
echo executeFunction(function($name) {
    return "Hello, $name!";
}, "Alice"); // This will output: Hello, Alice!
?>
<?php
// Returning an anonymous function from another function
function createMultiplier($factor) {
    return function ($number) use ($factor) {
        return $number * $factor;
    };
}
$double = createMultiplier(2);
echo $double(5); // This will output: 10
?>
<?php
// Using an anonymous function in array methods like `array_map`
$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = array_map(function($number) {
    return $number * 2;
}, $numbers);
print_r($doubledNumbers); // This will output: Array ( [0] =>   2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
?>
<?php
// Using an anonymous function in array filtering
$evenNumbers = array_filter($numbers, function($number) {
    return $number % 2 === 0;
});
print_r($evenNumbers); // This will output: Array ( [1] => 2 [3] => 4 )
?>
<?php        
// Using an anonymous function in sorting
$names = ["Alice", "Bob", "Charlie", "David", "Emily"];
usort($names, function($a, $b) {
    return strcmp($a, $b);
});
print_r($names); // This will output: Array ( [0] => Alice [1] => Bob [2] => Charlie [3] => David [4] => Emily )
?>          
<?php
// Using an anonymous function in event handling (simulated)
$eventHandler = function($event) {
    echo "Event triggered: $event\n"; // This will output: Event triggered: click
};
$eventHandler("click"); // Simulating an event trigger
?>
<?php
// Using an anonymous function in a closure to capture variables
$message = "Hello, World!";
$closure = function() use ($message) {
    return $message;
};
echo $closure(); // This will output: Hello, World!
?>  
<?php   
// Using an anonymous function in object-oriented programming
class Person {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function introduce() {
        $introduction = function() {
            return "Hello, my name is $this->name.";
        };
        return $introduction();
    }
}
$person = new Person("Alice");
echo $person->introduce(); // This will output: Hello, my name is Alice.
?>     