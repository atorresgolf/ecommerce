<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/stylelogin.css">
	<title>The Golf Shop</title>
</head>

<body>
	<header>
		<div class="container">
			<div class="golfshop">
				<a href="index.php" class="volver"><img src="img/shopgolf.png" alt=""></a>
			</div>
	</header>

	<div class="row">
		<div class="col-md-4">
			<!-- LIBRE -->
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="panel_login">
							<div class="panel-heading">
							<p class="hola">¡Hola! Ingresa tu mail y Contraseña</p>
								<!--<h3 class="panel-title">Formulario de ingreso</h3>-->
							</div>
								<div class="panel-body">
									<form action=""#"" method="POST">
										<div class="form-group">
											<!--<label for="mail">E-mail</label>-->
											<div class="input-group">
												<span class="input-group-addon"> <span class="fas fa-eye"><i class="fas fa-eye"></i> </span>
											</span>
											<input type="email" name = "email" class="form-control" id="mail" placeholder="E-mail">
										</div>
									</div>
									<div class="form-group">
										<!--<label for="pass">Contraseña</label>-->
										<div class="input-group">

											<span class="input-group-addon">
												<span class="glyphicon glyphicon-asterisk"> </span>
											</span>
											<input type="password" name = "clave" class="form-control" id="pass" value = "" placeholder="Contraseña">
										</div>
									</div>
									<hr/>
									<button type="submit" class="btn btn-success">
										<span class="glyphicon glyphicon-ok"></span> Entrar</button><p><br/></p>
										<p class= "form-link">¿No estas registrado? <a href="formulario.php">Ingresa aquí</a></p>

									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					</div>
			</div>
			<div class="col-md-4">
				<!-- LIBRE -->
			</div>


			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

			<?php include_once "footer.php"; ?>

</body>


</html>