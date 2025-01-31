<?php
    // Variables
    // In PHP variables write with $ sign
    
    // Storing String
    $name = "Ash";
    
    // Storing Number
    $age = 19;
    
    // Storing Float
    $height = 5.9;
    $price = 4.99;
    
    // Storing Boolean
    $isMale = true;
    
    echo "Hello, I'm " . $name . " and I'm " . $age . " years old. I'm " . $height . " feet tall <br>"; 
    
    
    // Using curly braces
    echo "Hello, I'm {$name} and I'm {$age} years old <br>"; 
    // it will integer value of like 1 for true or 0(nothing) for false
    echo "I'm male: {$isMale}<br>";
    
    // Using variables in HTML
    /* ( The PHP interpreter processes the variables {$name} and {$age}, 
    substitutes their values, and outputs the result as an HTML string.
    This string is then sent to the browser, where it is inserted into the Document Object Model (DOM),
    rendering as part of the webpage inside the <body> section (by default, unless specified otherwise). ) */
    echo "<h1>Hello, I'm {$name} and I'm {$age} years old</h1>";
    
    // We have to put a backslash before $ to print the dollar sign(This is called Escape Sequence).
    echo "The price of the burger is \${$price} <br>";

    // Calculating the price of the burger
    $total = $price * 2;
    echo "The total price of the burger is \${$total}";
?>
