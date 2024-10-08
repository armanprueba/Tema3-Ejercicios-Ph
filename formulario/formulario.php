<?php
     if(isset($_POST["nombre"]) || isset($_POST["apellidos"])  || isset($_POST["correo"]) 
        || isset($_POST["url"]) || isset($_POST["sexo"]) || isset($_POST["n_convivie"]) 
        || isset($_POST["aficiones"]) || isset($_POST["menu"])){
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $correo = $_POST["correo"];
        $url = $_POST["url"];
        $sexo = $_POST["sexo"];
        $n_convivie = $_POST["n_convivie"];
        $aficiones = $_POST["aficiones"];
        $menu = $_POST["menu"];
    }

    include("formulario.view.php");

?>