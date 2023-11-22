<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    //establecemos el numero de categoría a buscar
    $categoria=33;

    //El array lo he cogido practicamente tal y como lo ha puesto
    //el profe
    $array = array(
    0 => array( 'categoria' => 33, 'nombre' => 'Zapatos Roja' ),
    1 => array( 'categoria' => 24, 'nombre' => 'Pantalones Azul' ),
    2 => array( 'categoria' => 33, 'nombre' => 'Zapatos Verde' ),
    3 => array( 'categoria' => 23, 'nombre' => 'Camiseta Roja' ),
    4 => array( 'categoria' => 25, 'nombre' => 'Corbata Azul' ),

    );

    //con el foreach recorremos el array asignando a $productos
    //el valor contenido en cada posición del array
    foreach($array as $productos){
        //verificamos si la categoría de $categoria coincide con la del array
        if($productos['categoria']==$categoria){
            //y mostramos por pantalla el nombre del producto
            echo $productos['nombre'] . "<br>";
        }
    }
    ?>
</body>
</html>