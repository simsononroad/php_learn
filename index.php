<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a php-file</title>
</head>
<body>
    <form action="index.php" method="post">
    </form>
</body>
</html>


<?php
    $usrname = "";
    if(empty($usrname)){
        echo"A változó üres!";
    }else{
        echo"A változó nincs beállítva!";
    }
?>

