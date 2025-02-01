<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="radius" placeholder="Radius">
        <input type="submit" value="Total">
    </form>
    <br>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $pi = pi();
    $circumference = null;
    $area = null;
    $volume = null; 
    
    $circumference = round(2 * $pi * $radius, 2);
    $area = round($pi * pow($radius, 2), 2);
    $volume = round((4/3) * $pi * pow($radius, 3), 2);
    
    echo "Circumference: {$circumference} cm <br>";
    echo "Area: {$area} cm^2 <br>";
    echo "Volume: {$volume} cm^3 <br>";
?>