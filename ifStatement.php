<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="age" placeholder="Age">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
    $age = $_POST["age"];
    
    if($age >= 50){
        echo "You are Buddha.";
    }
    elseif($age >= 18){ 
        echo "You are an adult.";
    }
    elseif($age >= 13){
        echo "You are a teenager.   ";
    }
    elseif($age >= 1){
        echo "You are a child.";
    }
    elseif($age == 0){
        echo "You just born.";
    }
    else{
        echo "Mama's belly is not transparent, you will not able to see.";
    }
?>