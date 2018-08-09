<?php

require_once("seguridad.php");
require_once('Librerias/smarty/libs/Smarty.class.php');
require_once ("databaseController.php");


$nombreCategoria = xss_clean($_POST['txtNombreCategoria']);
$categoriaEliminada = isset($_POST['chkCategoriaEliminada']) ? 1 : 0;   


/*if (getUsuario($email) == false) {
    crearUsuario($email, $password, $esAdmin);
  //  $smarty->display('index.tpl');
} else {
    $message = "$email existe";
    echo "<script type='text/javascript'>alert('$message');</script>";
}*/

?>