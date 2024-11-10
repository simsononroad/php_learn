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
    $grade = 5;
    $date = date("1");
    switch($grade){
        case 5:
            echo"Ügyes vagy!";
            break;
        case 4:
            echo"Egész jó vagy!";
            break;
        case 3:
            echo"jó vagy!";
            break;
        case 2:
            echo"Megcsináltad!";
            break;
        case 1:
            echo"Ez most nem ment!";
            break;
        default:
            echo"{$grade} Nem egy létező jegy";
    }
?>

