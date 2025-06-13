
<?php
    if( isset( $_GET['id_categoria'] ) ){

        $id_categoria = $_GET['id_categoria'];
        $sql = "SELECT id_pelicula, titulo, portada, C.descripcion AS categoria
        FROM peliculas P
        INNER JOIN categorias C ON C.id_categoria = P.id_categoria
        WHERE P.id_categoria = $id_categoria
        ";

    } else {
        $sql = "SELECT id_pelicula, titulo, portada, C.descripcion AS categoria
        FROM peliculas P
        INNER JOIN categorias C ON C.id_categoria = P.id_categoria";
    }
    


    // Conexión con la Base de Datos
    $conexion = mysqli_connect('localhost', 'root', '', 'peliculas');

    $resultado = mysqli_query($conexion, $sql);


    $sql2 = "SELECT id_categoria, descripcion
            FROM categorias";
    $resultadoCategorias = mysqli_query($conexion, $sql2);

    
    $usuario = [
        'nombre' => 'Julieta',
        'email' => 'julieta@davinci.edu.ar'
    ];

    require_once('secciones/header.php');
    require_once('secciones/nav.php');
?>


    <main class="container pt-3">
    <hr>
        <div class="row">
            <?php
                while( $pelicula = mysqli_fetch_assoc( $resultado)   ){
                    // Accedemos al elemento y luego al valor
                    $id_pelicula = $pelicula['id_pelicula'];
                    $titulo = $pelicula['titulo'];
                    $portada = $pelicula['portada'];
                    $categoria = $pelicula['categoria'];
                    echo("<div class='col-md-4 card p-4'>
                            <img class='img-fluid' src='$portada' alt='$titulo'>
                            <h4> $titulo </h4>

                            <h6 class='badge text-bg-secondary'> $categoria </h6>
                            <a class='btn btn-success' href='detalle.php?id_pelicula=$id_pelicula'> Detalle </a>
                        </div>");
                }
            ?>
        </div>
    </main>

<?php
    require_once('secciones/footer.php');
?>