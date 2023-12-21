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
    class Coche{

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
        public function __construct(private int $ruedas, private string $color, private int $motor){}


        public function getRuedas(): int
        {
            return $this->ruedas;
        }

        public function setRuedas(int $ruedas): void
        {
            $this->ruedas = $ruedas;
        }

        public function getColor(): string
        {
            return $this->color;
        }

        public function setColor(string $color): void
        {
            $this->color = $color;
        }

        public function getMotor(): int
        {
            return $this->motor;
        }

        public function setMotor(int $motor): void
        {
            $this->motor = $motor;
        }


        function arrancar(){
            echo "Estoy arrancando <br>";
        }

        function girar(){
            echo "Estoy girando <br>";
        }

        function frenar(){
            echo "Estoy frenando <br>";
        }


    }

    $renault = new Coche(4, "Azul", 1600);
    $mazda = new Coche(4, "Verde", 1600);
    $seat = new Coche(4, "Rojo", 1600);

    $mazda->girar();
    echo "El mazda tiene " . $mazda->getRuedas() . " ruedas.";


?>
</body>
</html>