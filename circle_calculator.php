<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a php-file</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Radius</label>
        <input type="text" name="radius" id="">
        <br>
        <input type="submit" name="" id="" value="calculate">
    </form><br>
</body>
</html>


<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);
    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);
    echo"A körnek a kerülete: {$circumference}cm<br>";
    echo"A gömbnek a területe: {$area}cm^2";
    echo"Volume: {$volume}cm^3";
?>

