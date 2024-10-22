<?php
if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == "Subir"){
    if(isset($_POST["votos"]) || isset($_POST["escanios"])) {
        $votos = $_POST["votos"];
        $escanios = $_POST["escanios"];
        include("ley_hont.view.php");
    }
}