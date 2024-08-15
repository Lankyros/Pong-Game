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
    
    <a href="php/cerrar_sesion.php" class="cerrarsesion">Cerrar sesion</a>
    <div class="nick"> <?php echo $_SESSION['nick']; ?> </div>
    <div id="canvas-container">
        
    </div>
    <script src="js/p5.js"></script>
    <script src="sketch.js"></script>
    
</body>
</html>