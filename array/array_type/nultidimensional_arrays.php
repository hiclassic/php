
<?php 

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);


$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
echo "<br>";
 print_r($car);
 echo "<br>";

?>
//PHP Associative Arrays with nested arrays:
//create five nested arrays
<?php
$family = array(
    "child1" => array(
        "name" => "Emil",
        "year" => 2004
    ),
    "child2" => array(
        "name" => "Tobias",
        "year" => 2007
    ),
    "child3" => array(
        "name" => "Linus",
        "year" => 2011
    )
);

print_r($family);
echo "<br>";
?> 
//create a two-dimensional array
<?php
$family = array(
    array("Emil", 2004),
    array("Tobias", 2007),
    array("Linus", 2011)
);
print_r($family);
echo "<br>";
?>

//create a complex pyramid array using numbers loop
<?php
$family = array();
for ($i = 0; $i < 3; $i++) {
    $family[$i] = array();
    for ($j = 0; $j < 2; $j++) {
        $family[$i][$j] = $i * $j;
    }
}
print_r($family);
echo "<br>";
?>

