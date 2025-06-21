<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data_type of variable</title>
</head>

<body>
    <h1> Data type of variable</h1>
    <?php
    // Data types in PHP
    // 1. String
    $stringVar = "Hello, World!";
    echo "String: " . $stringVar . "<br>";

    // 2. Integer
    $intVar = 42;
    echo "Integer: " . $intVar . "<br>";

    // 3. Float
    $floatVar = 3.14;
    echo "Float: " . $floatVar . "<br>";

    // 4. Boolean
    $boolVar = true;
    echo "Boolean: " . ($boolVar ? 'true' : 'false') . "<br>";

    // 5. Array
    $arrayVar = array("apple", "banana", "cherry");
    echo "Array: ";
    print_r($arrayVar);
    echo "<br>";

    // 6. Object
    class MyClass
    {
        public $property = "I am an object property!";
    }
    $objectVar = new MyClass();
    echo "Object: " . $objectVar->property . "<br>";
    $objectVar = new MyClass(); // Creating a new object instance
    echo "Object: " . $objectVar->property . "<br>"; 
    
    class Student {
        public $name;
        public $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
    }
    $student = new Student("John Doe", 20);
    echo "Object: Name - " . $student->name . ", Age - " . $student->age . "<br>";

    // 7. NULL
    $nullVar = null;
    echo "NULL: ";
    var_dump($nullVar);
    echo "<br>";
    ?>
</body>

</html>