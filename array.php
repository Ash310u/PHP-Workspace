<?php
    // Method 1: Using array() function
    $fruits1 = array("Apple", "Banana", "Orange");
    
    // Method 2: Using square bracket syntax []
    $fruits2 = ["Mango", "Strawberry", "Grape"];
    
    // Method 3: Creating array element by element
    $fruits3 = array();
    $fruits3[0] = "Pineapple";
    $fruits3[1] = "Kiwi";
    $fruits3[2] = "Peach";
    
    
    // Display all arrays
    echo "<h3>Different Ways to Create Arrays:</h3>";
    
    echo "<h4>Method 1: array() function</h4>";
    echo "<pre>";
    print_r($fruits1);
    echo "</pre>";
    
    echo "<h4>Method 2: Square bracket(['','','']) syntax</h4>";
    echo "<pre>";
    print_r($fruits2);
    echo "</pre>";
    
    echo "<h4>Method 3: Element by element</h4>";
    echo "<pre>";
    print_r($fruits3);
    echo "</pre>";
    
    // Method 4: Demonstrating array manipulation methods
    $fruits4 = ["Apple", "Banana", "Orange", "Mango", ...$fruits3];
    
    // array_push() - Add elements to end of array
    array_push($fruits4, "Pear");
    
    // array_pop() - Remove and return last element
    $lastFruit = array_pop($fruits4);
    
    // array_unshift() - Add elements to start of array  
    array_unshift($fruits4, "Strawberry");
    
    // array_shift() - Remove and return first element
    $firstFruit = array_shift($fruits4);
    
    // array_reverse() - Reverse array order
    $reversedFruits = array_reverse($fruits4);
    
    // array_slice() - Extract portion of array
    $slicedFruits = array_slice($fruits4, 1, 2);
    
    // Display array manipulation results
    echo "<h4>Method 4: Array manipulation methods</h4>";
    
    echo "Original array: ";
    echo "<pre>";
    print_r($fruits4);
    echo "</pre>";
    
    echo "<br>Used array_push() to add: Pear";
    echo "<br>Last fruit removed (pop): " . $lastFruit;
    
    echo "<br>Used array_unshift() to add: Strawberry";
    echo "<br>First fruit removed (shift): " . $firstFruit;
    

    echo "<pre>";
    echo "<br>Reversed array: ";
    echo "<pre>";
    print_r($reversedFruits);
    echo "</pre>";
    
    echo "<br>Sliced array (elements 1-2): ";
    echo "<pre>";
    print_r($slicedFruits);
    echo "</pre>";
    echo "<br>";
?>
