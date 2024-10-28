<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario.view</title>
    <link rel="stylesheet" href="../css/tablas.css">
</head>
<body>
<?php
    $calculo_votos = []; //Creo una array para almacaner los valores divididos 

    for ($i = 1; $i < $_SESSION["escanios"]+1; $i++){
        $votos_divido;   // Creo está variable para almacenar todos los valores que me van a dar los datos divido entre los escaños
        for ($j = 0; $j < count($_SESSION["votos"]); $j++) {
            $votos_divido = $_SESSION["votos"][$j]; //Almaceno el voto seleccionado
            $votos_divido /= $i; // Lo divido por el número de escaño
            $calculo_votos[] = $votos_divido;  // Lo almaceno en un nuevo array donde tendré todos los valores de los votos divididos
        }
    }

    rsort($calculo_votos);   // Para ordenar el vector de mayor a menor
    
    $array_mayores = []; // Sera el array que contenga los valores de la tabla que deben ser rojas

    for ($i = 0; $i < $_SESSION["escanios"]; $i++){ //Cogemos los votos más grandes según el número de escaños
       $array_mayores[] = $calculo_votos[$i]; // Los almacenamos en el array para los votos más grandes
    }

    // Iniciamos la tabla
    $concat_tabla = '<table border="1">';

    // Creamos la fila de encabezados
    $concat_tabla .= '<tr>';
    $concat_tabla .= '<th></th>';
    for ($i = 1; $i <=  $_SESSION["partidos"];  $i++) {
        $concat_tabla .= '<th class="bold-column"> Partido'. $i. '</th>';
    }
    $concat_tabla .= '</tr>';

    // Añadimos la fila de los votos
    $concat_tabla .= '<tr>';
    $concat_tabla .= '<td class="bold-column tabla-votos"> Votos </td>';

    foreach ($_SESSION["votos"] as $voto) {
        $concat_tabla .= '<td class="tabla-votos">'. $voto. '</td>';
    }
    $concat_tabla .= '</tr>';
    
    // Añadimos la fila de los escaños
    for ($i = 1; $i < $_SESSION["escanios"]+1; $i++){
        $concat_tabla .= '<tr>';
        $concat_tabla .= '<td class="bold-column">Escanio '. $i. '</td>';
        $voto_dividido;
        for ($j = 0; $j < count($_SESSION["votos"]); $j++) {
            $voto_dividido = $_SESSION["votos"][$j] / $i;
            if (in_array($_SESSION["votos"][$j]/$i, $array_mayores)) //Preguntamos si alguno de los votos que tenemos está en el array de mayores valores de votos
            {// Si es así ponemos la clase de la tabla para los votos mayores
                $concat_tabla .= '<td class="tabla-mayores">'.$voto_dividido;'</td>';
            }
            else {// Si no es así lo añade sin más en la tabla
                $concat_tabla .= '<td>'.$voto_dividido;'</td>';
            }
        }
        $concat_tabla .= '</tr>';
    }

    // Cerramos la tabla
    $concat_tabla .= '</table>';

    // Mostramos la tabla
    echo $concat_tabla;
?>
</body>
</html>
