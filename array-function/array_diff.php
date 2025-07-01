
<?php 
$one=array("a","b","c");
$two=array("a","b","t");
$three=array("f","b","r");
$diff=array_diff($one,$two,$three);
print_r($diff);

echo "<br>";
echo "<br>";
?>


<?php
$a = [1, 2, 3, 4];
$b = [2, 4];
print_r(array_diff($a, $b));
echo "<br>";
echo "<br>";
?>