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


<?php
    $hours = 40;
    $rate = 15;
    $weekly_pay = null;
    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    echo"A héten ennyit fizettél: {$weekly_pay}Huf";
?>

