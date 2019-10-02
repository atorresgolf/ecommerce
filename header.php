<?php
session_start();

if (isset($_SESSION["nombre"])){
	$usuarioLogueado=$_SESSION["nombre"];
} else {
	$usuarioLogueado="";
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/0cb2d9cf91.js"></script>
		<link href="css\styleshierros.css" rel="stylesheet">

		<title>The Golf Shop-Hierros</title>
	</head>

	<body>
		<header class="golfshop">
			<img src="img/shopgolf.png" alt="logotipo" class="logo">
			
		<!-- cabecera -->
		<div class="redes">
			<i class="fab fa-2x fa-facebook" style="color:#18EB8E"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<i class="fab fa-2x fa-twitter" style="color:#18EB8E"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<i class="fab fa-2x fa-instagram" style="color:#18EB8E"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
		</div>

		<div class="container">
		<p> <?= isset($usuarioLogueado)? $usuarioLogueado : "" ?> </p>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="index.php">The Golf Shop</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<!--<li class="nav-item active">
							<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
						</li>-->
						<li class="nav-item">
							<a class="nav-link" href="academia.php">Nuestra Escuela</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Nuestros Articulos
							</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="index.php">Drivers</a>
										<a class="dropdown-item" href="hierros.php">Hierros</a>
										<a class="dropdown-item" href="putter.php">Putters</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="accesorios.php">Accesorios</a>
									</div>
										</li>
											<li class="nav-item">
												<!--<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
											</li>
					</ul>
												<form class="form-inline my-2 my-lg-0">
													<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
													<button class="btn btn-outline-success gr-22 gr-sm-22" type="submit">Buscar</button>
												</form>
											</div>
											<a href="login_nuevo.php" class="volver"><i class="fas fa-sign-in-alt" style="color:#18EB8E; size=7x";></i></a><p>Log In</p>
			
											<a href="carrito.php" class="volver"><i class="fas fa-2x fa-shopping-cart" style="color:#18EB8E ";></i></a>
											<a href="logout.php" class="volver"><i class="fas fa-sign-out-alt" style="color:#18EB8E; size=7x"></i></a><p>Log Out</p>

										</nav>


		</header>
</body>
</html>
