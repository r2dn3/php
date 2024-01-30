<?php

namespace tarea_evaluable_enero;

use tarea_evaluable_enero\Carta;


//establezco la clase cartel, asumiendo que extiende de carta dado
//que las lineas que unen las clases no deja claro en que dirección van las
//uniones
class Cartel extends Carta
{

    //establezco los cuatro atributos privados
    private Carta $Borde;
    private Carta $Color;
    private Carta $Efecto;
    private Carta $Mensaje;


    //establezco la funcion publica que se pide, pero no sé como hacer
    //return los puntos dado que tenemos cuatro cartas diferentes
    //declaradas
    public function ObtenerPuntos() : int{}
}

