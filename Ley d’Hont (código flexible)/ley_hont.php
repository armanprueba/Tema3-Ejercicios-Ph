<?php
    session_start();
        if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == "Subir"){
            if((isset($_POST['escanios'])) && (isset($_SESSION['votos'])) && (isset($_SESSION['partidos']))) {
                $_SESSION['escanios'] = $_POST['escanios'];
                include("ley_hont.view.php");
            }
            
}