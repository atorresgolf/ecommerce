<?php
	$mensajeError="";
	if ($_POST) {
		//$password = password_hash ($_POST['password'], PASSWORD_DEFAULT);
		$datos = [];
		$archivo = "usuarios.json";
		$contenidoArchivo = file_get_contents ($archivo);
//una vez obtenido el archivo, convertirlo en array php.
	$datos = json_decode ($contenidoArchivo, true);
//var_dump($datos);
//exit;

	if (!$datos) {
		$mensajeError= "El ususario ya exite";
	}
//validacion
	$retorno= null;
	foreach ($datos as $user) {
		//por cada ususario pregunatr si el email
		if($user["correoElectronico"]==$_POST["correoElectronico"]){
			$retorno = $user;
			break;
		}
	}

if(!$retorno){
	//el usuario no existe
	$mensajeError= "El ususario no existe";
}else{
	$nombreCompleto = $user['nombre'];
	$apellidoCompleto = $user['apellido'];
	$domicilio = $user['domicilio'];
	$telefono = $user['telefono'];
	$numero = $user['numero'];
	$localidad = $user['localidad'];
	$provincia = $user['provincia'];
	$correoElectronico = $user['correoElectronico'];
}
}



 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
	<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style_login.css">
	<title>The Golf Shop</title>
</head>

<body>
	<header>
			<div class="golfshop">
				<a href="index.php" class="volver"><img src="img/shopgolf.png" alt=""></a>
			</div>
	</header>

	<div class="container">

					<div class="">

							<p class="hola">¡Hola! Ingresa tu mail y Contraseña</p>
								<!--<h3 class="panel-title">Formulario de ingreso</h3>-->
							</div>
								<div class="form">
									<form action="" method="POST">
											<input type="email" name = "correoElectronico" class="form-control" id="mail" placeholder="&#128272; E-mail">

											<input type="password" name = "password" class="form-control" id="pass" value = "" placeholder="&#128272; Contraseña">
											<input type="submit" class= "submit" name="submit" value="Ingresar">

										</div>
<!--<div>
											<button type="submit" class= "submit" name="">Ingresar</button>
</div>-->

									<div class="mensaje">
										  <p><?=$mensajeError?></p>
									</div>
										<p><br></p>
										<p class= "mensaje">¿No estas registrado? <a href="nuevo_formulario.php">Ingresa aquí</a></p>

									</form>
								</div>


			<?php include_once "footer.php"; ?>

</body>


</html>
