<?php
if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == "Subir"){
   $tipo_img = $_FILES["imagen"]["type"];

     if($tipo_img == "image/png" || $tipo_img == "image/jpeg" || $tipo_img == "image/gif"){
        $nombre_img = $_FILES["imagen"]["name"];
        $ruta_imagen = $_FILES["imagen"]["tmp_name"];
        $tamaño_imagen = $_FILES["imagen"]["size"];
        move_uploaded_file($ruta_imagen, "uploads/{$nombre_img}");
        $files = scandir("uploads");
        $ruta_local = $_SERVER['SCRIPT_NAME'];  //Ruta del sitio web en el ordenador local
        include("subidaImagen.view.php");
     }
     else{
     header("Location:imagenerror.php");
         exit();      
     }
    }

