<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ESTILOS.css">
    <title>.</title>
</head>

<header>
    <?php include "barra-buscar.html"; ?>
        <div class="barra-nav">
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <a class="navbar-brand" href="#">
                    <img src="img/shopgolf.png" width="80" height="50" class="d-inline-block align-center" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav mx-auto">
                        <li class="nav-item active"></li>
                        <a class="nav-item nav-link mx-auto inicio" href="INDEX.PHP">INICIO</a>
                        <a class="nav-item nav-link mx-auto drivers" href="drivers.php">DRIVERS</a>
                        <a class="nav-item nav-link mx-auto hierros" href="HIERROS.PHP">HIERROS</a>
                        <a class="nav-item nav-link mx-auto putters" href="PUTTERS.php">PUTTERS</a>
                        <a class="nav-item nav-link mx-auto accesorios" href="ACCESORIOS.PHP">ACCESORIOS</a>
                        <a class="nav-item nav-link mx-auto academia" href="ACADEMIA.PHP">ACADEMIA</a>
                        <li class="nav-item"></li>
                    </div>
                </div>

                <div class="navbar-nav d-flex flex-row justify-contents-center mx-auto">
                    <button type="button" class="btn btn-light btn-sm mr-3"><a>Creá tu cuenta</a>
                <button type="button" class="btn btn-light btn-sm mr-3"><a>Ingresá</a>
                    </button>
                    </button>
                </div>
            </nav>
        </div>
</header>

</html>