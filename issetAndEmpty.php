<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="issetAndEmpty.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="username"> <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="password"> <br>
        <input type="submit" name="login" value="login"> <br>
    </form>
</body>
</html>

<?php
    foreach($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
    
    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)) {
            echo "Username is missing";
        } elseif (empty($password)) {
            echo "Password is missing";
        }else {
            echo "Hello {$username}";
        }
    }
?>