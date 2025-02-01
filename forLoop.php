<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop Example</title>
</head>
<body>
    <h2>PHP For Loop Examples</h2>
    <form action="" method="post">
        <input type="number" name="number" min="1" max= "1000" placeholder="Enter a number">
        <input type="submit" value="Check if Odd">
    </form>
</body>
</html>

<?php
    $number = $_POST["number"];

    // Print even numbers from 2 to 10
    for ($i = 0; $i <= $number; $i++) {
        if($i % 2 != 0) echo "$i<br>";
    }
?>
