<?php

//Incluyo la biblioteca SMARTY
require_once('Librerias/smarty/libs/Smarty.class.php');
require_once('Librerias/class.Conexion.BD.php');
require_once('config/configuracion.php');
    
//Instancio objeto SMARTY
$smarty = new Smarty();

//Indicamos las carpetas a usar por SMARTY
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

 $smarty->assign("publicaciones", getPublicaciones());
   

//Muestro el resultado al Cliente
$smarty->display('listadoPublicacionesTipo.tpl');


?>

