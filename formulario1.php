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
//  $provincia = $_POST['provincia'];
  $codPostal = trim($_POST['codpostal']);


  		$provincias = [
  			"Tuc" => "Tucumán",
  			"BsAs" => "Buenos Aires",
  			"Cat" => "Catamarca",
  			"Cha" => "Chaco",
  			"Chu" => "Chubut",
  			"Cor" => "Córdoba",
  			"Corr" => "Corrientes",
  			"Ent" => "Entre Ríos",
  			"For" => "Formosa",
  			"Juj" => "Jujuy",
  			"Lap" => "La Pampa",
  			"Lar" => "La Rioja",
  			"Men" => "Mendoza",
  			"Mis" => "Misiones",
  			"Neu" => "Neuquén",
  			"Rio" => "Río Negro",
  			"Sal" => "Salta",
  			"SanJ" => "San Juan",
  			"SanL" => "San Luis",
  			"Sant" => "Santa Cruz",
  			"SanF" => "Santa Fe",
  			"Sgo" => "Santiago del Estero",
  			"Tie" => "Tierra del Fuego",
  		];






  // Esta función guarda el array que retorna la función validarRegistro()
  $erroresEnRegistro = validarRegistro();

  // Si no tiene nada el array de errores
  if ( !count($erroresEnRegistro) ) {
    // Hago una redirección
    header('location: registroExitoso.php');
    exit;
  }
}




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

	    <div class="col-md-8">
	      <input type="text" class="" name="nombre" value="<?=isset($nombre) ? $nombre : null;?>" placeholder="Nombre/s">

        <?php if(isset($erroresEnRegistro["errorNombre"])):?>
          <div class="alert alert-primary" role="alert" >
              <p class = "error"> <?= $erroresEnRegistro["errorNombre"]; ?>    </p>
            </div>
<?php endif; ?>
      </div>
	    <div class="col-md-8">
	      <input type="text" class="form" name="apellido" value="<?=isset($apellido) ? $apellido : null;?>" placeholder="Apellido">
        <?php if(isset($erroresEnRegistro["errorApellido"])):?>
          <div class="alert alert-primary" role="alert" >
              <p class = "error"> <?= $erroresEnRegistro["errorApellido"]; ?></p>
            </div>
        <?php endif; ?>
      </div>
	  </div>


    <div class="col-md-8">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" value="<?=isset($email) ? $email : null;?>"  placeholder="Email">
    </div>

    <div class="col-md-6">
      <label for="">Clave</label>
      <input type="password" class="" name="clave" value="<?=isset($clave) ? $clave : null;?>"  placeholder="********">
    </div>


  <div class="col-md-6">
    <label for="">Direccion</label>
    <input type="text" class="" name="direccion" value="<?=isset($direccion) ? $direccion : null;?>"  placeholder="Salta 1050">
  </div>
  <div class="">
    <label for="">Direccion 2</label>
    <input type="text" class="" name="direccion1" value="<?=isset($direccion1) ? $direccion1 : null;?>"  placeholder="Torre 7, PB, F">
  </div>
    <div class="col-md-6">
      <label for="">Ciudad</label>
      <input type="text" class=""  name="ciudad" value="<?=isset($ciudad) ? $ciudad : null;?>" >
    </div>

    <div class="col-md-8">
      <label for="">Provincia:</label>
      <select class="" name="provincia">
    <option value ="" selected>Elija...</option>
    <?php
      foreach ($provincias as $codigo => $provincia) : ?>
      <?php if ($_POST["provincia"] == $codigo) : ?>
      <option value="<?=$codigo;?>" selected>
        <?=$provincia;?>
      </option>
    <?php else : ?>
      <option value="<?=$codigo;?>">
        <?=$provincia;?>
      </option>
    <?php endif; ?>
    <?php endforeach; ?>
      </select>
    </div>
    <div class="col-md-4">
      <label for="">C.P.</label>
      <input type="text" class="" name="codpostal" value="<?=isset($codPostal) ? $codPostal : null;?>" >
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
