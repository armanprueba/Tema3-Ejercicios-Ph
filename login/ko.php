
<?php
    session_start();
    if(isset($_SESSION['tipo_error'])){
        if (!$_SESSION['tipo_error']) echo "El usuario y la contraseña son incorrectos";
        elseif ($_SESSION['tipo_error']) echo "La contraseña es incorrecta";
    }
    else{
        header("Location:login.php");
        exit;
    }

?>