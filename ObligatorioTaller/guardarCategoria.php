<?php
require_once("seguridad.php");


$nombreCategoria = xss_clean($_GET['txtNombreCategoria']);
$categoriaEliminada = $_GET['chkCategoriaEliminada'];

echo "Nombre: " . $nombreCategoria . "<br/>";
echo "Eliminada: " . $categoriaEliminada . "<br/>";

?>