<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function primera_pagina(){
            //Diferencias entre echo y print:
            echo "Primera página Pildoras Informaticas <br>";
            print "Esto es un Print en vez de un echo<br><br>";
            echo "La diferencia es que echo no devuelve valor,<br>
                    mientras que print devuelve 1, por lo que <br>
                    se puede usar en las expresiones. Echo puede<br>
                    recibir varias expresiones, print solo 1. <br>
                    echo var nombre, var edad; pero en print no <br>
                    Y por último, echo es marginalmente mas rápido.";
        };

        function variables(){

            //Además de variables, en esta función se tocan los comments.

            /* Lo anterior era un comentario simple de una línea,
            esto es un comentario de varias lineas*/

            //los comentarios también se usan para invalidar, o desactivar,
            //codigo. Lo que yo estoy haciendo con las llamadas a las funcs
            //Es conveniente dejar un espacio en blanco delante y detras
            //del punto a la hora de concatenar
            $primera_variable = "Esta es mi primera variable ";
            echo $primera_variable . "<br>";

            //Las variables se llaman asi pueden cambiar. Por ejemplo:
            $primera_variable .=" continuada";
            echo $primera_variable . "<br>";
            //como se puede ver, he usado .= para hacer +=

            //Comillas simples vs comillas dobles:
            //Con las comillas dobles interpreta la variable
            echo "Comillas dobles: $primera_variable" . "<br>";
            //Con las comillas simples no interpreta la variable
            echo 'Comillas simples: $primera_variable' . "<br>";

            
        }

        function flujo_ejecucion($nombre) {
            echo "Este es el primer mensaje <br>";
            //curioso que puedo hacer una funcion dentro de otra, y llamarla
            //desde fuera de la funcion
            function mensajeInterno(){
                echo "Mensaje interno de la función<br>";
            }

            echo "Este es el segundo mensaje <br>";

            echo "Procedo a llamar a la función a pesar de que la funcion
            se encuentra anterior al segundo mensaje<br>";
            mensajeInterno();

            echo "Y por eso las funciones rompen el flujo del programa <br>";

            echo $nombre . " = parametro que se le pasa a la funcion <br>";


            //include = instruccion para importar otros paquetes o archivos 
            //php para usar sus funciones
            include ("hola-mundo.php");

            //ejemplo de uso de la funcion de hola-mundo.php
            holaMundo();

            //require = instrucción para indicar que nuestro programa
            // NECESITA la importación indicada
            require("cosa.php");
            //al existir el archivo cosa.php, se puede ejecutar el archivo
            cosa();

        }

        //primera_pagina();
        //variables();
        //flujo_ejecucion("\$nombre");


    ?>
</body>
</html>