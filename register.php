<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/stylelogin.css">

    <title>Ping Pong</title>
</head>
<body>
    
    <div class = "login-container">
        <div class="login-info-container">
            <h1 class = "title">Registrarse</h1>
            <form action="php/registro_usuario.php" method="POST" class="inputs-container">
                <input class="input" type="text" placeholder="Nombre de Usuario" name="nick">
                <input class="input" type="password" placeholder="Contraseña" name="password">
                <br>
                <button class="btn">Registrate</button>
                <p>Ya tenes una cuenta? <a class="enlace" href="index.php">Iniciar Sesion</a></p>
            </form>
        </div>
        <img class="image-container" src="img/imagenportada.png" alt="login">
    </div>

</body>
</html>