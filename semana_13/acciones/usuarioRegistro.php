<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $passHash = md5( $password);

    // Conexión con la Base de Datos
    $conexion = mysqli_connect('localhost', 'root', '', 'peliculas');
    $sql = "INSERT INTO usuarios(nombre, email, password)
            VALUES('$nombre', '$email', '$passHash')";

    echo $sql;
    $resultado = mysqli_query($conexion, $sql);

    echo "<h2>Bienvenido $email</h2>";
    // Cambiamos al archivo login.php
    header('Location: ../login.php');
?>