<?php
function validarRegistro () {
  $errores = [];

  // Voy a ir llenando ese array de errores si es que los encuentro
  $nombreCompleto   = trim($_POST["nombre"]); // Elimina espacios antes y después de la ocurrencia de un caracter alfanumérico
  $apellidoCompleto = trim($_POST['apellido']);
  $domicilio        = trim($_POST['domicilio']);
  $numero           = trim($_POST['numero']);
  $telefono         = trim($_POST['telefono']);
  $localidad        = trim($_POST['localidad']);
  $provincia        = trim($_POST['provincia']);
  $correoElectronico= trim($_POST['correoElectronico']);
  $clave            = trim($_POST['password']);

  // Si el nombre completo está vacío
  if ( empty($nombreCompleto) ) {
    // en el array de errores creo una posición con el texto que deseo mostrar
    $errores['errornombre'] = 'El nombre es obligatorio';
  }

  //Si el nombre de usuario está vacío
  if ( empty($apellidoCompleto) ) {
    // en el array de errores creo una posición con el texto que deseo mostrar
    $errores['errorapellido'] = 'El apellido de usuario es obligatorio';
  }

  // Si el nombre completo está vacío
  if ( empty($domicilio) ) {
    // en el array de errores creo una posición con el texto que deseo mostrar
    $errores['errordomicilio'] = 'El domicilio es obligatorio';
  }

  // Si el nombre completo está vacío
  if ( empty($numero) ) {
    // en el array de errores creo una posición con el texto que deseo mostrar
    $errores['errornumero'] = 'El numero es obligatorio';
  }

  // Si el nombre completo está vacío
  if ( empty($telefono) ) {
    // en el array de errores creo una posición con el texto que deseo mostrar
    $errores['errortelefono'] = 'El numero de telefono es obligatorio';
  }

  // Si el nombre completo está vacío
  if ( empty($localidad) ) {
    // en el array de errores creo una posición con el texto que deseo mostrar
    $errores['errorlocalidad'] = 'La Localidad es obligatoria';
  }

  //Si el correo electrónico está vacío
  if ( empty($correoElectronico) ) {
    // en el array de errores creo una posición con el texto que deseo mostrar
    $errores['errorCorreoElectronico'] = 'El correo electrónico es obligatorio';
  } else if ( !filter_var($correoElectronico, FILTER_VALIDATE_EMAIL) ) {
    $errores['errorCorreoElectronico'] = 'Ingresá una dirección de correo válida';
  }

  // Si el correo electrónico está vacío
  if ( empty($provincia) ) {
    // en el array de errores creo una posición con el texto que deseo mostrar
    $errores['errorprovincia'] = 'La Provincia es obligatoria';

    if (empty($clave)){
      $errores['errorclave'] = 'La Contraseña es obligatoria';
    }
  }

  /*// Si el correo electrónico está vacío
  if ( empty($paisDeNacimiento) ) {
    // en el array de errores creo una posición con el texto que deseo mostrar
    $errores['errorPaisDeNacimiento'] = 'El país de nacimiento es obligatorio';
  }*/

  return $errores;
}
 ?>
