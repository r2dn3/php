<?php

namespace tarea_evaluable_enero;

//le indico que usaremos enTipoCarta
//No se como implementarlo mas allá de esto. Están unidos en el UML
//pero no queda claro como debería usarse, especialmente siendo $Tipo String
//y cada caso de enTipoCarta un número int.
use tarea_evaluable_enero\enTipoCarta;


class Carta
{
    //establezco los dos atributos privados de la clase Carta.
    private String $Tipo;
    private int $Puntos;
}


