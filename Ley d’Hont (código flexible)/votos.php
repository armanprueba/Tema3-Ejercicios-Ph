<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
<link rel="stylesheet" href="../css/formulario.css">
</head>
<body>
    <?php
    session_start();
    if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == "Subir"){
        if (isset($_POST['partidos'])){
            $_SESSION['partidos'] = $_POST['partidos'];
        }
        else{
            header('ley_hont.html');
            exit();
        }
    }
    ?>
    <form name="login" method="POST" action="escaños.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votos por partidos</label>
            <?php 
                for($i = 0; $i < $_SESSION['partidos']; $i++){?> 
                <input type="number" name="votos[]" class="form-control" id="exampleFormControlInput1" placeholder="Número de votos" required>
               <?php }                
                ?>
            <input type="submit" id="submit" name="btnSubir" value="Subir"> 
        </div>
    </form>
</body>
</html>