<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/formulario.css">

</head>
<body>
<?php
    echo "<p>Ruta del sitio web en el ordenador local:". $ruta_local. "</p>";
    echo "<p>Ruta imagen: ". $ruta_imagen. "</p>";
    echo '<img src="uploads/'.$nombre_img.'"</p>';
    echo '<p>Nombre = '. $nombre_img. "</p>";
    echo '<p>Tamaño = '. $tamaño_imagen. "</p>";

    for($i=2; $i<count($files); $i++) {	
            echo $files[$i];
            echo '<img src="uploads/'.$files[$i].'">';
    }        
    header("Refresh:5; url=subidaImagen.html");
    echo '<p>En 5 segundos volveremos página principal.</p>';
    exit();
?>
</body>
</html>
