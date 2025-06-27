<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $passHash = md5( $password);

    // Conexión con la Base de Datos
    $conexion = mysqli_connect('localhost', 'root', '', 'peliculas');
    $sql = "SELECT id_usuario, nombre, email
            FROM usuarios
            WHERE email = '$email' AND password = '$passHash'";

    //echo $sql;
    $resultado = mysqli_fetch_assoc( mysqli_query($conexion, $sql));
    
    if( $resultado) {
        echo "<h2>Bienvenido</h2>";
        session_start();
        $_SESSION['id_usuario'] = $resultado['id_usuario'];
        $_SESSION['nombre'] = $resultado['nombre'];
        header('Location: ../index.php');
    } else {

        echo "<h2>Credenciales invalidas</h2>";
    }
    print_r($resultado);
    
    
    //echo "<h2>Bienvenido $email</h2>";
    // Cambiamos al archivo login.php
    //header('Location: ../login.php');
?>