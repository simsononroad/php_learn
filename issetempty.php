<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a php-file</title>
</head>
<body>
    <form action="issetempty.php" method="post">
        <label for="">Email:</label><br>
        <input type="text" name="email" id=""><br>
        <label for="">Jelszó:</label><br>
        <input type="text" name="password" id=""><br>
        <input type="submit" name="" value="Tovább" id=""><br>
    </form>
</body>
</html>


<?php
    $email = $_POST["email"];
    $password = $_POST["password"];
    if(empty($email) || empty($password)){
        echo"Tölts ki minden mezőt";
    }else{
        echo"Minden ki van töltve!";
    }

?>

