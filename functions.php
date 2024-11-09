<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>
    <form action="functions.php" method="post">
        <label for="">x</label>
        <input type="text" name="x" id="">
        <br>
        <label for="">y</label>
        <input type="text" name="y" id="">
        <br>
        <label for="">z</label>
        <input type="text" name="z" id="">
        <br>
        <input type="submit" name="" id="" value="total">
    </form>
</body>
</html>


<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;
    //$total = abs($x);         <-- Abszolutt érték
    //$total = round($x);       <-- Kerekítés
    //$total = floor($x);       <-- lefelé kerekítés
    //$total = ceil($x);        <-- Felfele kerekítés
    //$total = pow($x, $y);     <-- Hatványozás
    //$total = sqrt($x);        <-- Gyökvonás
    //$total = max($x, $y, $z); <-- Melyik a legnagyobb szám
    //$total = min($x, $y, $z); <-- Melyik a legkissebb szám
    //$total = pi();            <-- pi
    //$total = rand($x, $y);    <-- Random szám
    echo $total
?>

