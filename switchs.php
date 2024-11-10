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
    $date = date("1");
    switch($date){
        case "Hétfő":
            echo"Utálom a hétfőt";
            break;
        case "Kedd":
            echo"A kedd egy fokkal jobb";
            break;
        case "Szerda":
            echo"Már cak 2 nap";
            break;
        case "Csütörtök":
            echo"Ma van lsc";
            break;
        case "Péntek":
            echo"Ez már jó";
            break;
        default:
            echo"Hétvége van vagy hibás adatot adtál meg";
            break;
    }
?>

