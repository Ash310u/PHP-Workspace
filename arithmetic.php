<?php
    $x = 10;
    $y = 2;
    
    echo "<h2>x = {$x}, y = {$y}</h2>";

    // Arithmetic Operators
    // +, -, *, /, **, %

    // Addition
    $sum = $x + $y;
    echo "{$x} + {$y} = {$sum}<br>";

    // Subtraction
    $difference = $x - $y;
    echo "{$x} - {$y} = {$difference}<br>";

    // Multiplication
    $product = $x * $y;
    echo "{$x} * {$y} = {$product}<br>";

    // Division
    $quotient = $x / $y;
    echo "{$x} / {$y} = {$quotient}<br>";

    // Exponentiation
    $exponentiation = $x ** $y;
    echo "{$x} ** {$y} = {$exponentiation}<br>";

    // Modulus
    $modulus = $x % $y;
    echo "{$x} % {$y} = {$modulus}<br>";

    
    // Increment/decrement Operator
    // ++, --,
    // +=, -=, *=, /=, **=, %= ( same concept as arithmetic operations by the number given)
    
    // Increment (++ adds 1 to the variable)
    $x++;    // x is now 11
    echo "After increment, x is: {$x}<br>";

    // Decrement (-- subtracts 1 from the variable)
    $y--;    // y is now 1
    echo "After decrement, y is: {$y}<br>";

    // Operator Precedence
    // ()
    // **
    // * / %
    // + -
    // Precedence is the order in which operators are evaluated in an expression.
    $result = 2 + 3 * 4 ** 2 - 6;  // 4² = 16, then 3 * 16 = 48, then 2 + 48 - 6 = 44
    echo "2 + 3 * 4 ** 2 - 6 = {$result}<br>";  // Output: 44

    $result2 = (2 + 3) * 4 ** 2 - 6;  // (2 + 3) = 5, then 4² = 16, then 5 * 16 = 80, then 80 - 6 = 74
    echo "(2 + 3) * 4 ** 2 - 6 = {$result2}<br>";  // Output: 74
?>