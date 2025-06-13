<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Pelis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                            while( $categoria = mysqli_fetch_assoc( $resultadoCategorias)   ){
                                // Accedemos al elemento y luego al valor
                                $id_categoria = $categoria['id_categoria'];
                                $descripcion = $categoria['descripcion'];
                                echo("<li><a class='dropdown-item' href='index.php?id_categoria=$id_categoria'>$descripcion</a></li>");
                            }
                        ?>

                    
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>

                <button class="btn btn-outline-success" type="submit">Search</button>
                
                <a class="btn btn-outline-info" href="login.php">Login</a>

                <a class="btn btn-outline-success" href="registro.php">Registro</a>
            </form>
        </div>
    </div>
</nav>