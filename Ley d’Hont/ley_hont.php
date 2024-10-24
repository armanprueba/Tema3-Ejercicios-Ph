<?php
if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == "Subir"){
    if(isset($_POST["votos"]) || isset($_POST["escanios"])) {
        $votos = $_POST["votos"];
        $escanios = $_POST["escanios"];
        include("ley_hont.view.php");
        function ordenarAtleti($jug_atleti){
            return $jug_atleti;
        }
        function ordenarVotos($a, $b){   /* usa el operador nave espacial para ordenar el array de menor a mayor 
            según el número de dorsal*/
        return $a <=> $b;
        }

    }
}