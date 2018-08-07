<?php
require_once('Librerias/smarty/libs/Smarty.class.php');
require_once('config/configuracion.php');
require_once('databaseController.php');  
//Instancio objeto SMARTY
$smarty = new Smarty();

//Indicamos las carpetas a usar por SMARTY
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";


$smarty->assign("recetas", getRecetas());
$smarty->assign("notas", getNotas());
//Muestro el resultado al Cliente
$smarty->display('index.tpl');


?>