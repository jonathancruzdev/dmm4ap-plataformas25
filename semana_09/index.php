<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataformas de Desarrollo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Cursos | Listado</h1>

    </header>
    <main>
        <?php
            // Esto es un comentario
            $cursoNombre = "Modelado 3D";
            $edad = 27;
            $logueado = true;

            $cursos = ['Maquetado', 'Modeloado 3D'];

            if( $logueado == true){
                echo("<h2> Este es un curso de $cursoNombre </h2>");
            } else {
                echo('<div class="alert alert-danger" role="alert">No estás logueado</div>');
            }
        ?>
        <hr>
        <script>
            // Esto es un comentario
            let nombre = 'Carlos';
            let edad = 27;
            let logueado = false;
            let cursos = ['Maquetado', 'Modeloado 3D'];
            if( logueado == true){
                document.write('<h4> Hola ' + nombre + '</h4>');

            } else {
                document.write('<div class="alert alert-danger" role="alert">No estás logueado</div>');

            }
        </script>

    </main>
    <footer>
        <p> DV | Plataforams de Desarrollo | 2025 </p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>