

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="num1" placeholder="Enter a number">
        <input type="text" name="num2" placeholder="Enter a number">
        <input type="text" name="num3" placeholder="Enter a number">
        <input type="submit" name="submit" value="Check Largest">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num1 = (int)$_POST['num1'];
        $num2 = (int)$_POST['num2'];
        $num3 = (int)$_POST['num3'];
        if ($num1 > $num2 && $num1 > $num3) {
            echo "Largest number: $num1";
        } elseif ($num2 > $num1 && $num2 > $num3) {
            echo "Largest number: $num2";
        } else {
            echo "Largest number: $num3";
        } 
    } 
    ?>
</body>
</html>