<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        .resaltar{
            color:red;
            font-weight: bold;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function primeraPagina(){
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

            
        };

        function flujoEjecucion($nombre) {
            echo "Este es el primer mensaje <br>";
            //curioso que puedo hacer una funcion dentro de otra, y llamarla
            //desde fuera de la funcion
            function mensaje_interno(){
                echo "Mensaje interno de la función<br>";
            }

            echo "Este es el segundo mensaje <br>";

            echo "Procedo a llamar a la función a pesar de que la funcion
            se encuentra anterior al segundo mensaje<br>";
            mensaje_interno();

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

            //los nombres de las variables y las funciones van en lowecase
            //separadas por underscores: function_name(){};
        };




        
        function ambitosVariables(){
            //Tres ámbitos fundamentales:
            //Local: Declarada dentro de una función, funciona solo dentro
            //de la funcion

            $variable_local = "LOCALISIMA";

            //Global: Declarada en cualquier lugar del código, funciona
            //en cualquier lugar del código

            global $variable_global;


            //Super Global: Visible y accesible incluso desde fuera del
            // script PHP. Se declara como Array
            //la variable fue declarada FUERA de las funciones, pero para 
            //llamarla desde dentro se pone global $nombre_variable,
            //y al hacer el echo se mostrara el valor de lo declarado fuera
            // de la funcion. Esto me ha costado entenderlo ngl


            echo "Esto es una variable local: " . $variable_local . "<br>" . 
            "Y esto es una global: " . $variable_global;


                    
        };

        //Declaro la variable global
        $variable_global = "GLOBALISIMA";

        //el echo de abajo resulta en el siguiente error:
        //Notice: Undefined variable: variable_local
        //echo $variable_local;
        //Pero esto si funciona, logicamente, al ser declarada fuera:
        //(Nota, si se quita el comentario del echo de abajo, se 
        //ejecutara primero por estar por encima de la llamada a la 
        //función)
        //echo $variable_global;

        function variablesEstaticas() {

            /*En el ejemplo explica que, de no ser static el $contador de
            la funcion incrementaVariable(), al llamarla varias veces
            se resetearía el valor de la misma vada vez que se llama,
            indicando:
            1
            1
            1
            1
            pero, al declararla como static, se mantiene el valor, entonces,
            al llamarla 4 veces, se muestra:
            1
            2
            3
            4
            Al declararlo en static, la línea de declaración de la
            variable estática solo se ejecuta la primera vez que el
            programa la reconoce
            En esencia: Cuando quieres que una variable conserve
            su valor al salir de su ámbito (de su función en este
            caso), la declaras como estática*/
            function incrementaVariable(){

                static $contador = 0;
                $contador++;
                echo $contador . "<br>";

            }

            incrementaVariable();
            incrementaVariable();
            incrementaVariable();
            incrementaVariable();
        }



        function strings(){

            //en caso de quere hacer uso de la clase con las comillas
            //habria que hacerlo o escapando las comillas dobles o 
            // con comillas simples
            echo "<p class='resaltar' >Esto es un ejemplo de frase</p>";
            echo "<p class=\"resaltar\">Esto es un ejemplo de frase con
                    las comillas 'escapadas'</p>";
            
            //es posible llamar a una variable desde dentro de un echo
            //siempre que se usen las comillas dobles, las comillas simples
            //toman lo que tengan entre ellas como su valor literal
            $nombre = "Pedro";
            $nombre1 = "Pedro";
            echo "Mi nombre es $nombre (comillas dobles)<br>";
            echo 'Mi nombre es $nombre (comillas simples)<br><br>';


            //con strcmp(); compara dos strings contando con mayus
            $result1 =  strcmp($nombre,$nombre1);
        
            //strcasecmp(); compara dos strings sin tener en cuenta mayus
            $result2 = strcasecmp($nombre,$nombre1);

            //devolveran 1 o -1 si son diferentes, y 0 si son iguales
            //O lo que es lo mismo, devolverán true si son diferentes y 
            //false si son iguales


            //echo "Resultado strcmp: " . $result1 . "<br>" . 
            //    "Resultado  strcasecmp: " . $result2 . 
            //    '$nombre es Pedro, $nombre1 es pedro <br>';\

            //hacemos un if que dice lo siguiente:
            //si el resultado de $result2 es falso, entonces pasa por aqui
            //en cualquier otro caso, entra por el else
            //Esto lo hacemos porque el strcasecmp() devuelve false
            //cuando son iguales lo cual es un poco anti-intuitivo,
            //por lo que le damos la vuelta para que sea mas intuitivo
            if (!$result2) {
                echo '$nombre1 y $nombre2 son iguales, sin tener en cuenta 
                        mayus <br>';
            } 
            else {
                echo '$nombre1 y $nombre2 son diferentes, sin tener en
                        cuenta mayus <br>';
            }

        }



        function operadoresComparacion(){

            /*

            == iguales
            === iguales y del mismo tipo
            != diferente que
            <> diferente que y de diferente tipo
            <  menor que
            >  mayor que
            <= menor o igual que
            >= mayor o igual que

            */ 

            //if(isset($_POST[nombre_boton])){
            //  #Lo que sea que haga tu if si pulsan el boton de enviado    
            //}

            //Hacer referencia a trabajo_operadores.php del video 9 
            //del curso de Pildoras Informaticas
        }



        function constantes(){

            //Para definir una constante:
            //define("NOMBRE_CONSTANTE", Valor);
            //El nombre de las constantes va en mayusculas.
            //No llevan $.
            //Es obligatorio el uso de define.
            //El ámbito de la constante es global por defecto.
            //Las constantes no se pueden redefinir.
            //Las constantes solo pueden almacenar valores escalares.
            //int, bool, double, string etc.. pero no arrays
            //(solo valores que no se puedan dividir en valores mas pequeños)

            define("CONSTANTE_1", 1);

            echo CONSTANTE_1 . " es mi primera constante <br>";

            //Existen las "magic constants" que son constantes 
            //predefinidas de PHP que no hace falta predefinir.
            //Por ejemplo:
            echo "La linea actual es: " . __LINE__ . " y esto fue la 
                    constante predefinida __LINE__";


        }





        //primeraPagina();
        //variables();
        //flujoEjecucion("\$nombre");
        //puedo llamar a mensaje_interno(); desde aquí, curioso
        //ambitosVariables();
        //variablesEstaticas();
        //strings();
        //operadoresComparacion();
        constantes();

    ?>
</body>
</html>