<?php
	function validarRegistro () {
		$errores = [];

		// Voy a ir llenando ese array de errores si es que los encuentro

		$nombre = trim($_POST['nombre']);// Elimina espacios antes y después de la ocurrencia de un caracter alfanumérico
		$apellido = trim($_POST['apellido']);
		$email = trim($_POST['email']);
//		$usuario = trim($_POST['usuario']);
		$clave = trim($_POST['clave']);
		$direccion = trim($_POST['direccion']);
		$direccion1 = trim($_POST['direccion1']);
		$ciudad = trim($_POST['ciudad']);
		$provincia = $_POST['provincia'];
		$codPostal = trim($_POST['codpostal']);



		// Si el nombre completo está vacío
		if ( empty($nombre) ) {
			// en el array de errores creo una posición con el texto que deseo mostrar
			$erroresEnRegistro['errorNombre'] = 'El nombre es obligatorio';
		}

		// Si el apellido está vacío
		if ( empty($apellido) ) {
			// en el array de errores creo una posición con el texto que deseo mostrar
			$erroresEnRegistro['errorApellido'] = 'El apellido es obligatorio';
		}

		// Si el correo electrónico está vacío
		if ( empty($email) ) {
			// en el array de errores creo una posición con el texto que deseo mostrar
			$erroresEnRegistro['errorEmail'] = 'El correo electrónico es obligatorio';
		} else if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
			$erroresEnRegistro['errorEmail'] = 'Ingresá una dirección de correo válida';
		}

		// Si el nombre de usuario está vacío
	//	if ( empty($usuario) ) {
			// en el array de errores creo una posición con el texto que deseo mostrar
//			$errores['errorUsuario'] = 'El nombre de usuario es obligatorio';
//		}


		// Si la clave esta vacia
		if ( empty($clave) ) {
			// en el array de errores creo una posición con el texto que deseo mostrar
			$erroresEnRegistro['errorClave'] = 'La contraseña es obligatoria';
		}

		// Si la direccion esta vacia
		if ( empty($direccion) ) {
			// en el array de errores creo una posición con el texto que deseo mostrar
			$erroresEnRegistro['errorDireccion'] = 'La Direccion es obligatoria';
		}

		// Si la ciudad esta vacia
		if ( empty($ciudad) ) {
			// en el array de errores creo una posición con el texto que deseo mostrar
			$erroresEnRegistro['errorCiudad'] = 'La ciudad es obligatoria';
		}

		// Si la provincia esta vacia
		if ( empty($provincia) ) {
			// en el array de errores creo una posición con el texto que deseo mostrar
			$erroresEnRegistro['errorProvincia'] = 'La provincia es obligatoria';
		}
		if (empty($_POST["codpostal"]) == false) {
			// en el array de errores creo una posición con el texto que deseo mostrar
			$erroresEnRegistro['errorCodPostal'] = 'El codigo postal es obligatorio';
			}

		return $erroresEnRegistro;
	}
?>


<?php
$nombreDeUsuario = "admin";
$contraseniaDeUsuario = "";
if($nombreDeUsuario == "admin" && $contraseniaDeUsuario == "1234"){
	echo "Bienvenido!";
}else if($nombreDeUsuario == "admin"){
	if($contraseniaDeUsuario == ""){
		echo "No ingreso la contraseña";
	}else{
		if($contraseniaDeUsuario == "1234"){
			if($nombreDeUsuario == ""){
				echo "No ingreso nombre de usuario";
			}
		}
	}
}{
	echo "Hay un error en el Login";
}
?>
