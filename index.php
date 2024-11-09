<?php
    $name = "Gyuris Dániel";
    $food = "pizza";
    $email = "dani@oregpreshaz.eu";
    
    $age = 15;
    $users = 2;
    $rendeles = 3;
    $price = 4000;
    
    $gpa = 2.5;
    
    $employed = true;
    $online = true;

    $total = null;

    echo"You have ordered {$rendeles}X{$food}<br>";
    $total = $rendeles * $price;
    echo"Your total is {$total}Huf";

?>



<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a php-file</title>
</head>
<body>
</body>
</html>