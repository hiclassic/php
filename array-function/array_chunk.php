<?php 
$c =array("ab","bc","ca","bd","rg","tk","ab","bc","ca",);
shuffle($c);

$h=array_chunk($c,2);
print_r($h);
echo "<br>";
echo "<br>";
echo "<br>";

?>


<?php
$data = [1, 2, 3, 4, 5, 6];
print_r(array_chunk($data, 2));
?>


