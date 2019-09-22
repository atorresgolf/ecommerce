<?php
$mensajes = "";
$nombre = "";
$apellido = "";
$email = "";
$clave = "";
$direccion ="";
$direccion1 = "";
$ciudad = "";
$provincia = "";
$codpostal ="";

  if ($_POST) {

    if (strlen($_POST["nombre"]) < 5) {
      $mensajes = $mensajes . "Ingrese un nombre con mas de 5 letras <br>";
    }else{
      $nombre = $_POST["nombre"];
    }
    if (strlen($_POST["apellido"]) == 0){
        $mensajes = $mensajes . "Ingrese su apellido <br>";
    }else{
      $apellido = $_POST["apellido"];
    }
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
      $mensajes = $mensajes . "El email no tiene formato valido <br>";
    }else{
      $email = $_POST["email"];
    }
    if (strlen($_POST["clave"]) < 8) {
      echo "La clave debe tener al menos 8 caracteres <br>";
    }else{
      $clave = $_POST["clave"];
    }
    if (strlen($_POST["direccion"]) < 5) {
      $mensajes = $mensajes . "Ingrese una direccion con mas de 5 letras <br>";
    }else{
      $direccion = $_POST["direccion"];
    }
    if (strlen($_POST["direccion1"]) == 0) {

    }else{
      $direccion1 = $_POST["direccion1"];
    }
    if (strlen($_POST["ciudad"]) < 3) {
      $mensajes = $mensajes . "Ingrese una ciudad con mas de 3 letras <br>";
    }else{
      $ciudad = $_POST["ciudad"];
    }
    if (is_numeric($_POST["codpostal"]) == false) {
      $mensajes = $mensajes . "El codigo postal debe ser numerico <br>";
    }
    else{
      $codpostal = $_POST["codpostal"];
    }
    $_POST[] = [
      "nombre" => $nombre,
      "apellido" => $apellido,
      "email" => $email,
      "clave" => $clave,
      "direccion" => $direccion,
      "direccion1" => $direccion1,
      "ciudad" => $ciudad,
      "provincia" => $provincia,
      "codpostal" => $codpostal
    ];

    /*
    foreach ($_POST as $key => $value) {
      $_POST[$key]=$value;*/
    }


  }


 ?>
