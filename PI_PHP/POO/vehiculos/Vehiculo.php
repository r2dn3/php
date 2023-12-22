
<?php

    //en esta clase definimos los atributos y metodos (incluyendo setters y getters) de la clase vehiculo, la cual posee:
    //numero de ruedas, color y numero de revoluciones (supongo lol) del motor.
    //ademas de esto, declaramos los metodos, es decir, lo que puede hacer:
    //acelerar, girar y frenar.
    //por ultimo (pero al principio) , le declaramos el constructor. se pueden ver las dos formas:
    //entre comentarios se puede ver la forma antigua de declarar el constructor con las variables
    //justo debajo se puede ver la forma nueva de declarar el constructor, muchisimo mas cómoda y rápida.
    class Vehiculo{

        /* Forma antigua de hacerlo
        private int $ruedas;
        private string $color;
        private int $motor;


        public function __construct($ruedas, $color, $motor){
            $this->ruedas = $ruedas;
            $this->color = $color;
            $this->motor = $motor;


        }
        */

        //forma nueva de hacer constructor en php, wow this is much comfier
        protected function __construct(private int $ruedas, private string $color, private int $motor){}


        //al hacer que los setters sean protected, solo se podran modificar los atributos desde las clases heredadas
        public function getRuedas(): int
        {
            return $this->ruedas;
        }

        protected function setRuedas(int $ruedas): void
        {
            $this->ruedas = $ruedas;
        }

        public function getColor(): string
        {
            return $this->color;
        }

        protected function setColor(string $color): void
        {
            $this->color = $color;
        }

        public function getMotor(): int
        {
            return $this->motor;
        }

        protected function setMotor(int $motor): void
        {
            $this->motor = $motor;
        }


        //al hacer la clase protected, tenemos que implementarla de nuevo en las clases heredadas para poder
        //acceder a la misma, si no estariamos llamando al metodo de Vehiculo
        protected function arrancar(int $marcha){
            echo "Estoy arrancando en la marcha " . $marcha . "<br>";
        }

        function girar(){
            echo "Estoy girando <br>";
        }

        function frenar(){
            echo "Estoy frenando <br>";
        }


    }

?>
