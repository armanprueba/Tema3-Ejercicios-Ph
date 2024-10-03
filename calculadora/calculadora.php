<?php
     if(isset($_GET["x"]) || isset($_GET["y"])){
        $x = $_GET["x"];
        $y = $_GET["y"];
    }

    $suma = $x + $y;
    $resto = $x % $y;
    $divison = $x / $y;
    $multi = $x * $y;
    $ordenador = $_SERVER['REMOTE_ADDR']; //Ordenador que hace la petición
    $param_peti = $_SERVER['QUERY_STRING'];   //Variables en la que están los parametros de la petición
    $ruta_local = $_SERVER['SCRIPT_NAME'];  //Ruta del sitio web en el ordenador local

    include("calculadora.view.php");
?>