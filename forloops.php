<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a php-file</title>
</head>
<body>
    <form action="forloops.php" method="post">
        <label for="">Meddig számoljon?</label>
        <input type="text" placeholder="int" name="counter" id="">
        <br>
        <input type="submit" value="start" name="" id="">
    </form>
</body>
</html>


<?php
    $count = $_POST["counter"];
    $count++;
    for($i = 1; $i < $count; $i++){
        echo"{$i}<br>";
    }
?>

