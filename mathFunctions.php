<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mathFunctions.php" method="post">
        <label for="x">x</label>
        <input type="text" name="x" placeholder="Number">
        <label for="y">y</label>
        <input type="text" name="y" placeholder="Number">
        <label for="z">z</label>
        <input type="text" name="z" placeholder="Number">
        <input type="submit" value="Total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);

    // $total = sqrt($x);
    // $total = pow($x, $y);
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);

    // $total = pi();
    // $total = rand();
    // $total = rand(1, 6);
    
    echo $total;
?>