<?php
session_start();
if(!isset($_SESSION["nombre"]))
{
    echo "no hay ninguna sesion iniciada";
}
else
{
    session_destroy();
   // echo "Has cerrado la sesion";
    header("Location: index.php");
}



?>
