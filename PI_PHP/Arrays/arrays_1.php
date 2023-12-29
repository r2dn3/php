<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        //simple ejemplo de array indexado
        $semana = ["Lunes","Martes","Miercoles","Jueves", "Viernes", "Sabado", "Domingo"];
        //$semana = array("Lunes","Martes","Miercoles","Jueves", "Viernes", "Sabado", "Domingo")
        //forma alternativa de declararlo (no me gusta tanto)
        
        
        //mostrando la posicion 3 (posicion-1) del array
        echo $semana[2] . "<br>";
        
        //mostrando todos los valores del array
        for ($i=0; $i<count($semana); $i++){
            echo $semana[$i] . " ";
        }
        
        
        //array asociativo de numeros aleatorios de clave=>valor, indicando el nombre de la clave
        $numeros=[
            "valor1"=>5,
            "valor2"=>7,
            "valor3"=>9,
            "valor4"=>4,
            "valor5"=>12,
            "valor6"=>2,
            "valor7"=>1,
            "valor8"=>23,
            "valor9"=>11,
            "valor10"=>15
        ];
        
        echo "<br>";
        
        //Mostrando las claves y los valores del array asociativo $numeros[]
        foreach($numeros as $clave=>$valor){
            echo "La clave es: $clave y el valor es $valor <br>";
            
            //un filtro rapido, imagina que fuera el nombre o la posicion en la empresa en vez de valor6
            if($clave=="valor6"){
                echo "El valor 6 es: $valor <br>";
            }
        }
    
        // la funcion is_array() devuelve true si el paramtero que le pasemos es un array
        if(is_array($numeros)){
            echo '$numeros es un array <br>';
        } else{
            echo '$numeros no es un array <br>';
        }
        
        //la funcion sort() nos permite ordenar los valores de un array
        sort($numeros);
        echo "Array de numeros ordenado: <br>";
        foreach($numeros as $valor){
            echo $valor . " ";
        }
        //como se puede ver el foreach se puede usar con $clave=>$valor o solo $valor
        
        
        echo"<br>";
        
        
        //estableciendo un array multidimensional asociativo, algo que podriamos recibir de una query
        $personas=[
            "Juan" =>["DNI"=>"32141234F", "Telefono"=>45323465, "Sexo"=>"M"],
            "Maria"=>["DNI"=>"35667678G", "Telefono"=>78934209, "Sexo"=>"F"],
            "Pedro"=>["DNI"=>"12343235K", "Telefono"=>89086465, "Sexo"=>"M"],
            "Carla"=>["DNI"=>"87953456M", "Telefono"=>89023498, "Sexo"=>"F"]
        ];
        
        echo"<br><br>";
        //ejemplo de como acceder al numero de telefono de Maria:
        
        echo "Numero de telefono de María: " . $personas["Maria"]["Telefono"] . "<br>";
        
        echo"<br><br>";
        
        
        //forma explicada por Pildoras Informaticas para listar un array de dos dimensiones:
        
        foreach ($personas as $nombre=>$datos){
            echo "Hola $nombre, sus datos son: <br><br>";
            //foreach dentro del foreach tratando $datos como un array
            foreach($datos as $clave=>$valor){
                echo"$clave = $valor<br>";
            }
            echo "<br><br>";
            
            //esto esta super deprecated lol, el IDE recomienda usar un foreach y ya
//            while(list($clave, $valor) = each(datos)){
//
//            }
        }
        
        echo"<br><br>";

        
        //Pongamos que alguien introduce su nombre y quiere recibir sus datos guardados:
        $nombre = "Juan";
        //$name seria "Juan" y $persona sería ["DNI"=>"32141234F", "Telefono"=>45323465,"Sexo"=>"M"], un array
        foreach ($personas as $name=>$datos){
            
            //pues aqui se muestran los datos de la persona que haya buscado
            if($name==$nombre){
                echo "Bienvenido, $name. Su DNI es: " . $datos["DNI"] . ", su numero de telefono: "
                    . $datos["Telefono"] . ", y su sexo: " . $datos["Sexo"] . "<br>";
            }
            
            //aqui simplemente se muestran todos los datos de todos los usuarios, porque me gusta mostrarlo to
            echo "Su DNI es: " . $datos["DNI"] . ", su numero de telefono: " . $datos["Telefono"] . ", y su sexo: "
                . $datos["Sexo"] . "<br>";
            

        }
        
        echo"<br><br>";
        
        //con var_dumo(nombre_array) se puede vomitar el contenido de un array, pero queda bastante feo. se usa para
        //depurar mayormente
        echo "var_dump: <br>";
        var_dump($personas);
        
        //desestructurar arrays:
        $datos=[1,2,3];
        
        //queremos almacenar cada uno de los datos de $datos en una array independiente
        //antes:
        /*
        $a=$datos[0];
        $b=$datos[1];
        $c=$datos[2];
        */
        //nueva forma de hacerlo
        [$a, $b, $c] = $datos;
        echo"<br>$a, $b, $c<br>";
        
        //funcion de prueba que devuelve un array de latitud y longitud
        function getCoordenadas(){
            
            return [12.34, 56.78];
            
        }
        
        //asignamos la latitud y la longitud a $lat y $long
        [$lat,$long]=getCoordenadas();
        
        echo"Latitud: $lat, Longitud: $long" . "<br>";
        
        //como desestructurar un array asociativo:
        $people=[
            "Nombre" => "Juan",
            "Edad" => 18,
            "Ciudad" => "Madrid"
        ];
        
        ["Nombre"=>$elNombre, "Edad"=>$laEdad, "Ciudad"=>$laCiudad]=$people;
        
        echo"Su nombre es: $elNombre, su edad: $laEdad y su ciudad: $laCiudad<br>";
        
        
        
    ?>
    
</body>
</html>