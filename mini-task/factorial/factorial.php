<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="num" placeholder="Enter a number">
        <input type="submit" name="submit" value="Check Factorial">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num = (int)$_POST['num'];
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
            $factorial *= $i;
        }
        echo "Factorial of $num is: $factorial";
    } 
    ?>
</body>
</html>