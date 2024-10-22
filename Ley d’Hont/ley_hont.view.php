<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario.view</title>
</head>
<body>
<?php
    // Iniciamos la tabla
    $concat_tabla = '<table border="1">';

    // Creamos la fila de encabezados
    $concat_tabla .= '<tr>';
    $concat_tabla .= '<th></th>';
    $concat_tabla .= '<th> Partido1 </th>';
    $concat_tabla .= '<th> Partido2 </th>';
    $concat_tabla .= '<th> Partido3 </th>';
    $concat_tabla .= '<th> Partido4 </th>';
    $concat_tabla .= '</tr>';

    // Añadimos la fila con los datos
    $concat_tabla .= '<tr>';
    $concat_tabla .= '<td> Votos </td>';
    
    foreach ($votos as $voto) {
        $concat_tabla .= '<td>';
        $concat_tabla .= $voto;
        $concat_tabla .= '</td>';
    }

    $concat_tabla .= '</tr>';

    for ($i = 1; $i < $escanios; $i++){
        $concat_tabla .= '<tr>';
        $concat_tabla .= 'Escanio '. $i;
        foreach ($votos as $voto) {
            $concat_tabla .= '<td>';
            $concat_tabla .= $voto;
            $voto = $voto / 2;
            $concat_tabla .= '</td>';
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
