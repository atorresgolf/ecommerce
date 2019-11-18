<?php
	include_once "validacion_registro.php";

	$nombreCompleto = null;
	$apellidoCompleto = null;
	$domicilio = null;
	$telefono = null;
	$numero = null;
	$localidad = null;
	$provincia = null;
	$correoElectronico = null;

	if ( count($_POST) ) {
		// Variables para persistir la información del usuario
		$nombreCompleto = trim($_POST['nombre']);
		$apellidoCompleto = trim($_POST['apellido']);
		$domicilio = trim($_POST['domicilio']);
		$telefono = trim($_POST['telefono']);
		$numero = trim($_POST['numero']);
		$localidad = trim($_POST['localidad']);
		$provincia = trim($_POST['provincia']);
		$correoElectronico = trim($_POST['correoElectronico']);

		// Esta función guarda el array que retorna la función validarRegistro()
		$erroresEnRegistro = validarRegistro();
// subir archivo FOTO
	$nombreFoto=$_FILES["foto"]["tmp_name"];
	$archivo = $_FILES["foto"]["tmp_name"];
	move_uploaded_files($archivo, "../archivos/$nombreFoto");

		// Si no tiene nada el array de errores
		if ( !count($erroresEnRegistro) ) {
			// Hago una redirección
			header('location: usuarios.php');
			exit;
		}
	}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://kit.fontawesome.com/0cb2d9cf91.js"></script>
		<link href="css\estiloformulario.css" rel="stylesheet" >

		<!--<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">-->
		<title>The Golf Shop</title>
	</head>

<body>
	<header class="golfshop">
		<a href="index.html" class="volver"><img src="img/shopgolf.png" alt=""></a>
	</header>

		<div class="container">
			<h1>FORMULARIO DE REGISTRO</h1>
			<form class="registro" action="" method="post" enctype="multipart/form-data">
				<p>Nombre:</p>
				<input type="text" name="nombre" placeholder="Nombre" value="<?= $nombreCompleto; ?>" >
					<?php if ( isset($erroresEnRegistro["errornombre"])) : ?>
						<div class="validacion"><p><i>Ingrese un nombre valido<i></p></div>
							<? = $erroresEnRegistro["errornombre"]; ?>
					<?php endif;?>

				<p>Apellido:</p>
				<input type="text" name="apellido" placeholder="Apellido" value="<?= $apellidoCompleto; ?>" >
					<?php if ( isset($erroresEnRegistro["errorapellido"])) : ?>
						<div class="validacion"><p id="validacion"><i>Ingrese un apellido valido<i></p></div>
							<? = $erroresEnRegistro["errorapellido"]; ?>
					<?php endif;?>

				<p>Domicilio:</p>
				<input type="text" name="domicilio" placeholder="Domicilio" value="<?= $domicilio; ?>" >
					<?php if ( isset($erroresEnRegistro["errordomicilio"])) : ?>
						<div class="validacion"><p><i>Ingrese un domicilio valido<i></p></div>
							<? = $erroresEnRegistro["errordomicilio"]; ?>
					<?php endif;?>

				<p>Nº / Piso, Dpto:</p>
				<input type="text" name="numero" placeholder="Numero, Dpto" value="<?= $numero; ?>" >
					<?php if ( isset($erroresEnRegistro["errornumero"])) : ?>
						<div class="validacion"><p><i>Ingrese un numero valido<i></p></div>
							<? = $erroresEnRegistro["errornumero"]; ?>
					<?php endif;?>

				<p>Telefono:</p>
				<input type="text" name="telefono" placeholder="Numero, Dpto" value="<?= $telefono; ?>" >
					<?php if ( isset($erroresEnRegistro["errortelefono"])) : ?>
						<div class="validacion"><p id="validacion"><i>Ingrese un numero de tel. valido<i></p></div>
							<? = $erroresEnRegistro["errortelefono"]; ?>
					<?php endif;?>

				<p>Localidad:</p>
				<input type="text" name="localidad" placeholder="Localidad" value="<?= $localidad; ?>" >
					<?php if ( isset($erroresEnRegistro["errorlocalidad"])) : ?>
						<div class="validacion"><p><i>Ingrese una localidad valida<i></p></div>
							<? = $erroresEnRegistro["errorlocalidad"]; ?>
					<?php endif;?>

				<p>Provincia:</p>
				<input type="text" name="provincia" placeholder="Provincia"value="<?= $provincia; ?>">
					<?php if ( isset($erroresEnRegistro["errorprovincia"])) : ?>
						<div class="validacion"><p><i>Ingrese un provincia valida<i></p></div>
							<? = $erroresEnRegistro["errorprovincia"]; ?>
					<?php endif;?>

				<p>Correo Electronico (Nombre de Usuario):</p>
				<input type="email" name="correoElectronico" placeholder="E-mail" value="<?= $correoElectronico; ?>">
					<?php if ( isset($erroresEnRegistro["errorcorreoElectronico"])) : ?>
						<div class="validacion"><p><i>Ingrese un nombre valido<i></p></div>
							<? = $erroresEnRegistro["errorcorreoElectronico"]; ?>
					<?php endif;?>
					<p>Foto de Perfil:</p>
					<input type="file" name="foto" placeholder="Foto" value="

					">
						<?php if ( isset($erroresEnRegistro["errorcorreoElectronico"])) : ?>
							<div class="validacion"><p><i>Ingrese un nombre valido<i></p></div>
								<? = $erroresEnRegistro["errorcorreoElectronico"]; ?>
						<?php endif;?>

				<br>
				<button type="submit" name="button">Registrar</button>
				<br>
			</form>
		</div>

<?php include_once "footer.php"; ?>

</body>
</html>
