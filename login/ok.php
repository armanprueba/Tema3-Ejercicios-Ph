<?php
    session_start();
    if(isset($_SESSION['usuario']))
    echo "La contraseña es correcta,  ".$_SESSION['usuario'];
    else  {
        header("Location:login.php");
        exit;
    }
?>

