<?php 

    include 'conexion.php';

    $nick = $_POST['nick'];
    $password = $_POST['password'];

    $query = "INSERT INTO usuario(nick, password) 
    VALUES('$nick', '$password')";

    //verificar que el nick no se repita en la base de datos
    $verificar_nick = mysqli_query($conexion, "SELECT * FROM usuario WHERE nick='$nick' ");

    if(mysqli_num_rows($verificar_nick) > 0 ){
        echo '
            <script>
                alert("Este nick no esta disponible, prueba con otro");
                window.location = "../register.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
            <script>
                alert("Usuario registrado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }else {
        echo'
            <script>
                alert("Ocurrio un error intentalo de nuevo");
                window.location = "../register.php";
            </script>
        ';
    }


    mysqli_close(conexion);
?>