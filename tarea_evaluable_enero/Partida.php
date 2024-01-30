<?php

namespace tarea_evaluable_enero;

//especifico que se van a usar las clases y enums
//requeridos
use tarea_evaluable_enero\Jugador;
use tarea_evaluable_enero\Carta;
use tarea_evaluable_enero\enEtapa;
use tarea_evaluable_enero\Cartel;

//establezco la clase Partida extendiendo a Jugador (asumo, de nuevo, no hay ninguna
//indicacion de en qué dirección están relacionadas las clases en el diagrama)
class Partida extends Jugador
{

    //establezco los atributos privados requeridos
    private int $Dia;
    private enEtapa $Etapa;


    //creo las funciones Void requeridas, Comprar, ArmarCartel y jugar()
    public function Comprar(){}
    public function ArmarCartel(){}

    //esta clase deberá ser implementada al heredar de una clase abstracta
    #[\Override] public function jugar()
    {
        // TODO: Implement jugar() method.
    }


    //y establezco los tres métodos que deberían devolver un array de
    //cartas que pertenezcan a los jugadores.
    //Imagino que esto se implementaría mas adelante.
    //al intentar añadir : Carta[] me sale el siguiente error:
    //Plural types are only allowed in doc types
    public function VerCartas(){}
    public function VerCartasRival(){}
    public function VerCartasTienda(){}

}

