<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Ruta del sitio web en el ordenador local: $ruta_local <br>";
    /*foreach ($files2 as $imagen){
        echo '<img src="'.$imagen.'">';
    }*/
    print_r($files2);
    for($i=2; $i<count($files2); $i++) {	
            echo $files2[$i];
    }        
    //header("Refresh:5; url=subidaImagen.html");
    echo '<p>En 5 segundos volveremos página principal.</p>';
    //exit();
?>
</body>
</html>
