<?php
session_start();
include_once "validacion_registro.php";

$nombreCompleto = $_SESSION["nombre"] ;
$nombreUsuario=$_SESSION["usuario"];
$apellidoCompleto=$_SESSION["apellido"];
$domicilio=$_SESSION["domicilio"];
$numero=$_SESSION["numero"];
$telefono=$_SESSION["telefono"];
$localidad=$_SESSION["localidad"];
$provincia=$_SESSION["provincia"];	
$correoElectronico =$_SESSION["email"];
$nombreFoto=$_SESSION["nombreFoto"];
//$nombreFoto=$_SESSION["nombreFoto"];
//$nombreFoto=$_FILES["foto"][$email];
  //			$archivo = $_FILES["foto"]["tmp_name"];
 // $ext = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
  
  $carpeta = "../archivos/";
  $ruta = $carpeta . $nombreFoto ;

	//var_dump($_SESSION);


//if ternario
//isset($colorPreferido)? $colorPreferido : ""

//$usuario = $_SESSION[$correoelectronico]; 

//$nombreCompleto = $_POST['nombre'];
//$apellidoCompleto = $_POST['apellido'];
//$domicilio = $_POST['domicilio'];
//$telefono = $_POST['telefono'];
//$numero = $_POST['numero'];
//$localidad = $_POST['localidad'];
//$provincia = $_POST['provincia'];



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<script src="https://kit.fontawesome.com/0cb2d9cf91.js"></script>
 		<link href="css\perfil.css" rel="stylesheet" >
     <title>PERFIL DEL USUARIO</title>
   </head>
   <body>


     <header class="golfshop">
   		<a href="index.php" class="volver"><img src="img/shopgolf.png" alt=""></a>
   	</header>
    <div class="container">
     <h1 style="text-align: center">PERFIL DEL USUARIO</h1>
     <h1 style="text-align: center font-size: 10px;">Bienvenido <?=$nombreUsuario?></h1>

       <form class="perfil" action="usuarios.php" method="POST" enctype="multipart/form-data">
         <label>NOMBRE:</label><input type="text" name="nombre" value="<?= $nombreCompleto; ?>">
         <br>
         <br>
         <label>APELLIDO:</label><input type="text" name="apellido" value="<?= $apellidoCompleto; ?>">
         <br>
         <br>
         <label>DOMICILIO:</label><input type="text" name="domicilio" value="<?= $domicilio; ?>">
         <br>
         <br>
         <label>TELEFONO:</label><input type="text" name="telefono" value="<?= $telefono; ?>">
         <br>
         <br>
         <label>NUMERO:</label><input type="text" name="numero" value="<?= $numero; ?>">
         <br>
         <br>
         <label>LOCALIDAD:</label><input type="text" name="localidad" value="<?= $localidad; ?>">
         <br>
         <br>
         <label>PROVINCIA:</label><input type="text" name="provincia" value="<?= $provincia; ?>">
         <br>
         <br>
         <label>CORREO ELECTRONICO:</label><input type="text" name="correoElectronico" value="<?= $correoElectronico; ?>">
         
         <label>FOTO PERFIL:
         <div><img src= "<?= $ruta ;?>" width=25%>
         <br>
         <p> Para cambiarla presione</p>
         <p> Seleccionar archivo</p> 
         </div>
         </label><input type="file" name="foto" value="Cambiar foto">
         <br>
				<button type="submit" name="button">Registrar cambios</button>
				<br>
       </form>
</<label>
<?php include "footer.php"; ?>

   </body>
 </html>
