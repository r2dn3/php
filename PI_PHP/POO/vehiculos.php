
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


        function arrancar(int $marcha){
            echo "Estoy arrancando en la marcha " . $marcha . "<br>";
        }

        function girar(){
            echo "Estoy girando <br>";
        }

        function frenar(){
            echo "Estoy frenando <br>";
        }


    }

//---------------------------------------------------------------------------------------------------------

class Camion{

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


    function arrancar(int $marcha){
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
