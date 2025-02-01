<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="GET_POST_Variables.php" method="post">
        <label for="username">Select a fruit</label>
        <select name="fruit" id="fruit">
            <option value="40">Apple (40)</option>
            <option value="30">Banana (30)</option>
            <option value="20">Cherry (20)</option>
        </select>
        <br>
        <label for="pieces">Pieces</label>
        <input type="number" name="pieces" id="pieces" min="1" max="100">
        <br>
        <input type="submit" value="TOTAL">
        <br>
    </form>
</body>

</html>

<?php
// $_GET, $_POST = special variables used to collect data from an HTML form
//                 data is sent to the file in the action attribute of <form>
//                 <form action="some_file.php" method="get">

//$_GET = Data is appended to the url
//        NOT SECURE
//        char limit
//        Bookmark is possible w/ values
//        GET requests can be cached
//        Better for a search page

$fruit = $_POST["fruit"];
$pieces = $_POST["pieces"];
$total = null;
$total = $fruit * $pieces;
echo "Total price: $" . $total;
echo "<br>";
// logging the GET variables in console
print_r($_GET);


//$_POST = Data is packaged inside the body of the HTTP request
//        More secure
//        No char limit
//        Bookmark is not possible w/ values
//        POST requests are not cached
//        Better for a form

?>