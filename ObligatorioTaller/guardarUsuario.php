<?php

require_once("seguridad.php");
require_once('Librerias/smarty/libs/Smarty.class.php');
require_once ("databaseController.php");

////Instancio objeto SMARTY
//$smarty = new Smarty();
//
////Indicamos las carpetas a usar por SMARTY
//$smarty->template_dir = "templates";
//$smarty->compile_dir = "templates_c";


$email = xss_clean($_POST['txtEmailUsuario']);
$password = $_POST['txtPassword'];
$esAdmin = isset($_POST['chkAdmin']) ? 1 : 0;


if (getUsuario($email) == false) {
    crearUsuario($email, $password, $esAdmin);
   // $smarty->display('index.php');
} else {
    $message = "$email existe";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>