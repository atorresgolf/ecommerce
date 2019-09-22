<?php
// Incluyo el archivo validacionRegistro.php
require_once 'validarRegistro.php';
//$mensajes = "";
//$nombre = "";
//$apellido = "";
//$email = "";
//$usuario = "";
//$clave = "";
//$direccion ="";
//$direccion1 = "";
//$ciudad = "";
//$provincia = "";
//$codpostal ="";

// Si vino información por POST
// [] = false
// ['clave' => 'valor'] = true
if ( count($_POST) ) {
  // Variables para persistir la información del usuario
  $nombre = trim($_POST['nombre']);
  $apellido = trim($_POST['apellido']);
  $email = trim($_POST['email']);
//  $usuario = trim($_POST['usuario']);
  $clave = trim($_POST['clave']);
  $direccion = trim($_POST['direccion']);
  $direccion1 = trim($_POST['direccion1']);
  $ciudad = trim($_POST['ciudad']);
  $provincia = $_POST['provincia'];
  $codPostal = trim($_POST['codpostal']);


  // Esta función guarda el array que retorna la función validarRegistro()
  $erroresEnRegistro = validarRegistro();

  // Si no tiene nada el array de errores
  if ( !count($erroresEnRegistro) ) {
    // Hago una redirección
    header('location: registroExitoso.php');
    exit;
  }
}


//  if ($_POST) {

  //  if (strlen($_POST["nombre"]) < 5) {
//      $mensajes = $mensajes . "Ingrese un nombre con mas de 5 letras <br>";
  //  }else{
//      $nombre = $_POST["nombre"];
//    }
//    if (strlen($_POST["apellido"]) == 0){
//        $mensajes = $mensajes . "Ingrese su apellido <br>";
//    }else{
//      $apellido = $_POST["apellido"];
//    }
//    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
//      $mensajes = $mensajes . "El email no tiene formato valido <br>";
//    }else{
//    }
    //      $email = $_POST["email"];
//    if (strlen($_POST["clave"]) < 8) {
//      echo "La clave debe tener al menos 8 caracteres <br>";
//    }else{
//      $clave = $_POST["clave"];
//    }
//    if (strlen($_POST["direccion"]) < 5) {
//      $mensajes = $mensajes . "Ingrese una direccion con mas de 5 letras <br>";
//    }else{
//    }
    //      $direccion = $_POST["direccion"];
//    if (strlen($_POST["direccion1"]) == 0) {
//    }else{

//      $direccion1 = $_POST["direccion1"];
//    }
//    if (strlen($_POST["ciudad"]) < 3) {
//      $mensajes = $mensajes . "Ingrese una ciudad con mas de 3 letras <br>";
//      $ciudad = $_POST["ciudad"];
      //    }else{
//    }
//    if (is_numeric($_POST["codpostal"]) == false) {
//      $mensajes = $mensajes . "El codigo postal debe ser numerico <br>";
//    }
//      $codpostal = $_POST["codpostal"];
      //    else{
//    }
  /*  $_POST[] = [
      "nombre" => $nombre,
      "apellido" => $apellido,
      "email" => $email,
      "clave" => $clave,
      "direccion" => $direccion,
      "direccion1" => $direccion1,
      "ciudad" => $ciudad,
      "provincia" => $provincia,
      "codpostal" => $codpostal
    ];*/

    /*
    foreach ($_POST as $key => $value) {
      $_POST[$key]=$value;}*/
//    }


 ?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="css/stylefor.css">

		<title>The Golf Shop</title>
		<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
	</head>
<body>

		<header class="golfshop">
			<a href="index.html" class="volver"><img src="img/shopgolf.png" alt=""></a>

			<h1 id="Titulo">
			  FORMULARIO DE REGISTRO
			</h1>
		</header>

    <?php if ( isset($erroresEnRegistro) && count($erroresEnRegistro) > 0 ) : ?>



        <?php foreach($erroresEnRegistro as $key => $unError) :?>

        <?php endforeach; ?>

    <?php endif; ?>



		<div class="container">
		<div class="row">
			<div class="col-md-4">
				<!-- LIBRE -->
			</div>
		</div>

						<div class="container">
					<div class="formulario">
					<div class="col-md-4">
	<form class="" action="formulario.php" method="POST">

	  <div class="form-row">
	    <div class="col">
	      <input type="text" class="form-control" name="nombre" value="<?=isset($nombre) ? $nombre : null;?>" placeholder="Nombre/s">

        <?php if(isset($erroresEnRegistro["errorNombre"])):?>
          <div class="alert alert-primary" role="alert" >
              <p class = "error"> <?= $erroresEnRegistro["errorNombre"]; ?>    </p>
            </div>
<?php endif; ?>
      </div>
	    <div class="col">
	      <input type="text" class="form-control" name="apellido" value="<?=isset($apellido) ? $apellido : null;?>" placeholder="Apellido">
        <?php if(isset($erroresEnRegistro["errorApellido"])):?>
          <div class="alert alert-primary" role="alert" >
              <p class = "error"> <?= $erroresEnRegistro["errorApellido"]; ?></p>
            </div>
        <?php endif; ?>
      </div>
	  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" value="<?=isset($email) ? $email : null;?>" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Clave</label>
      <input type="password" class="form-control" name="clave" value="<?=isset($clave) ? $clave : null;?>" id="inputPassword4" placeholder="********">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Direccion</label>
    <input type="text" class="form-control" name="direccion" value="<?=isset($direccion) ? $direccion : null;?>" id="inputAddress" placeholder="Salta 1050">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Direccion 2</label>
    <input type="text" class="form-control" name="direccion1" value="<?=isset($direccion1) ? $direccion1 : null;?>" id="inputAddress2" placeholder="Torre 7, PB, F">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control"  name="ciudad" value="<?=isset($ciudad) ? $ciudad : null;?>" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Provincia</label>
      <select id="inputState" class="form-control" name="provincia">
        <option value ="" selected>Elija...</option>
        <option value="Tuc">Tucumán</option>
				<option value="Bsas">Buenos Aires</option>
				<option value="Cat">Catamarca</option>
        <option value="Cha">Chaco</option>
				<option value="Chu">Chubut</option>
				<option value="Cor">Córdoba</option>
        <option value="Corr">Corrientes</option>
        <option value="Ent">Entre Ríos</option>
        <option value="For">Formosa</option>
        <option value="Juj">Jujuy</option>
        <option value="Lap">La Pampa</option>
        <option value="Lar">La Rioja</option>
        <option value="Men">Mendoza</option>
        <option value="Mis">Misiones</option>
        <option value="Neu">Neuquén</option>
        <option value="Rio">Río Negro</option>
        <option value="Sal">Salta</option>
        <option value="SanJ">San Juan</option>
        <option value="SanL">San Luis</option>
        <option value="Sant">Santa Cruz</option>
        <option value="SanF">Santa Fe</option>
        <option value="Sgo">Santiago del Estero</option>
        <option value="Tie">Tierra del Fuego</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">C.P.</label>
      <input type="text" class="form-control" name="codpostal" value="<?=isset($codPostal) ? $codPostal : null;?>" id="inputZip">
    </div>
  </div>
  <!--<div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>-->
  <button type="submit" class="btn btn-success">Enviar</button>

</form>






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


			</div>

<?php include_once "footer.php"; ?>


</body>
</html>
