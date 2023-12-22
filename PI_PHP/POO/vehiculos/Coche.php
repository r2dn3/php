<?php

//es necesario incluir la clase de la que queremos extender, y, para evitar problemas, es mejor hacerlo con el _once.
require_once("Vehiculo.php");

//con esta clase extendemos de vehiculo, y la he hecho de tal menera que establezca los atributos de vehiculo para
//que sea un coche. Es decir, tendra cuatro ruedas y un motor de 1600. El color lo elegi aleatorio.
//Como se puede ver, se puede llamar al metodo $this->setLoQueSea() para establecer el valor de los atributos o propiedades
//De esta manera, se puede llamar a la clase tal que asi:
//$coche = new Coche(); sin tener que pasarle parametros
class Coche extends Vehiculo
{
    public function __construct()
    {
        $this->setRuedas("4");
        $this->setColor("Azul");
        $this->setMotor(1600);
    }

    public function arrancar(int $marcha)
    {
        parent::arrancar($marcha);
    }
}