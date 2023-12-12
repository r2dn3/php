<?php
//creo la clase Dado
class Dado
{
    //establezco las dos variables requeridas
    private $minNumber;
    private $maxNumber;
    //Y creo el construct con el que se llama a la función pasándole los valores mínimo y máximo, haciendo que pueda
    //ser cualquier tipo de dado al llamarla
    public function __construct($minNumber, $maxNumber){
        $this->minNumber = $minNumber;
        $this->maxNumber = $maxNumber;
    }
    //por ultimo, con rand se muestra por pantalla el resultado de tirar el dado
    public function tirarDado(){
        echo "<p>" . rand($this->minNumber, $this->maxNumber) . "</p>";
    }
}
?>


