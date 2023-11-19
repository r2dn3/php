<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <table border="1" style="border-collapse:collapse">

        <tr>
            <th style="background-color:lightblue">Cardinal</th>
            <th style="background-color:lightblue">Ordinal</th>
        </tr>

        <?php
            $ordinal="";

            $contador=1;

            
            while ($contador < 11) {

                switch ($contador) {
                    case '1':
                        $ordinal="Primero";
                        break;
                    
                    case '2':
                        $ordinal="Segundo";
                        break;
                    
                    case '3':
                        $ordinal="Tercero";
                        break;
                    
                    case '4':
                        $ordinal="Cuarto";
                        break;
                    
                    case '5':
                        $ordinal="Quinto";
                        break;
                    
                    case '6':
                        $ordinal="Sexto";
                        break;
                    
                    case '7':
                        $ordinal="Septimo";
                        break;   
    
                    case '8':
                        $ordinal="Octavo";
                        break;
                    
                    case '9':
                        $ordinal="Noveno";
                        break;
                    
                    case '10':
                        $ordinal="Decimo";
                        break;

                }

                echo "<tr>";
                echo "<td>".$contador."</td>";
                echo "<td>".$ordinal."</td>";
                echo "</tr>";
                
                $contador++;
            }
            
        ?>
    </table>
    </body>
</html>