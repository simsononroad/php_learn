<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a php-file</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="">Rendelés: </label><br>
        <input type="text" name="rendeles"><br>
        <input type="submit" name="" value="total">
    </form>
</body>
</html>


<?php
    $item = "pizza";
    $price = 4000;
    $rendeles = $_GET["rendeles"];
    $total = $rendeles * $price;

    echo"Rendelésed: {$rendeles} x {$item}<br>";
    echo"A rendelésed összege: {$total}Huf";
?>

