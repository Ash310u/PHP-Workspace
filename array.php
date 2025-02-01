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
    
    // Method 4: Using array_push()
    $fruits4 = $fruits3;
    array_push($fruits4, "Watermelon", "Plum", "Cherry");
    
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
    
    echo "<h4>Method 4: Using array_push()</h4>";
    echo "<pre>";
    print_r($fruits4);
    echo "</pre>";
?>
