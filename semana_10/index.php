
<?php
    $usuario = 'Jonathan';
    $peliculas = ['Superman', 'Spideman', 'Iron Man', 'Batman'];
    $fotos = [
        'images/superman.jpg', 
        'images/spiderman.jpg', 
        'images/ironman.jpg', 
        'images/batman.jpg'
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
        <p>Bienvendo <?php echo($usuario); ?></p>
    </header>
    <main class="container pt-3">
        <div class="row">
            <?php
                for($i=0; $i<4; $i++){
                    $foto = $fotos[$i];
                    $nombre = $peliculas[$i];
                    echo("<div class='col-md-4 card p-4'>
                            <h4> $nombre </h4>
                            <img class='img-fluid' src='$foto' alt='Superman'>
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