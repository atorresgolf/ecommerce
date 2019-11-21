<?php
session_start();
    session_destroy();
   // echo "Has cerrado la sesion";
    header("Location: index.php");




?>
