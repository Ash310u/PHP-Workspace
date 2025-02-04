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

    // Check if key exists
    echo "<h3>Key Existence Check:</h3>";
    echo "Does 'Lisa' exist? " . (array_key_exists("Lisa", $studentGrades) ? "Yes" : "No") . "<br>";
    echo "Does 'Tom' exist? " . (isset($studentGrades["Tom"]) ? "Yes" : "No") . "<br>";

    // Get all keys and values
    echo "<h3>Array Keys and Values:</h3>";
    echo "Student names: " . implode(", ", array_keys($studentGrades)) . "<br>";
    echo "All grades: " . implode(", ", array_values($studentGrades)) . "<br>";

    // Sorting arrays
    echo "<h3>Sorted Arrays:</h3>";
    $sortedGrades = $studentGrades;
    asort($sortedGrades); // Sort by values
    echo "Sorted by grades:<br>";
    echo "<pre>";
    print_r($sortedGrades);
    echo "</pre>";

    ksort($studentGrades); // Sort by keys
    echo "Sorted by names:<br>";
    echo "<pre>";
    print_r($studentGrades);
    echo "</pre>";

    // Counting and Sum
    echo "<h3>Array Statistics:</h3>";
    echo "Number of students: " . count($studentGrades) . "<br>";
    echo "Average grade: " . (array_sum($studentGrades) / count($studentGrades)) . "<br>";

    // Merging arrays
    $moreStudents = ["David" => 91, "Alice" => 87];
    $allStudents = array_merge($studentGrades, $moreStudents);
    echo "<h3>Merged Arrays:</h3>";
    echo "<pre>";
    print_r($allStudents);
    echo "</pre>";

    // Search in array
    echo "<h3>Search in Array:</h3>";
    $searchGrade = 95;
    echo "Student with grade $searchGrade: " . array_search($searchGrade, $studentGrades) . "<br>";
?>
