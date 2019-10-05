<?php
	session_start();
	$mensajeError="";
	if ($_POST) {
		$datos = [];
		$archivo = "usuarios.json";
		$contenidoArchivo = file_get_contents ($archivo);
//una vez obtenido el archivo, convertirlo en array php.
	$datos = json_decode ($contenidoArchivo, true);
//var_dump($datos);
//exit;

	if (!$datos) {
		$mensajeError= "El ususario no exite";
	}
	$datos = [];
	$archivo = "usuarios.json";
	$contenidoArchivo = file_get_contents ($archivo);
	//una vez obtenido el archivo, convertirlo en array php.
	$datos = json_decode ($contenidoArchivo, true);
	//validacion
	$retorno= null;
	foreach ($datos as $user) {
		//por cada ususario pregunatr si el email
		if($user["email"]==$_POST["correoElectronico"]){
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
			$numero = $user['numeroDom'];
			$localidad = $user['localidad'];
			$provincia = $user['provincia'];
			$correoElectronico = $user['email'];
			$clave = $user["password"];
			$nombreUsuario = $user["email"];
			$nombreFoto = $user["nombreFoto"];
			
			//clave ingresada por el usuario que quiere loguearse
						
			$resultado= password_verify($_POST["password"], $clave);
			//var_dump($resultado);
		//validar contrasenia
		if($resultado){	
		
			
		//cuando viene de formulario genera una sesion a un usuario
			$_SESSION["email"] = $correoElectronico;
			$_SESSION["nombre"] = $nombreCompleto;
			$_SESSION["usuario"] = $nombreUsuario;
			$_SESSION["apellido"] = $apellidoCompleto;
			$_SESSION["domicilio"] = $domicilio;
			$_SESSION["numero"] = $numero;
			$_SESSION["nombreFoto"] = $nombreFoto;
			$_SESSION["telefono"] = $telefono;
			$_SESSION["localidad"] = $localidad;
			$_SESSION["provincia"] = $provincia;
			$_SESSION["nombreFoto"]=$nombreFoto;
			$mensajeError= "Bienvenido $nombreCompleto";

			//var_dump($_SESSION);
			//exit;
		}else{
			$mensajeError="Contraseña incorrecta";
		}
	
	
	//cierre else que email q es correcto
		}
		//cierre post
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
									<form action="login_nuevo.php" method="POST">
											<input type="email" name = "correoElectronico" class="form-control" id="mail" placeholder="&#128272; E-mail" value="<?=isset($correoElectronico)? $correoElectronico : ""?>" >

											<input type="password" name = "password" class="form-control" id="pass" value = "" placeholder="&#128272; Contraseña" >
											
											<label for="recordar">Recordar Usuario</label>
											<input type="checkbox" name = "recordar" >
											
											<input type="submit" class= "submit" name="submit" value="Ingresar">
										</div>
<!--<div>
											<button type="submit" class= "submit" name="">Ingresar</button>
</div>-->

									<div class="mensaje">
										  <p><?=$mensajeError?><a href="index.php">Home</a>
</p>
									</div>
									<p><br></p>
										<p class= "mensaje">¿Olvido su contraseña? <a href="nuevo_formulario.php">Ingresa aquí</a></p>

									</div>
										
										<p><br></p>
										<p class= "mensaje">¿No estas registrado? <a href="nuevo_formulario.php">Ingresa aquí</a></p>

									</form>
								</div>


			<?php include_once "footer.php"; ?>

</body>


</html>
