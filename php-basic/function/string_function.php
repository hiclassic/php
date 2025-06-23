//defination of string function in brief: 
// 1. strlen() - Returns the length of a string
// 2. strpos() - Returns the position of the first occurrence of a substring in a string
// 3. substr() - Returns a portion of a string
// 4. str_replace() - Replaces all occurrences of a substring with another substring
// 5. strrev() - Reverses a string
// 6. strtolower() - Converts a string to lowercase
// 7. strtoupper() - Converts a string to uppercase
// 8. trim() - Strips whitespace (or other characters) from the beginning and end of a string
// 9. str_split() - Splits a string into an array
// 10. str_repeat() - Repeats a string a specified number of times
// 11. str_word_count() - Counts the number of words in a string
// 12. str_shuffle() - Randomly shuffles the characters in a string
// 13. str_pad() - Pads a string to a certain length with another string
// 14. strcasecmp() - Compares two strings case-insensitively
// 15. stristr() - Finds the first occurrence of a case-insensitive substring in a string
// 16. str_contains() - Checks if a string contains a specific substring (available in PHP 8.0 and later)
// 17. str_starts_with() - Checks if a string starts with a specific substring (available in PHP 8.0 and later)
// 18. str_ends_with() - Checks if a string ends with a specific substring (available in PHP 8.0 and later)
// 19. str_split() - Splits a string into an array by a specified length
// 20. str_replace() - Replaces all occurrences of a substring with another substring in a string
// 21. strtr() - Translates characters in a string
// 22. strcoll() - Compares two strings using the current locale
// 23. strftime() - Formats a local time/date as a string


// here are examples in details of string functions that can be used in PHP: including above mentioned functions:
<?php
// strlen() - Returns the length of a string
echo strlen("Hello, world!"); // This will output: 13
echo "\n";  // This will output: 13


// strpos() - Returns the position of the first occurrence of a substring in a string
echo strpos("Hello, world!", "world"); // This will output: 7
echo "\n";  // This will output: 7

// substr() - Returns a portion of a string
echo substr("Hello, world!", 7, 5); // This will output: world
echo "\n";  // This will output: world

// str_replace() - Replaces all occurrences of a substring with another substring
echo str_replace("world", "PHP", "Hello, world!"); // This will output: Hello, PHP!
echo "\n";  // This will output: Hello, PHP!

// strrev() - Reverses a string
echo strrev("Hello, world!"); // This will output: !dlrow ,olleH
echo "\n";  // This will output: !dlrow ,olleH

// strtolower() - Converts a string to lowercase
echo strtolower("HELLO, WORLD!"); // This will output: hello, world!
echo "\n";  // This will output: hello, world!

// strtoupper() - Converts a string to uppercase
echo strtoupper("hello, world!"); // This will output: HELLO, WORLD!
echo "\n";  // This will output: HELLO, WORLD!

// trim() - Strips whitespace (or other characters) from the beginning and end of a string
echo trim("   Hello, world!   "); // This will output: Hello, world!
echo "\n";  // This will output: Hello, world!

// str_split() - Splits a string into an array
print_r(str_split("Hello, world!", 5)); // This will output: Array ( [0] => Hello [1] => , wor [2] => ld! )
echo "\n";  // This will output: Array ( [0] => Hello [1] => , wor [2] => ld! )

// str_repeat() - Repeats a string a specified number of times
echo str_repeat("Hello, ", 3); // This will output: Hello, Hello, Hello, 
echo "\n";  // This will output: Hello, Hello, Hello, 

// str_word_count() - Counts the number of words in a string
echo str_word_count("Hello, world!"); // This will output: 2
echo "\n";  // This will output: 2
// str_shuffle() - Randomly shuffles the characters in a string
echo str_shuffle("Hello, world!"); // This will output: Randomly shuffled string
echo "\n";  // This will output: Randomly shuffled string
// str_pad() - Pads a string to a certain length with another string
echo str_pad("Hello", 10, "-"); // This will output: Hello-----
echo "\n";  // This will output: Hello----- 
// strcasecmp() - Compares two strings case-insensitively
echo strcasecmp("Hello", "hello"); // This will output: 0 (equal)
echo "\n";  // This will output: 0 (equal)
// stristr() - Finds the first occurrence of a case-insensitive substring in a string
echo stristr("Hello, world!", "world"); // This will output: world!
echo "\n";  // This will output: world!
// str_contains() - Checks if a string contains a specific substring (available in PHP 8.0 and later)
if (str_contains("Hello, world!", "world")) {
    echo "String contains 'world'"; // This will output: String contains 'world'
} else {
    echo "String does not contain 'world'";
}
echo "\n";  // This will output: String contains 'world'
// str_starts_with() - Checks if a string starts with a specific substring (available in PHP 8.0 and later)
if (str_starts_with("Hello, world!", "Hello")) {
    echo "String starts with 'Hello'"; // This will output: String starts with 'Hello'
} else {
    echo "String does not start with 'Hello'";
}
echo "\n";  // This will output: String starts with 'Hello' 
// str_ends_with() - Checks if a string ends with a specific substring (available in PHP 8.0 and later)
if (str_ends_with("Hello, world!", "world!")) {
    echo "String ends with 'world!'"; // This will output: String ends with 'world!'
} else {
    echo "String does not end with 'world!'";   // This will output: String does not end with 'world!'  
} 
echo "\n";  // This will output: String ends with 'world!'  
// str_split() - Splits a string into an array by a specified length
print_r(str_split("Hello, world!", 5)); // This will output: Array ( [0] => Hello [1] => , wor [2] => ld! )
echo "\n";  // This will output: Array ( [0] => Hello [1] => , wor [2] => ld! )     
// str_replace() - Replaces all occurrences of a substring with another substring in a string
echo str_replace("world", "PHP", "Hello, world!"); // This will output: Hello, PHP!
echo "\n";  // This will output: Hello, PHP!
