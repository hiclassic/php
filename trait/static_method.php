<?php

class user {
    const USERNAME = "admin";
    const PASSWORD = "password123";
    public static function getName() {
        return "John Doe";

    }
}

echo user::getName();   // Output: "John Doe"
echo "<br>";
echo user::USERNAME;    // Output: "admin"
echo "<br>";
echo user::PASSWORD;    // Output: "password123"
echo "<br>";
echo user::getName() . " is the username"; // Output: "John Doe is the username"
echo "<br>";

?>

<?php
// Static method with parameters
class Calculator {
    public static function add($a, $b) {
        return $a + $b;
    }
}

echo Calculator::add(5, 3); // Output: 8
echo "<br>";
?>

<?php
// Static method with default parameters
class Math {
    public static function multiply($a, $b = 2) {
        return $a * $b;
    }
}
echo Math::multiply(5); // Output: 10 (5 * 2)
echo "<br>";
echo Math::multiply(5, 3); // Output: 15 (5 * 3)
echo "<br>";
?>


<?php
//dont reuse same class name or function name
//static method with self keyword
class Counter {
    private static $count = 0;  // Static property to store the count   

    public static function increment() {
        self::$count++;  // Increment the static property
        return self::$count;  // Return the current count
          
    }
    public static function getCount() {
        return self::$count;  // Return the current count
    }
}
echo Counter::increment(); // Output: 1
echo "<br>";
echo Counter::increment(); // Output: 2
echo "<br>";
echo Counter::getCount(); // Output: 2
echo "<br>";
?> 

<?php
// Static method in with  keyword
class Logger {
    public static function log($message) {
        echo "Log: " . $message . "<br>";
    }
}
Logger::log("Hello, world!"); // Output: "Log: Hello, world!"
Logger::log("This is a static method example."); // Output: "Log: This is a static method example."
echo "<br>";
?>
<?php
// Static method with inheritance
class Animal {
    public static function sound() {
        return "Some generic animal sound";
    }
}
class Dog extends Animal {
    public static function sound() {
        return "Bark";
    }
}
class Cat extends Animal {
    public static function sound() {
        return "Meow";
    }
}
echo Dog::sound(); // Output: "Bark"
echo "<br>";
echo Cat::sound(); // Output: "Meow"
echo "<br>";
?>
<?php
// Static method with inheritance and parent keyword
class Bird extends Animal {
    public static function sound() {
        return parent::sound() . " and Chirp";
    }
}
echo Bird::sound(); // Output: "Some generic animal sound and Chirp"
echo "<br>";
?>

<?php
// Static method with visibility
class MathUtils {
    public static function add($a, $b) {
        return $a + $b;
    }
    protected static function subtract($a, $b) {
        return $a - $b;
    }
    private static function multiply($a, $b) {
        return $a * $b;
    }
}
echo MathUtils::add(5, 3); // Output: 8
// echo MathUtils::subtract(5, 3); // This will cause an error because subtract is protected
// echo MathUtils::multiply(5, 3); // This will cause an error because multiply is private
echo "<br>";
// Static method with final keyword
class FinalClass {
    public static function finalMethod() {
        return "This is a final static method.";
    }
}
echo FinalClass::finalMethod(); // Output: "This is a final static method."
echo "<br>";
?>  