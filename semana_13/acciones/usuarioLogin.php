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
    $resultado = mysqli_query($conexion, $sql);
    print_r($resultado);
    echo "<h2>Bienvenido $email</h2>";
    // Cambiamos al archivo login.php
    //header('Location: ../login.php');
?>