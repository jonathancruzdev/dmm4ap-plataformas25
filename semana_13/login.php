<?php
    $usuario = [
        'nombre' => 'Julieta',
        'email' => 'julieta@davinci.edu.ar'
    ];
    require_once('secciones/header.php');
    //require_once('secciones/nav.php');
?>


<main class="container pt-3">
    <h1 class="text-center">Login</h1>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="acciones/usuarioLogin.php" method="post" class="card p-3">

                <label for="email">Email</label>
                <input name="email" class="form-control mb-2" type="email">

                <label for="password">Contraseña</label>
                <input name="password" type="password" class="form-control mb-2">

                <button type="submit" class="btn btn-success">Login</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</main>

<?php
    require_once('secciones/footer.php');
?>