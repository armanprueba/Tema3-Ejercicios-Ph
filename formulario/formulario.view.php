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
    $concat_tabla .= '<th> Nombre </th>';
    $concat_tabla .= '<th> Apellidos </th>';
    $concat_tabla .= '<th> Email </th>';
    $concat_tabla .= '<th> URL página personal </th>';
    $concat_tabla .= '<th> Sexo </th>';
    $concat_tabla .= '<th> Número de convivientes en el domicilio </th>';
    $concat_tabla .= '<th> Aficiones </th>';
    $concat_tabla .= '<th> Menú favorito </th>';
    $concat_tabla .= '</tr>';

    // Añadimos la fila con los datos
    $concat_tabla .= '<tr>';
    $concat_tabla .= '<td>' . $nombre . '</td>';
    $concat_tabla .= '<td>' . $apellidos . '</td>';
    $concat_tabla .= '<td>' . $correo . '</td>';
    $concat_tabla .= '<td>' . $url . '</td>';
    $concat_tabla .= '<td>' . $sexo . '</td>';
    $concat_tabla .= '<td>' . $n_convivie . '</td>';

    // Para las aficiones
    $concat_tabla .= '<td>';
    foreach ($aficiones as $aficion) {
        $concat_tabla .= $aficion . ' ';
    }
    $concat_tabla .= '</td>';

    // Para el menú favorito
    $concat_tabla .= '<td>';
    foreach ($menu as $opcion) {
        $concat_tabla .= $opcion . ' ';
    }
    $concat_tabla .= '</td>';

    $concat_tabla .= '</tr>';

    // Cerramos la tabla
    $concat_tabla .= '</table>';

    // Mostramos la tabla
    echo $concat_tabla;
?>
</body>
</html>
