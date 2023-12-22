<?php

//de nuevo, hay que incluir con la version _once de require o include la clase de la que queremos extender.
require_once("Vehiculo.php");

//al igual que con la clase coche, quise inicializar los atributos o propiedades para qu sean aquellos de un camion.
//De esta manera, se puede llamar a la clase tal que asi:
//$camion = new Camion(); sin tener que pasarle parametros
class Camion extends Vehiculo
{
    public function __construct()
    {
        $this->setRuedas("8");
        $this->setColor("Verde");
        $this->setMotor(2600);
    }

    //ejemplo muy sencillo en el que sobreescribimos el método de Vehiculo.php
    //tambien se le ha cambiado el nombre a $marchas para que se vea que se puede
    public function arrancar(int $marchas){
        echo "Arranco mi camión en la marcha " . $marchas;
    }

    //añadiendo parent::metodo() hacemos que se ejecute el contenido del metodo() presente en parent
    public function girar()
    {
        echo "<br>";
        parent::girar();
        echo "Mi camión giró";
    }
}