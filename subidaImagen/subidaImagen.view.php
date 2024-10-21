<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Ruta del sitio web en el ordenador local:". $ruta_local. "<br>";
    echo "Ruta imagen: ". $ruta_imagen;
    echo '<img src="uploads/'.$nombre_img.'">';
    echo 'Nombre = '. $$nombre_img;;
    echo 'Tamaño = '. $tamaño;

    for($i=2; $i<count($files); $i++) {	
            echo $files[$i];
            echo '<img src="uploads/'.$files[$i].'">';
    }        
    //header("Refresh:5; url=subidaImagen.html");
    echo '<p>En 5 segundos volveremos página principal.</p>';
    //exit();
?>
</body>
</html>
