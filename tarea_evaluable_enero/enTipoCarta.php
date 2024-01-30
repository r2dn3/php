<?php


namespace tarea_evaluable_enero;

//por lo que he leido por internet, un enum se utiliza para crear
//un set de valores a los que llamar.
//dado que en el diagrama de clases se especifica que todos los casos
//de este enum son int, les he asignado a cada uno un valor.

//creamos el enum enTipoCarta
enum enTipoCarta : int
{

    //y creamos los casos que se nos piden.
    case Borde = 0;
    case Color = 1;
    case Efecto = 2;
    case Mensaje = 3;
    case Marco = 4;

}
