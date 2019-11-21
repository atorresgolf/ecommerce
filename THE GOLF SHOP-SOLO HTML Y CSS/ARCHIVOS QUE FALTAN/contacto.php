<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">

		<title>The Golf Shop</title>
		<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
	</head>

	<body>
		<header class="golfshop">
			<a href="index.php" class="volver"><img src="img/shopgolf.png" alt=""></a>

			<h1 id="Titulo">
			  Contactenos
			</h1>
		</header>

			<div class="row">
				<div class="col-md-4">
					<!-- LIBRE -->
				</div>

		<div class="container">
				<div class="contacto">
				<!--<div class="col-md-4"></div>-->
				<div class="col-md-4">
				<h3>Horarios de atencion: </h3>
				<br>
				<h3>de lunes a viernes de 10 a 18 hs</h3>
				<h3>Sabados de 10 a 13 hs</h3>
				<h3>Telefono: (0381) 422-3636</h3>
				<br>
				</div>
					<form>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Direccion de Email</label>
				    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@servidor.com">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">Seleccione un motivo</label>
				    <select class="form-control" id="exampleFormControlSelect1">
				      <option>Stock</option>
				      <option>Problema de login</option>
				      <option>Cambios</option>
				      <option>Estado de su envio</option>
				      <option>Otros</option>
				    </select>
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Dejenos su comentario</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>
					<br>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
				<!--<div class="col-md-4">
				</div>-->
			</div>
		</div>
		<div class="col-md-4">
			<!-- LIBRE -->
		</div>

				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
<?php include_once "footer.php"; ?>


</html>
