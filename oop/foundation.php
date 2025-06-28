
 <?php
class MyClass {
    public $property = "Hello, World!";
    public function method() {
        echo "This is a method.";
    }
}  

$object = new MyClass();
echo $object->property;
$object->method();
?>


//constructor 
<?php
class MyClass {
    public $property = "Hello, World!";
    public function __construct() {
        echo "This is a constructor.";
    }
}  
$object = new MyClass();
?>

//destructor
<?php
class MyClass {
    public $property = "Hello, World!";
    public function __construct() {
        echo "This is a constructor.";
    }
    public function __destruct() {
        echo "This is a destructor.";
    }
}  
$object = new MyClass();
?> 



