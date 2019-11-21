<?php
include_once "validacion_registro.php";
include_once "funciones.php";
$nombreCompleto = null;
$apellidoCompleto = null;
$domicilio = null;
$telefono = null;
$numero = null;
$localidad = null;
$provincia = null;
$correoElectronico = null;
$clave = null;
//$nombreFoto=null;


if (count($_POST)) {
	// Variables para persistir la información del usuario
	$nombreCompleto = trim($_POST['nombre']);
	$apellidoCompleto = trim($_POST['apellido']);
	$domicilio = trim($_POST['domicilio']);
	$telefono = trim($_POST['telefono']);
	$numero = trim($_POST['numero']);
	$localidad = trim($_POST['localidad']);
	$provincia = trim($_POST['provincia']);
	$correoElectronico = trim($_POST['correoElectronico']);
	$clave = trim($_POST['password']);


	// Esta función guarda el array que retorna la función validarRegistro()
	$erroresEnRegistro = validarRegistro();

	// Si no tiene nada el array de errores
	//if ( !count($erroresEnRegistro) ) {
	// Hago una redirección
	//	header('location: registroExitoso.php');
	//	exit;
	//}

	//	if($_FILES["foto"]["error"] === UPLOAD_ERROR_OK){
	// subir archivo FOTO
	//			$nombreFoto=$_FILES["foto"]["name"];
	//			$archivo = $_FILES["foto"]["tmp_name"];
	//			move_uploaded_files($archivo, "../archivos/$nombreFoto");
	//	}




	if (!count($erroresEnRegistro)) {
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$datos = [];

		// code...
		//$datos = $_POST;
		//$json = json_encode($datos);
		//var_dump($datos);

		$archivo = "usuarios.json";
		$contenidoArchivo = file_get_contents($archivo);

		//una vez obtenido el archivo, convertirlo en array php.
		$datos = json_decode($contenidoArchivo, true);


		if (!$datos) {
			// code...
			$datos = [];
		}
		$ext = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
		$nombreFoto = $_POST['correoElectronico'];
		//agregarle los datos del nuevo usuario
		$datos[] = [
			'nombre' => $_POST['nombre'],
			"apellido" => $_POST["apellido"],
			"domicilio" => $_POST["domicilio"],
			"numeroDom" => $_POST["numero"],
			"telefono" => $_POST["telefono"],
			"localidad" => $_POST["localidad"],
			"provincia" => $_POST["provincia"],
			'email' => $_POST['correoElectronico'],
			'nombre_usuario' => $_POST['correoElectronico'],
			'password' => $password,
			"nombreFoto" => $nombreFoto . "." . $ext
			// 'foto' => $filename
		];


		//codifico de nuevo a jason
		$json = json_encode($datos);


		//sobreescribir el archivo con los datos nuevos
		file_put_contents("$archivo", $json);
		header('location: registroExitoso.php');
		exit;
	} else {
		echo "complete los datos";
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/0cb2d9cf91.js"></script>
	<link href="css\estiloformulario.css" rel="stylesheet">

	<!--<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">-->
	<title>The Golf Shop</title>
</head>

<body>


	<header class="golfshop">
		<a href="index.php" class="volver"><img src="img/shopgolf.png" alt=""></a>
	</header>

	<div class="container">
		<h1>FORMULARIO DE REGISTRO</h1>
		<form class="registro" action="nuevo_formulario.php" method="POST" enctype="multipart/form-data">
			<p>Nombre:</p>
			<input type="text" name="nombre" placeholder="Nombre" value="<?= (isset($nombreCompleto) ? $nombreCompleto : "") ?>">
			<?php if (isset($erroresEnRegistro["errorNombre"])) : ?>
				<div class="validacion">
					<p id="validacion"><i>Ingrese su nombre<i></p>
				</div>
				<? $erroresEnRegistro["errorNombre"]; ?>
			<?php endif; ?>

			<p>Apellido:</p>
			<input type="text" name="apellido" placeholder="Apellido" value="<?= (isset($apellidoCompleto) ? $apellidoCompleto : "")  ?>">
			<?php if (isset($erroresEnRegistro["errorApellido"])) : ?>
				<div class="validacion">
					<p id="validacion"><i>Ingrese su apellido<i></p>
				</div>
				<? $erroresEnRegistro["errorApellido"]; ?>
			<?php endif; ?>

			<p>Domicilio:</p>
			<input type="text" name="domicilio" placeholder="Domicilio" value="<?= (isset($domicilio) ? $domicilio : "") ?>">
			<?php if (isset($erroresEnRegistro["errorDomicilio"])) : ?>
				<div class="validacion">
					<p><i>Ingrese su domicilio<i></p>
				</div>
				<? $erroresEnRegistro["errorDomicilio"]; ?>
			<?php endif; ?>

			<p>Nº / Piso, Dpto:</p>
			<input type="text" name="numero" placeholder="Numero, Dpto" value="<?= (isset($numero) ? $numero : "") ?>">
			<?php if (isset($erroresEnRegistro["errorNumero"])) : ?>
				<div class="validacion">
					<p><i>Ingrese un numero<i></p>
				</div>
				<? $erroresEnRegistro["errorNumero"]; ?>
			<?php endif; ?>

			<p>Telefono:</p>
			<input type="text" name="telefono" placeholder="Numero, Dpto" value="<?= (isset($telefono) ? $telefono : "") ?>">
			<?php if (isset($erroresEnRegistro["errorTelefono"])) : ?>
				<div class="validacion">
					<p id="validacion"><i>Ingrese su numero de telefono<i></p>
				</div>
				<? $erroresEnRegistro["errorTelefono"]; ?>
			<?php endif; ?>

			<p>Localidad:</p>
			<input type="text" name="localidad" placeholder="Localidad" value="<?= (isset($localidad) ? $localidad : "") ?>">
			<?php if (isset($erroresEnRegistro["errorLocalidad"])) : ?>
				<div class="validacion">
					<p><i>Ingrese una localidad<i></p>
				</div>
				<? $erroresEnRegistro["errorLocalidad"]; ?>
			<?php endif; ?>

			<p>Provincia:</p>
			<input type="text" name="provincia" placeholder="Provincia" value="<?= (isset($provincia) ? $provincia : "") ?>">
			<?php if (isset($erroresEnRegistro["errorProvincia"])) : ?>
				<div class="validacion">
					<p><i>Ingrese un provincia<i></p>
				</div>
				<? $erroresEnRegistro["errorProvincia"]; ?>
			<?php endif; ?>

			<p>Correo Electronico (Nombre de Usuario):</p>
			<input type="email" name="correoElectronico" placeholder="E-mail" value="<?= (isset($correoElectronico) ? $correoElectronico : "") ?>">
			<?php if (isset($erroresEnRegistro["errorCorreoElectronico"])) : ?>
				<div class="validacion">
					<p><i>Ingrese un correo electronico<i></p>
				</div>
				<? $erroresEnRegistro["errorCorreoElectronico"]; ?>
			<?php endif; ?>


			<p>Clave:</p>
			<input type="password" name="password" placeholder="Ingrese una Contraseña" value="">
			<?php if (isset($erroresEnRegistro["errorClave"])) : ?>
				<div class="validacion">
					<p><i>Ingrese una clave<i></p>
				</div>
				<? $erroresEnRegistro["errorClave"]; ?>
			<?php endif; ?>

			<p>Foto de Perfil:</p>
			<input type="file" name="foto" placeholder="Foto" value="">
			<?php if (isset($erroresEnRegistro["errorFoto"])) : ?>
				<div class="validacion">
					<p><i>Ingrese una foto *.jpg<i></p>
				</div>
				<? $erroresEnRegistro["errorFoto"]; ?>
			<?php endif; ?>



			<br>
			<button type="submit" name="button">Registrar</button>
			<br>
		</form>
	</div>

	<?php include_once "footer.php"; ?>

</body>

</html>