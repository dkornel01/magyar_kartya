<?php
    include_once './Ab.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dobrocsi_Kornél_magyar_kártya</title>
</head>
<body>
    <?php
    $adatbazis = new Ab();
    $adatbazis->adatLeker("név","kép","szín");
    $adatbazis->kapcsolatBezar();
    ?>
</body>
</html>