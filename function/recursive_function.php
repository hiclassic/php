//Recursive function explation: (in some words, a function that calls itself is called a recursive function.)
// Recursive functions are functions that call themselves in order to solve a problem. They are often used
// to break down complex problems into simpler subproblems. Recursive functions can be very powerful,


//benifites of //recursive function (some words):
// 1. Simplifies complex problems: Recursive functions can break down complex problems into smaller,
//    more manageable subproblems, making it easier to understand and solve.
// 2. Reduces code duplication: By using recursion, you can avoid writing repetitive code   


//types of recursive functions (in some words): 
// 1. Direct recursion: A recursive function calls itself directly.
// 2. Indirect recursion: A recursive function calls another recursive function.
// 3. Tail recursion: The recursive call is the last operation in the function, allowing for optimization by the compiler or interpreter.


// examples of all types of recursive functions in PHP:
// 1. Direct recursion
<?php
function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}       
echo factorial(5); // This will output: 120
echo "\n";  // This will output: 120    
// 2. Indirect recursion
function a($n) {
    if ($n <= 1) {
        return 1;
    }
    return b($n - 1);
}
function b($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * b($n - 1);
}
echo a(5); // This will output: 120
echo "\n";  // This will output: 120
// 3. Tail recursion
function c($n) {
    if ($n <= 1) {
        return 1;
    }
    return c($n - 1) * $n;
}
echo c(5); // This will output: 120
echo "\n";  // This will output: 120    
// 4. Non-tail recursion    
function d($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * d($n - 1);    
}
echo d(5); // This will output: 120
echo "\n";  // This will output: 120    
// 5. Nested recursion
function e($n) {
    if ($n <= 1) {
        return 1;    
    }
    return f($n - 1) * g($n - 1);
}
function f($n) {
    if ($n <= 1) {
        return 1;    
    }
    return f($n - 1) * g($n - 1);
}
function g($n) {
    if ($n <= 1) {
        return 1;    
    }
    return f($n - 1) * g($n - 1);    
}
echo e(5); // This will output: 120
echo "\n";  // This will output: 120

// 6. Recursive array traversal
function traverseArray($array) {
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            traverseArray($value); // Recursive call for nested arrays
        } else {
            echo "$key: $value\n"; // Output the key-value pair
        }
    }
}
// Example usage of the recursive array traversal function
$array = [
    [1,2,3],        
    [4,5,6],
    [7,8,9]
];
traverseArray($array); // This will output the elements of the array
echo "\n";  // This will output the elements of the array
