<?php
session_start();
require_once ("Librerias/smarty/libs/Smarty.class.php");

$smarty = new Smarty();

$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

$smarty->assign("usuario",$_COOKIE['usuario']);
$smarty->assign("mensaje",$_SESSION['mensaje']);

unset($_SESSION['mensaje']);


$smarty->display("login.tpl");

?>