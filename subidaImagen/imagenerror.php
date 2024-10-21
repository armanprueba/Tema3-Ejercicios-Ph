<?php
    echo "El archivo que has seleccionado no es una imagen<br>";
    echo "Volviendo a la página principal";

    header("Refresh:5; url=subidaImagen.html");
    exit();