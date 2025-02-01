<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="marks" placeholder="Enter exam marks (0-100)" min="0" max="100">
        <input type="submit" value="Calculate Grade">
    </form>
</body>

</html>

<?php
$marks = $_POST["marks"];
$grade = "";

switch (true) {
    case ($marks >= 90):
        $grade = "A+";
        break;
    case ($marks >= 80):
        $grade = "A";
        break;
    case ($marks >= 70):
        $grade = "B";
        break;
    case ($marks >= 60):
        $grade = "C";
        break;
    case ($marks >= 50):
        $grade = "D";
        break;
    case ($marks < 50):
        $grade = "F";
        break;
    default:
        $grade = "Invalid marks";
}

echo "<h3>Results:</h3>";
echo "Marks: $marks<br>";
echo "Grade: $grade<br>";

// Additional feedback based on grade
switch ($grade) {
    case "A+":
        echo "Excellent! Outstanding performance!";
        break;
    case "A":
        echo "Very good! Keep up the great work!";
        break;
    case "B":
        echo "Good performance, but room for improvement.";
        break;
    case "C":
        echo "Average performance. Need to work harder.";
        break;
    case "D":
        echo "Below average. Please seek additional help.";
        break;
    case "F":
        echo "Failed. Must retake the exam.";
        break;
}
?>