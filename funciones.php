<?php


function guardarArchivo(){
  if($_FILES["foto"]["error"] == UPLOAD_ERROR_OK){
    $nombreFoto = $_FILES["foto"]["name"];
    $archivo = $_FILES["foto"]["tmp_name"];
   $ext = pathinfo($nombreFoto, PATH_INFO_EXTENSION);

  $miArchivo = dirname(_FILE_);
   $miArchivo = $miArchivo . "../archivos";
   $fotoUsuario = $_POST["email"];
  $miArchivo = $miArchivo . $fotoUsuario . $ext;
//  move_uploaded_file($_FILES["foto"]["tmp_name"], "../archivos/imagen." . $ext);
  move_uploaded_file($archivo, $miArchivo);


    //$nombreArchivo=$_FILES["foto"]["tmp_name"];
    //$archivo = $_FILES["foto"]["tmp_name"];
    //move_uploaded_files($archivo, "../archivos/$nombreArchivo");
  }


} 
function validarUsuario(){
  
}

function json(){
  $password = password_hash ($_POST['password'], PASSWORD_DEFAULT);
	 $datos = [];

	 // code...
	 //$datos = $_POST;
	 //$json = json_encode($datos);
	 //var_dump($datos);

	 $archivo = "usuarios.json";
	 $contenidoArchivo = file_get_contents ($archivo);
	 
	 //una vez obtenido el archivo, convertirlo en array php.
	 $datos = json_decode ($contenidoArchivo, true);
	 

	 if (!$datos) {
		 // code...
		 $datos =[];
	 }
	 $ext = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
	 $nombreFoto=$_POST ['correoElectronico'] ;
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
		 'password' => $password,
		 "nombreFoto"=>$nombreFoto . "." . $ext
		// 'foto' => $filename
	 ];

	 
	 //codifico de nuevo a jason
		 $json = json_encode($datos);
		 

	 //sobreescribir el archivo con los datos nuevos
	 file_put_contents ("$archivo", $json);
	

}
?>
