<?php

require_once("seguridad.php");
require_once('Librerias/smarty/libs/Smarty.class.php');
require_once ("databaseController.php");

$email = $_POST['txtEmailUsuario'];
$password = $_POST['txtPassword'];
$esAdmin = isset($_POST['chkAdmin']) ? 1 : 0;


if (getUsuario($email) == false){
crearUsuario($email, $password, $esAdmin);
}else
    {
    $message = "$email existe";
echo "<script type='text/javascript'>alert('$message');</script>";
}
//$smarty->display('index.tpl');


?>