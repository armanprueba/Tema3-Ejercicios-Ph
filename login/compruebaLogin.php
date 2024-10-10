<?php
     session_start();
     if(isset($_POST["usuario"]) || isset($_POST["contrasenia"])){
        
        /*$nombres = array("Arman", "Manolo", "Miguel");
        $contrasenias = array("caramelo10", "papeloxido", "jamonbajon");
        $contador = 0;
        foreach($nombres as $usuario){
            
            $usuarios[$usuario] = $contrasenias[$contador];
            $contador++;
        }*/

        $usuarios = [
            "Arman" => "caramelo10",
            "Manolo" => "papeloxido",
            "Miguel" => "jamonbajon",
        ];
      
        $contrasenia = $_POST["contrasenia"];
        if ($usuarios[$_POST["usuario"] ] === $_POST["contrasenia"]){ 
            /*Usamos las propiedas del array asociativo para probar si el usuario que 
            hemos introducido tiene el mismo valor en el array que en la contraseña.
            Visualización:
            $_POST["contrasenia"] = 'caramelo10'
            $_POST["usuario"] = 'Arman';
            $usuarios[$_POST["usuario"] = 'Arman';
            $usuarios['Arman'] = 'caramelo10';
            $usuarios['Arman'] === $_POST["contrasenia"];
            

            */
            $_SESSION['usuario'] = $_POST["usuario"];
            header("Location:ok.php");
            exit(); /*Ponemos esto por si acaso, para asegurarnos de que salga en caso negativo */
        }
        else{
            $_SESSION['tipo_error'];  //Creamos un valor para almacenar que tipo de error hay
            if ($usuarios[$_POST["usuario"]])
                $_SESSION['tipo_error'] = 1;    //Si el usuario existe tendra el valor de 1
            else
                $_SESSION['tipo_error'] = 0;   //Si el usuario no existe tendra el valor de 1
            header("Location:ko.php");
            exit();
        }
        
        /* 
        foreach($usuarios as $usuario => $password){
            if ($usuario_pasado === $usuario && $contrasenia === $password){
                header("Location:ok.php");
            }            
        }
        */
        

    }

       

?>
