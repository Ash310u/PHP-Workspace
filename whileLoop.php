<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stopwatch</title>
</head>

<body>
    <!-- Form to collect minutes and seconds input from user -->
    <h2>PHP Stopwatch</h2>
    <form action="" method="post">
        <input type="number" name="minutes" placeholder="Minutes" min="0" max="59">
        <input type="number" name="seconds" placeholder="Seconds" min="0" max="59">
        <input type="submit" value="Start Timer">
    </form>
</body>

</html>

<?php
    // Get and convert input values to integers
    $minutes = (int)$_POST["minutes"];
    $seconds = (int)$_POST["seconds"];
    
    // Convert minutes and seconds to total seconds
    $totalSeconds = ($minutes * 60) + $seconds;
    
    // Countdown loop that runs until totalSeconds reaches 0
    while($totalSeconds >= 0) {
        // Convert current total seconds back to minutes and seconds for display
        $displayMinutes = floor($totalSeconds / 60);
        $displaySeconds = $totalSeconds % 60;
        
        // Format and display the time as MM:SS
        echo sprintf("%02d:%02d", $displayMinutes, $displaySeconds) . "<br>";
        
        // flush() and ob_flush() work together to ensure real-time output:
        // 1. ob_flush() clears PHP's internal output buffer that temporarily stores output
        // 2. flush() tells the web server to send that output to the browser right away
        // Without both, output may be buffered/delayed until script completion
        ob_flush();
        flush();
        
        // Pause execution for 1 second to create countdown effect
        sleep(1);
        
        // Decrement the total seconds
        $totalSeconds--;
    }
    
    // Display completion message when countdown finishes
    echo "Time's up!";
?>