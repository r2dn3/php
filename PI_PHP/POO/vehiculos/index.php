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

    //primero incluimos las clases coche y camion para realizar pruebas con ellas
    include ("Coche.php");
    include ("Camion.php");

    //instanciamos las clases, como se puede ver no hay necesidad de pasarle parametros
    $mazda = new Coche();
    $seat = new Camion();

    //y podemos usarlas para recoger el valor de sus propiedades o ejecutar los metodos que habia presentes
    //en la clase Vehiculo
    echo "El coche tiene " . $mazda->getRuedas() . " ruedas <br>";
    echo "El camión tiene " . $seat->getRuedas() . " ruedas <br>";
    echo $mazda->arrancar(2);
    echo $seat->arrancar(1);
    echo $seat->girar() . "<br>";
    
    //al ser un método estatico me permite llamarlo sin instanciar una clase
    Coche::claxon();
    
    //hago uso del método mejorarMotor(), que a su vez hace uso de la variable estatica $mejorMotor
    echo "<br> El motor del mazda es: " . $mazda->getMotor();
    $mazda->mejorarMotor();
    echo "<br> El motor mejorado del mazda es: " . $mazda->getMotor();
    
    

    /*
     * Resultado de ejecutar los echos de arriba:
     *
     * El coche tiene 4 ruedas
     * El camión tiene 8 ruedas
     * Estoy arrancando en la marcha 2
     * Arranco mi camión en la marcha 1
     * Estoy girando
     * Mi camión giró
     * toco mi claxon
     * El motor del mazda es: 1600
     * El motor mejorado del mazda es: 2000
     *
     */
?>
</body>
</html>