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


} ?>
