<?php
     if(isset($_POST["imagen"])){
        $imagen = $_FILES["imagen"];
        $files2 = scandir("uploads");
    }
    $ruta_local = $_SERVER['SCRIPT_NAME'];  //Ruta del sitio web en el ordenador local
    include("subidaImagen.view.php");

?>