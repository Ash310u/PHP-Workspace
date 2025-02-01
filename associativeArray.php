<?php
    // Create an associative array of student grades
    $studentGrades = array(
        "John" => 85,
        "Sarah" => 92,
        "Michael" => 78,
        "Emma" => 95
    );

    // Alternative syntax using square brackets
    $carDetails = [
        "make" => "Toyota",
        "model" => "Camry", 
        "year" => 2022,
        "color" => "Silver"
    ];

    // Display the arrays
    echo "<h3>Student Grades:</h3>";
    echo "<pre>";
    print_r($studentGrades);
    echo "</pre>";

    echo "<h3>Car Details:</h3>";
    echo "<pre>";
    print_r($carDetails);
    echo "</pre>";

    // Accessing specific values
    echo "<h3>Accessing Values:</h3>";
    echo "John's grade: " . $studentGrades["John"] . "<br>";
    echo "Car model: " . $carDetails["model"] . "<br>";

    // Adding new elements
    $studentGrades["Lisa"] = 88;
    $carDetails["mileage"] = 15000;

    // Display updated arrays
    echo "<h3>Updated Arrays:</h3>";
    echo "<pre>";
    print_r($studentGrades);
    echo "</pre>";

    echo "<pre>";
    print_r($carDetails);
    echo "</pre>";
?>

