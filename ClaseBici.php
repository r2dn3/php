<?php

class ClaseBici
{
    private $numRuedas;
    private $color;
    private $deRebaja;

    /**
     * @return mixed
     */
    public function getNumRuedas()
    {
        return $this->numRuedas;
    }

    /**
     * @param mixed $numRuedas
     */
    public function setNumRuedas($numRuedas): void
    {
        $this->numRuedas = $numRuedas;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getDeRebaja()
    {
        return $this->deRebaja;
    }

    /**
     * @param mixed $deRebaja
     */
    public function setDeRebaja($deRebaja): void
    {
        $this->deRebaja = $deRebaja;
    }

    public function __construct($numRuedas, $color, $deRebaja=false){
        $this->numRuedas = $numRuedas;
        $this->color = $color;
        $this->deRebaja = $deRebaja;
    }

    public function infoBici(){
        if(!$this->deRebaja) {
            echo "La bicicleta es de color " . $this->color . " y tiene " . $this->numRuedas . " ruedas.<br>";
        }
        else{
            echo "La bicicleta es de color " . $this->color . ", tiene " . $this->numRuedas . " ruedas y está de rebaja.<br>";
        }
    }
}

?>