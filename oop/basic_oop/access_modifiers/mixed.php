<?php
//php mixed access modifier
class MyClass {
    public $publicProperty = "Public Property";
    protected $protectedProperty = "Protected Property";
    private $privateProperty = "Private Property";    
} 
$object = new MyClass();
echo $object->publicProperty . "<br>"; // Accessible
// echo $object->protectedProperty; // Not accessible, will cause an error
// echo $object->privateProperty; // Not accessible, will cause an error
echo "<br>";

?> 

<?php 
// Accessing protected and private properties through methods
class MyClassWithMethods {
    public $publicProperty = "Public Property";
    protected $protectedProperty = "Protected Property";
    private $privateProperty = "Private Property";    
    public function getProtectedProperty() {
        return $this->protectedProperty;
    }
    public function getPrivateProperty() {
        return $this->privateProperty;
    }
} 
$object = new MyClassWithMethods();
echo $object->publicProperty . "<br>"; // Accessible
echo $object->getProtectedProperty() . "<br>"; // Accessible through method
// echo $object->privateProperty; // Not accessible, will cause an error
// echo $object->getPrivateProperty(); // Not accessible, will cause an error
echo "<br>";
?>  
 
<?php
// Accessing protected and private properties through inheritance
class ParentClass {
    protected $protectedProperty = "Protected Property";
    private $privateProperty = "Private Property";
    public function getProtectedProperty() {
        return $this->protectedProperty;
    }
    public function getPrivateProperty() {
        return $this->privateProperty;
    }
}
class ChildClass extends ParentClass {
    public function showProperties() {
        echo $this->getProtectedProperty() . "<br>"; // Accessible through method
        // echo $this->privateProperty; // Not accessible, will cause an error
        echo $this->getPrivateProperty() . "<br>"; // Not accessible, will cause an error
    }
}
$childObject = new ChildClass();
$childObject->showProperties(); // Accessing protected property through method
// echo $childObject->protectedProperty; // Not accessible, will cause an error
// echo $childObject->privateProperty; // Not accessible, will cause an error
echo "<br>";
?> 

<?php
// Accessing protected and private properties through static methods
class StaticClass {
    protected static $protectedStaticProperty = "Protected Static Property";
    private static $privateStaticProperty = "Private Static Property";
    public static function getProtectedStaticProperty() {
        return self::$protectedStaticProperty;
    }
    public static function getPrivateStaticProperty() {
        return self::$privateStaticProperty;
    }
}
echo StaticClass::getProtectedStaticProperty() . "<br>"; // Accessible through static method
// echo StaticClass::$privateStaticProperty; // Not accessible, will cause an error
echo StaticClass::getPrivateStaticProperty() . "<br>"; // Not accessible, will cause an error
echo "<br>";
?>

<?php
// Accessing protected and private properties through traits    
trait MyTrait {
    protected $traitProtectedProperty = "Trait Protected Property";
    private $traitPrivateProperty = "Trait Private Property";
    public function getTraitProtectedProperty() {
        return $this->traitProtectedProperty;
    }
    public function getTraitPrivateProperty() {
        return $this->traitPrivateProperty;
    }
}
class MyClassWithTrait {
    use MyTrait;
}
$object = new MyClassWithTrait();
echo $object->getTraitProtectedProperty() . "<br>"; // Accessible through trait method
// echo $object->traitPrivateProperty; // Not accessible, will cause an error
// echo $object->getTraitPrivateProperty(); // Not accessible, will cause an error
echo "<br>";
?>      


<?php
// Accessing protected and private properties through interfaces
interface MyInterface {
    public function getProtectedProperty();
    public function getPrivateProperty();
}
class MyClassWithInterface implements MyInterface {
    protected $protectedProperty = "Protected Property";
    private $privateProperty = "Private Property";
    public function getProtectedProperty() {        
        return $this->protectedProperty;            
    }            
    public function getPrivateProperty() {        
        return $this->privateProperty;            
    }            
}
$object = new MyClassWithInterface();
echo $object->getProtectedProperty() . "<br>"; // Accessible through interface method
// echo $object->privateProperty; // Not accessible, will cause an error
// echo $object->getPrivateProperty(); // Not accessible, will cause an error
echo "<br>";
?> 