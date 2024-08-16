<?php 

    session_start();

    if(!isset($_SESSION['nick'])){
        echo '
            <script>
                alert("Debes iniciar sesion antes de entrar a esta pagina");
                window.location = "index.php"; 
            </script>
        ';
        session_destroy();
        die();
    }

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/stylelogin.css">
    

    <title>JUEGO</title>
</head>
<body>
    <form action="php/guardar_score.php" id="myForm" method="POST">
    <input type="hidden" name="numero" id="numero">
    <button type="submit" class="btn" >Guardar score y Cerrar Sesion</button>
    </form>  
    <div class="nick"> <?php echo $_SESSION['nick']; ?> </div>
    <div id="canvas-container">
        
    </div>
    <script src="js/p5.js"></script>
    <script src="sketch.js"></script>
    
</body>
</html>