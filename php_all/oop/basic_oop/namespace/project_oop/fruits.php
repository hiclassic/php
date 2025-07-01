
<?php
namespace Flowr;

class Flower {
  // Properties
  public $name="bmw";
  public $color="red";

  // Methods
 public function show($name) {
    $this->name = $name;
    return $this->name;
  }
}


?>
<?php
require 'fruits.php';
require 'flower.php';

use Flowr\Flower;
use Fruits\Fruit;
$banana = new Fruit();
echo $banana->name;
echo "<br>";
echo $banana->info('sdsa');

$flowr =new Flower();
echo $flowr-> show("Rose");

?>