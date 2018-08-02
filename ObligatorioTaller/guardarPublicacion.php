<?php
require_once("seguridad.php");


$titulo = xss_clean($_GET['txtTituloPublicacion']);
$texto = $_GET['txtTextoPublicacion'];
$fecha = $_GET['txtFechaPublicacion'];


echo "Titulo: " . $titulo . "<br/>";
echo "Texto: " . $texto . "<br/>";
echo "Fecha: " . $fecha . "<br/>";


?>
