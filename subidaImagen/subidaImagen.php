<?php
if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == "Subir"){
     if(is_uploaded_file($_FILES["imagen"]['tmp_name'])){
        $nombre_img = $_FILES["imagen"]["name"];
        $tipo_img = $_FILES["imagen"]["type"];
        move_uploaded_file($_FILES['imagen']['tmp_name'], "uploads/{$nombre_img}");
        $files2 = scandir("uploads");
        $ruta_local = $_SERVER['SCRIPT_NAME'];  //Ruta del sitio web en el ordenador local
        echo "f";
        include("subidaImagen.view.php");
     }
    }

