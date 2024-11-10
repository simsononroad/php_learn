<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza" id="">Pizza <br>
        <input type="checkbox" name="hamburger" value="Hamburger" id="">Hamburger <br>
        <input type="checkbox" name="hotdog" value="HotDog" id="">hotdog <br>
        <input type="checkbox" name="taco" value="Taco" id="">Taco <br>
        <input type="submit" name="submit" value="Tovább" id="">

    </form>
</body>
</html>

<?php
    $pizza = $_POST["pizza"];
    $hamburger = $_POST["hamburger"];
    $hotdog = $_POST["hotdog"];
    $taco = $_POST["taco"];
    $submit = $_POST["submit"];
    if(isset($submit)){
        if(isset($pizza)){
            echo"Te szereted a pizzát <br>";
        }if(isset($hamburger)){
            echo"Te szereted a hamburgert <br>";
        }if(isset($hotdog)){
            echo"Te szereted a hotdog-ot <br>";
        }if(isset($taco)){
            echo"Te szereted a Taco-t <br>";
        }else{
            echo"Te nem szeretsz semmit <br>";
        }
    }
?>