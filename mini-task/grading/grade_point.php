<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade point</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="num" placeholder="Enter a number">
        <input type="submit" name="submit" value="Check Grade Point">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num = (int)$_POST['num'];
        if ($num >= 80 && $num <= 100) {
            echo "Grade Point: A";
        } elseif ($num >= 70 && $num < 80) {
            echo "Grade Point: B";
        } elseif ($num >= 60 && $num < 70) {
            echo "Grade Point: C";
        } elseif ($num >= 50 && $num < 60) {
            echo "Grade Point: D";
        } else {
            echo "Grade Point: F";
        } 
    } 
    ?>
</body>
</html>