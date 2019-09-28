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
		$clave =trim($_POST['password']);

    if(!empty($_FILES['foto'])){
		$extension = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);
		$filename = md5($correoElectronico). "." .$extension;
		copy($_FILES['foto']['tmp_name'],"uploads/".$filename);
	}





		// Esta función guarda el array que retorna la función validarRegistro()
		$erroresEnRegistro = validarRegistro();

		// Si no tiene nada el array de errores
		//if ( !count($erroresEnRegistro) ) {
			// Hago una redirección
			//header('location: usuarios.php');
			//exit;
		}

	//	if($_FILES["foto"]["error"] === UPLOAD_ERROR_OK){
			// subir archivo FOTO
	//			$nombreFoto=$_FILES["foto"]["name"];
	////			$archivo = $_FILES["foto"]["tmp_name"];
	////			move_uploaded_files($archivo, "../archivos/$nombreFoto");
	//	}

 ?>

 <?php
 if ($_POST) {
	 $password = password_hash ($_POST['password'], PASSWORD_DEFAULT);
	 $datos = [];

	 // code...
	 //$datos = $_POST;
	 //$json = json_encode($datos);
	 //var_dump($datos);

	 $archivo = "usuarios.json";
	 $contenidoArchivo = file_get_contents ($archivo);
	 //var_dump( $contenidoArchivo);
	 //exit;

	 //una vez obtenido el archivo, convertirlo en array php.
	 $datos = json_decode ($contenidoArchivo, true);
	 //var_dump($datos);
	 //exit;

	 if (!$datos) {
		 // code...
		 $datos =[];
	 }
		 //agregarle los datos del nuevo usuario
	 $datos [] = [
		 'nombre' => $_POST ['nombre'],
		 "apellido" => $_POST["apellido"],
		 "domicilio" => $_POST["domicilio"],
		 "numeroDom" => $_POST["numero"],
		 "telefono" => $_POST["telefono"],
		 "localidad" => $_POST["localidad"],
		 "provincia" => $_POST["provincia"],
		 'email' => $_POST ['correoElectronico'],
		 'nombre_usuario' => $_POST['correoElectronico'],
		 'password' => $password
		 'foto' => $filename
	 ];

	 //var_dump($datos);
	 //exit;

	 //codifico de nuevo a jason
		 $json = json_encode($datos);
		 //var_dump($datos);
		 //exit;

	 //sobreescribir el archivo con los datos nuevos
	 file_put_contents ("$archivo", $json);
	// var_dump($json);
	 exit;
}
	 //var_dump($datos);


//$nombreArchivo = $_FILES['FOTO']['tmp_name'];
//$archivo = $_FILES['FOTO']['tmp_name'];
//move_uploaded_file($archivo, "adjuntos/adjunto.jpg");
//exit;

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
		<a href="index.php" class="volver"><img src="img/shopgolf.png" alt=""></a>
	</header>

		<div class="container">
			<h1>FORMULARIO DE REGISTRO</h1>
			<form class="registro" action="nuevo_formulario.php" method="POST" enctype="multipart/form-data">
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


						<p>Clave:</p>
						<input type="password" name="password" placeholder="Ingrese una Contraseña" value="<?= $clave; ?>" >
							<?php if ( isset($erroresEnRegistro["errornombre"])) : ?>
								<div class="validacion"><p><i>Ingrese una clave valida<i></p></div>
									<? = $erroresEnRegistro["errornombre"]; ?>
							<?php endif;?>

					<p>Foto de Perfil:</p>
					<input type="file" name="foto" placeholder="Foto" value="">
					<?php if ( isset($erroresEnRegistro["errorfoto"])) : ?>
						<div class="validacion"><p><i>Ingrese archivo valido<i></p></div>
							<? = $erroresEnRegistro["errorfoto"]; ?>
					<?php endif;?>


				<br>
				<button type="submit" name="button">Registrar</button>
				<br>
			</form>
		</div>

<?php include_once "footer.php"; ?>

</body>
</html>
