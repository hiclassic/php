<?php
// abstract class in PHP
abstract class Animal {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function makeSound();
}   

class Dog extends Animal {
    public function makeSound() {
        return $this->name . " says Woof!";
    }   
} 
class Cat extends Animal {
    public function makeSound() {
        return $this->name . " says Meow!";
    }   
}   
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");
echo $dog->makeSound() . "<br>";
echo $cat->makeSound() . "<br>";
// Attempting to instantiate an abstract class will cause an error
// $animal = new Animal("Generic Animal"); // This will cause an error
// echo $animal->makeSound(); // This will cause an error
echo "<br>";
// Abstract class with a concrete method
echo "<br>";
echo "<br>";
?>

<?php
// abstract class with a concrete method
abstract class Vehicle {
    protected $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }
    abstract public function start();
    public function getBrand() {
        return $this->brand;
    }
}
class Car extends Vehicle {
    public function start() {
        return $this->getBrand() . " car is starting.";
    }   
}   
class Motorcycle extends Vehicle {
    public function start() {
        return $this->getBrand() . " motorcycle is starting.";
    }   
}   
$car = new Car("Toyota");
echo $car->start() . "<br>";
$motorcycle = new Motorcycle("Honda");
echo $motorcycle->start() . "<br>";
// Attempting to instantiate an abstract class will cause an error
// $vehicle = new Vehicle("Generic Vehicle"); // This will cause an error
// echo $vehicle->start(); // This will cause an error
echo "<br>";
echo "<br>";
?>