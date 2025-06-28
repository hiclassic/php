
<?php
// isset() function is used to check if a variable is set or not.
// It returns true if the variable is set, false otherwise.


$var = 10;
if (isset($var)) {
    echo "The variable 'var' is set.<br>";
} else {
    echo "The variable 'var' is not set.<br>";
}
echo $var;
echo "<br>";
var_dump($var);
echo "<br>";
echo "<br>";
?>  


<?php
$var = null;
if (isset($var)) {
    echo "The variable 'var' is set.<br>";
} else {
    echo "The variable 'var' is not set.<br>";
}
echo $var;
echo "<br>";
var_dump($var);
echo "<br>";
echo "<br>";
?>


<?php
$var = false;
if (isset($var)) {
    echo "The variable 'var' is set.<br>";
} else {
    echo "The variable 'var' is not set.<br>";
}
echo $var;
echo "<br>";
var_dump($var);
echo "<br>";
echo "<br>";
?>



<?php
$var = "";
if (isset($var)) {
    echo "The variable 'var' is set.<br>";
} else {
    echo "The variable 'var' is not set.<br>";
}
echo $var;
echo "<br>";
var_dump($var);
echo "<br>";
echo "<br>";
?>



<?php
$var = 0;
if (isset($var)) {
    echo "The variable 'var' is set.<br>";
} else {
    echo "The variable 'var' is not set.<br>";
}
echo $var;
echo "<br>";
var_dump($var);
echo "<br>";
echo "<br>";
?>


<?php
$var = array();
if (isset($var)) {
    echo "The variable 'var' is set.<br>";
} else {
    echo "The variable 'var' is not set.<br>";
}
echo $var;
echo "<br>";
var_dump($var);
echo "<br>";
echo "<br>";
?>





 

<?php
$var = null;
if (!isset($var)) {
    echo "The variable 'var' is not set.<br>";
} else {
    echo "The variable 'var' is set.<br>";
}
echo $var;
echo "<br>";
var_dump($var);
echo "<br>";
echo "<br>";
?>
