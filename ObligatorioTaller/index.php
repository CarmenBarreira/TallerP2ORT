<?php
//Incluyo la biblioteca SMARTY
require_once('Librerias/smarty/libs/Smarty.class.php');

//Instancio objeto SMARTY
$smarty = new Smarty();

//Indicamos las carpetas a usar por SMARTY
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

//Logica...

//Muestro el resultado al Cliente
$smarty->display('index.tpl')

?>