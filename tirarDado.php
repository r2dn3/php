<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

    include "dado.php";

    $dado = new  Dado(0, 12);

    for ($i = 0; $i <= 12; $i++){

        $dado -> tirarDado();

    }
?>
</body>
</html>