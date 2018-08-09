<?php
require_once('Librerias/smarty/libs/Smarty.class.php');
require_once('config/configuracion.php');
require_once('databaseController.php');  
//Instancio objeto SMARTY
$smarty = new Smarty();

//Indicamos las carpetas a usar por SMARTY
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";


$smarty->display('registroCategoria.tpl');


?>