<?php
    $id_pelicula = $_GET['id_pelicula'];
    $conexion = mysqli_connect('localhost', 'root', '', 'peliculas');

    $sql = "SELECT id_pelicula, titulo, portada, P.descripcion, C.descripcion AS categoria
            FROM peliculas P
            INNER JOIN categorias C ON C.id_categoria = P.id_categoria
            WHERE P.id_pelicula = $id_pelicula";
    $resultado = mysqli_query($conexion, $sql);
    
    
    $usuario = [
            'nombre' => 'Julieta',
            'email' => 'julieta@davinci.edu.ar'
        ];
    
    require_once('secciones/header.php');

    require_once('secciones/nav.php');
?>

<main class="container pt-3">

</main>

<?php
    require_once('secciones/footer.php');
?>