<?php

namespace tarea_evaluable_enero;

//de nuevo, dada la naturaleza de los enum por lo que he podido aprender de ellos
//(dado que no salen mencionados en el temario en ningún lado), son un conjunto
//de casos que  ( en este caso) cada uno tiene un valor asignado.
//al estar todos los casos definidos como números, les he asignado un valor
//para poder declararlos.

//creo el enum enEtapa
enum enEtapa : int
{
    case Compra = 0;
    case Armado = 1;
    case Resultado = 2;
    case Fin = 3;
}


