<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Read
    $sql = new mysqli("localhost","root","","curso_sql");

    if(mysqli_connect_errno()){
        echo "Conexión fallida: " , mysqli_connect_error();
        exit();
    }

    $resultado = $sql->query("SELECT * FROM productos ORDER BY sección");
    
    while ($row = $resultado -> fetch_array()) {
        echo $row["SECCIÓN"] , " | " , $row["NOMBREARTÍCULO"];
        echo "<br>";
    }

    //update
    // $update = $sql->query("UPDATE PRODUCTOS
    //                        SET PRECIO = 15
    //                        WHERE NOMBREARTÍCULO = 'DESTORNILLADOR'");
    
    //DELETE

    // $delete = $sql->query("DELETE FROM PRODUCTOS WHERE NOMBREARTÍCULO = 'DESTORNILLADOR'");

    //INSERT

    // $insert = $sql->query("INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO, SECCIÓN,NOMBREARTÍCULO,PRECIO,FECHA,IMPORTADO,PAÍSDEORIGEN,FOTO)
    //                        VALUES ('AR01','FERRETERÍA','DESTORNILLADOR',15,'12/03/2024','TRUE','JAPÓN','')");
    ?>
</body>
</html>