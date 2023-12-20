<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
include "ClaseBici.php";
$bici = new ClaseBici(3, "azul");
$bici->infoBici();
$bici->setColor("verde");
$bici->infoBici();
$numeroRuedas = $bici->getNumRuedas();
echo "La bici tiene " . $numeroRuedas . " ruedas por alguna razón<br>";
?>
</body>
</html>