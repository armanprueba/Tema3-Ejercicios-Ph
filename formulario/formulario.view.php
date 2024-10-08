<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario.view</title>
</head>
<body>
<?php
                $concat = '<table border=1>';
                $concat_tabla = '<table border=1>';
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
                $concat_tabla .= '</table>';
                echo $concat_tabla;

                $concat .= '<tr>';
                $concat .= '<td>' . $nombre .'</td>';
                $concat .= '<td>' . $apellidos .'</td>';
                $concat .= '<td>' . $correo .'</td>';
                $concat .= '<td>' . $url .'</td>';
                $concat .= '<td>' . $sexo .'</td>';
                $concat .= '<td>' . $n_convivie .'</td>';
                $concat .= '<td>';

                foreach ($aficiones as $aficion) {
                    $concat .= $aficion . ' ';
                }
                $concat .= '</td>';
                $concat .= '<td>';
                foreach ($menu as $opcion) {
                    $concat .= $opcion . ' ';;
                }
                $concat .= '</td>';

                $concat .= '</tr>';

                $concat.="</table>";
                echo $concat;

                echo "<br><br>";

            ?>
</body>
</html>