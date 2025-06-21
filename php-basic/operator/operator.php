<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operator</title>
</head>
<body>
    <h1>php operator</h1>
    <?php
    // Arithmetic Operators
    $a = 10;
    $b = 5;
    echo "Addition: " . ($a + $b) . "<br>"; // 15
    echo "Subtraction: " . ($a - $b) . "<br>"; // 5
    echo "Multiplication: " . ($a * $b) . "<br>"; // 50
    echo "Division: " . ($a / $b) . "<br>"; // 2
    echo "Modulus: " . ($a % $b) . "<br>"; // 0
    echo "Exponentiation: " . ($a ** $b) . "<br>"; // 100000
    echo "<br>";
    // Assignment Operators
    $c = 20;
    $c += 10; // Equivalent to $c = $c + 10
    echo "Assignment (+=): " . $c . "<br>"; // 30
    $c -= 5; // Equivalent to $c = $c - 5
    echo "Assignment (-=): " . $c . "<br>"; // 25
    $c *= 2; // Equivalent to $c = $c * 2
    echo "Assignment (*=): " . $c . "<br>"; // 50
   
 $c /= 5; // Equivalent to $c = $c / 5
    echo "Assignment (/=): " . $c . "<br>"; // 10
    $c %= 3; // Equivalent to $c = $c % 3
    echo "Assignment (%=): " . $c . "<br>"; // 1
    $c .= " is the result"; // Equivalent to $c = $c . " is the result"
    echo "Assignment (.=): " . $c . "<br>"; // 1 is the result
    echo "<br>";
    // Comparison Operators
    $d = 10;
    $e = 20;
    echo "Equal: " . ($d == $e) . "<br>"; // false
    echo "Not Equal: " . ($d != $e) . "<br>"; // true
    echo "Greater Than: " . ($d > $e) . "<br>"; // false
    echo "Less Than: " . ($d < $e) . "<br>"; // true
    echo "Greater Than or Equal: " . ($d >= $e) . "<br>"; // false
    echo "Less Than or Equal: " . ($d <= $e) . "<br>"; // true
    echo "<br>";
    // Logical Operators
    $f = true;
    $g = false;
    echo "Logical AND: " . ($f && $g) . "<br>"; // false
    echo "Logical OR: " . ($f || $g) . "<br>"; // true
    echo "Logical NOT: " . (!$f) . "<br>"; // false
    echo "<br>";
    // Increment and Decrement Operators
    $h = 10;
    echo "Increment: " . ++$h . "<br>"; // 11
    echo "Decrement: " . --$h . "<br>"; // 10
    echo "<br>";
    // Bitwise Operators
    $i = 5; // 101 in binary
    $j = 3; // 011 in binary
    echo "Bitwise AND: " . ($i & $j) . "<br>"; // 001 in binary, which is 1 in decimal
    echo "Bitwise OR: " . ($i | $j) . "<br>"; // 111 in binary, which is 7 in decimal
    echo "Bitwise XOR: " . ($i ^ $j) . "<br>"; // 110 in binary, which is 6 in decimal
    echo "Bitwise NOT: " . (~$i) . "<br>"; // 010 in binary, which is 2 in decimal
    echo "Bitwise Left Shift: " . ($i << 2) . "<br>"; // 0100 in binary, which is 4 in decimal
    echo "Bitwise Right Shift: " . ($i >> 1) . "<br>"; // 001 in binary, which is 1 in decimal
    echo "<br>"; echo "Bitwise AND: ". ($i & $j) .  "<br>"; // 1
    echo "Bitwise OR: ". ($i | $j) .  "<br>"; // 7
    echo "Bitwise XOR: ". ($i ^ $j) .  "<br>"; // 6
    echo "Bitwise NOT: ". (~$i) .  "<br>"; // -6
    echo "Bitwise Left Shift: ". ($i << 1) .  "<br>"; // 10
    echo "Bitwise Right Shift: ". ($i >> 1) .  "<br>"; // 2
    ?>
</body>
</html>