<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a php-file</title>
</head>
<body>
    <form action="radio_button.php" method="post">
        <input type="radio" value="visa" name="credit_card" id="">Visa<br>
        <input type="radio" value="master_card" name="credit_card" id="">master card<br>
        <input type="radio" value="k&h" name="credit_card" id="">K&H<br>
        <input type="submit" value="confirm" name="confirm" id="">
    </form>
</body>
</html>


<?php

    if(isset($_POST["confirm"])){
        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }
        if($credit_card == "visa"){
            echo"A Visát választottad";
        }elseif($credit_card == "master_card"){
            echo"A Mastercard-ot választottad";
        }elseif($credit_card == "k&h"){
            echo"A K&H-t választottad";
        }else{
            echo"Nem választottál semmit!";
        }
    }
?>

