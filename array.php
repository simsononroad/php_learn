<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a php-file</title>
</head>
<body>
    <form action="array.php" method="post">
        <label for="">Meddig számoljon?</label>
        <input type="text" placeholder="int" name="counter" id="">
        <br>
        <input type="submit" value="start" name="" id="">
    </form>
</body>
</html>


<?php
    $foods = array("Apple", "Orange", "Bannana", "Coconut");
    //$foods[0] = "Pineapple";
    //array_push($foods, "pineapple", "kiwi");
    //array_pop($foods);
    //array_shift($foods)
    //$rfoods = array_reverse($foods);


    foreach($foods as $food){
        echo"{$food} <br>";
    }
?>

