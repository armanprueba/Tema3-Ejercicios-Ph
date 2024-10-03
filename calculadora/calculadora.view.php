<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Suma de x y y: $suma <br>";
    echo "Resto de x y y: $resto <br>";
    echo "División de x y y: $divison <br>";
    echo "Multiplicación de x y y: $multi <br>";
    echo "Valores del array GET: ";
    echo print_r($_GET) ."<br>";
    echo "Dirección IP del ordenador que hace la petición: $ordenador <br>";
    echo "Variables en la que están los parametros de la petición: $param_peti <br>";
    echo "Ruta del sitio web en el ordenador local: $ruta_local <br>";
    echo "Valores de la variable SERVER: <br>";
    echo "<br><br>";
    foreach ($_SERVER as $valor) {
        echo"$valor <br>";
    }
?>
</body>
</html>