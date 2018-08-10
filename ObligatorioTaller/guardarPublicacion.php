<?php

require_once("seguridad.php");
require_once('Librerias/smarty/libs/Smarty.class.php');
require_once ("databaseController.php");


$titulo = xss_clean($_GET['txtTituloPublicacion']);
$texto = $_GET['txtTextoPublicacion'];
$fecha = $_GET['txtFechaPublicacion'];



if (getPublicacion($titulo) == false) {
     
    crearCategoria(crearPublicacion($titulo, $texto, $fecha, $imagen));
  //  $smarty->display('index.php');
} else {
    $message = "$titulo existe";
    echo "<script type='text/javascript'>alert('$message');</script>";
}


?>
