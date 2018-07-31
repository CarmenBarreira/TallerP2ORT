<?php
session_start();

require_once ("Librerias/smarty/libs/Smarty.class.php");

$smarty = new Smarty();

$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";


if(!$_SESSION['entro']){
    $_SESSION['mensaje'] = "Debe ingresar para acceder al área privada";
    header("Location: login.php");
}
else{
    
    $smarty->assign("datos",$datos);
    
    $smarty->display("privada.tpl");
}

?>
