<?php


function guardarArchivo(){
  if($_FILES["archivo"]["error"] === UPLOAD_ERROR_OK){
    $nombreFoto = $_FILES["archivo"]["name"];
    $archivo = $_FILES["archivo"]["tmp_name"];
  //  $ext = pathinfo($nombreFoto, PATH_INFO_EXTENSION);

    //$miArchivo = dirname(_FILE_);
  //  $miArchivo = $miArchivo . "/archivos";
  //$miArchivo = $miArchivo . "archivoNuevo" . $ext;

  move_uploaded_file($archivo, $miArchivo);


    //$nombreArchivo=$_FILES["foto"]["tmp_name"];
    //$archivo = $_FILES["foto"]["tmp_name"];
    //move_uploaded_files($archivo, "../archivos/$nombreArchivo");
  }


} ?>
