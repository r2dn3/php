<?php

//es necesario incluir la clase de la que queremos extender, y, para evitar problemas, es mejor hacerlo con el _once.
require_once("Vehiculo.php");

//con esta clase extendemos de vehiculo, y la he hecho de tal menera que establezca los atributos de vehiculo para
//que sea un coche. Es decir, tendra cuatro ruedas y un motor de 1600. El color lo elegi aleatorio.
//Como se puede ver, se puede llamar al metodo $this->setLoQueSea() para establecer el valor de los atributos o propiedades
//De esta manera, se puede instanciar la clase tal que asi:
//$coche = new Coche(); sin tener que pasarle parametros
class Coche extends Vehiculo
{
    
    private static int $mejorMotor = 2000;
    
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
    
    //un metodo estatico se comparte con todas las instancias u objetos de esta clase que creemos
    //este metodo pertenece a la clase, no a las instancias
    //este metodo puede ser llamado sin necesidad de instanciar una clase de la siguiente manera:
    // nombreClase::nombreMetodo([posibles_parametros]);
    public static function claxon(){
        echo "toco mi claxon";
}
    
    //en esta función, utilizo la variable estatica $mejorMotor para mejorar el motor que tiene el coche de serie
    //para llamar a la variable estatica se usa self::, como se puede ver, hace referencia a la clase como tal,
    //mientras que this-> hace referencia al objeto instanciado
    public function mejorarMotor(){
        $this->setMotor(self::$mejorMotor);
    }

}