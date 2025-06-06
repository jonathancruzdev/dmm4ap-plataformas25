
<?php
    // Conexión con la Base de Datos
    $conexion = mysqli_connect('localhost', 'root', '', 'peliculas');

    $sql = "SELECT id_pelicula, titulo, portada FROM peliculas";

    $resultado = mysqli_query($conexion, $sql);

    print_r($resultado);

    $pelicula = [
        'titulo' => 'Superman',
        'portada' => 'images/superman.jpg'
    ];

    $lista = [
        [
            'titulo' => 'Superman',
            'portada' => 'images/superman.jpg'
        ],
        [
            'titulo' => 'Spiderman',
            'portada' => 'images/spiderman.jpg'
        ],
        [
            'titulo' => 'Iron Man',
            'portada' => 'images/ironman.jpg'
        ],
        [
            'titulo' => 'Batman',
            'portada' => 'images/batman.jpg'
        ]
    ];


    $usuario = [
        'nombre' => 'Julieta',
        'email' => 'julieta@davinci.edu.ar'
    ];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1> Peliculas</h1>
        <p>Bienvendo <?php echo($usuario['nombre']); ?></p>
    </header>
    <main class="container pt-3">

    <div class="row">
        <?php
            $titulo = $pelicula['titulo'];
            $portada = $pelicula['portada'];

            echo("<div class='col-md-4 card p-4'>
                <h4> $titulo </h4>
                <img class='img-fluid' src='$portada' alt='Superman'>
            </div>");
        ?>
    </div>
    <hr>

        <div class="row">
            <?php
                while( $pelicula = mysqli_fetch_assoc( $resultado)   ){
                    // Accedemos al elemento y luego al valor
                    $titulo = $pelicula['titulo'];
                    $portada = $pelicula['portada'];
                    echo("<div class='col-md-4 card p-4'>
                            <h4> $titulo </h4>
                            <img class='img-fluid' src='$portada' alt='$titulo'>
                        </div>");
                }
            ?>
        </div>
    </main>
    <footer>
        <p>DV | Plataformas de Desarrollo | 2025</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>