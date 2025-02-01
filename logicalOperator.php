<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
    <h2>PHP Logical Operators Examples</h2>
</body>
</html>

    
<?php
    // Simple examples using age and temperature
    $age = 25;
    $temp = 35;
    $hasID = true;
    $isRaining = false;

    // AND operator (&&) - Both conditions must be true
    echo "<h3>AND Operator (&&)</h3>";
    if($age >= 18 && $hasID) {
        echo "You can enter the club (age is $age and has ID)<br>";
    }

    // OR operator (||) - At least one condition must be true
    echo "<h3>OR Operator (||)</h3>";
    if($temp >= 30 || $isRaining) {
        echo "Stay inside! (temperature is $temp°C or it's raining)<br>";
    }

    // NOT operator (!) - Reverses the boolean value
    echo "<h3>NOT Operator (!)</h3>";
    if(!$isRaining) {
        echo "It's not raining, you can go outside!<br>";
    }

    // XOR operator - Only one condition must be true, not both
    echo "<h3>XOR Operator</h3>";
    $hasUmbrella = true;
    if($isRaining xor $hasUmbrella) {
        echo "You either need an umbrella, or have one, but not both!<br>";
    }

    // Logical AND operator (and) - Alternative to &&
    echo "<h3>Logical AND (and)</h3>";
    if($age >= 18 and $hasID) {
        echo "You can enter the club (using 'and' operator)<br>";
    }

    // Logical OR operator (or) - Alternative to ||
    echo "<h3>Logical OR (or)</h3>";
    if($temp >= 30 or $isRaining) {
        echo "Stay inside! (using 'or' operator)<br>";
    }
?>
