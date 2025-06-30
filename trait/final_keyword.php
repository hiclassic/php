<?php
// using the final keyword in PHP to prevent class inheritance
final class FinalClass {
    public function display() {
        echo "This is a final class method.<br>";
    }
}   

class ChildClass extends FinalClass {
    public function display() {
        echo "This is a child class method.<br>";
    }
}   

$object = new ChildClass();
$object->display(); // This will cause an error because FinalClass cannot be extended
?>

<?php
// using the final keyword in PHP to prevent method overriding
class BaseClass {
    public function display() {
        echo "This is a base class method.<br>";
    }
}   

class ChildClass extends BaseClass {
    final public function display() {
        echo "This is a child class method.<br>";
    }   

}   

$object = new ChildClass();
$object->display(); // This will cause an error because display() is final in ChildClass
?>

<?php
// using the final keyword in PHP to prevent method overriding in a subclass
class BaseClass {
    public function display() {
        echo "This is a base class method.<br>";
    }
}   

class ChildClass extends BaseClass {
    public function display() {
        echo "This is a child class method.<br>";
    }   
}   

$object = new ChildClass();
$object->display(); // This will cause an error because display() is final in ChildClass
?>  
