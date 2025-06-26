<form action="" method="post">
    <input type="number" name="num">
    <input type="submit">
</form>
<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    $count = 0;
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $count++;
        }
    }
    if ($count == 2) {
        echo "prime number";
    } else {
        echo "not prime number";
    }
}
?> 

//The isset() function checks whether a variable is set, and returns TRUE if the variable is set, and FALSE if not.

//The $_POST superglobal variable contains the data sent through the HTTP POST method.



