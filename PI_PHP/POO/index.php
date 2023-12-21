<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

    include ("vehiculos.php");

    $mazda = new Coche(4, "Verde", 1600);
    $seat = new Camion(8, "Rojo", 2600);

    echo "El coche tiene " . $mazda->getRuedas() . " ruedas <br>";
    echo "El camión tiene " . $seat->getRuedas() . " ruedas <br>";

?>
</body>
</html>