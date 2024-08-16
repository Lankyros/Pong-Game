<?php 

    session_start();

    include 'conexion.php';

    $nick = $_POST['nick'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE nick='$nick' 
    and password='$password' ");

    if(mysqli_num_rows($validar_login) > 0) {
        $_SESSION['nick'] = $nick;
        header("location: ../game.php");
        exit();
    }else {
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

//$result = mysqli_query($conexion,"SELECT score FROM usuario WHERE nick='$nick'");


?>