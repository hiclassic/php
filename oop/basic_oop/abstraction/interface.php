<?php
// interface in PHP 
interface Vehicle {
    public function start();
    public function stop();
}   

class Car implements Vehicle {
    public function start() {
        return "Car is starting.";
    }   
    public function stop() {
        return "Car is stopping.";
    }       
} 

class Motorcycle implements Vehicle {
    public function start() {
        return "Motorcycle is starting.";
    }   
    public function stop() {
        return "Motorcycle is stopping.";
    }       
} 

$car = new Car();       
echo $car->start() . "<br>";
echo $car->stop() . "<br>";
$motorcycle = new Motorcycle();
echo $motorcycle->start() . "<br>";
echo $motorcycle->stop() . "<br>";
// Attempting to instantiate an interface will cause an error
// $vehicle = new Vehicle(); // This will cause an error
// echo $vehicle->start(); // This will cause an error
echo "<br>";
// Interface with multiple methods
echo "<br>";
echo "<br>";
?>