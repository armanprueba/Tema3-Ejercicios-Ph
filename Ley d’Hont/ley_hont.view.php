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
    $array_nuevo = [];

    for ($i = 1; $i < $escanios+1; $i++){
        $votos_divido;
        for ($j = 0; $j < count($votos); $j++) {
            $votos_divido = $votos[$j];
            $votos_divido /= $i;
            $array_nuevo[] = $votos_divido;
        }
    }

    rsort($array_nuevo);   // Para ordenar el vector de mayor a menor
    
    $array_ordenado = []; // Sera el array que contenga los valores de la tabla que deben ser amarillas 

    for ($i = 0; $i < $escanios; $i++){
       $array_ordenado[] = $array_nuevo[$i];
    }

    // Iniciamos la tabla
    $concat_tabla = '<table border="1">';

    // Creamos la fila de encabezados
    $concat_tabla .= '<tr>';
    $concat_tabla .= '<th></th>';
    $concat_tabla .= '<th class="bold-column"> Partido1 </th>';
    $concat_tabla .= '<th class="bold-column"> Partido2 </th>';
    $concat_tabla .= '<th class="bold-column"> Partido3 </th>';
    $concat_tabla .= '<th class="bold-column"> Partido4 </th>';
    $concat_tabla .= '</tr>';

    // Añadimos la fila con los datos
    $concat_tabla .= '<tr>';
    $concat_tabla .= '<td class="bold-column tabla-votos"> Votos </td>';
    
    foreach ($votos as $voto) {
        $concat_tabla .= '<td class="tabla-votos">'. $voto. '</td>';
    }

    $concat_tabla .= '</tr>';
    
    for ($i = 1; $i < $escanios+1; $i++){
        $concat_tabla .= '<tr>';
        $concat_tabla .= '<td class="bold-column">Escanio '. $i. '</td>';
        $votos_divido;
        for ($j = 0; $j < count($votos); $j++) {
            if (in_array($votos[$j]/$i, $array_ordenado))
            {
                $votos_divido = $votos[$j];
                $votos_divido /= $i;
                $concat_tabla .= '<td class="tabla-mayores">'.$votos_divido;'</td>';
            }
            else {
                $votos_divido = $votos[$j];
                $votos_divido /= $i;
                $concat_tabla .= '<td>'.$votos_divido;'</td>';
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
