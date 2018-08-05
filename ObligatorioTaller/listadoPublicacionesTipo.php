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

//creo conexion BD
$con = new ConexionBD("mysql", "localhost", "Obligatorio", "root", "root"); //Estableci la conexion a la bd

$con->conectar();


if ($con) {
    $sql = "SELECT * FROM publicaciones";
    
    $parametros = array();

    $result = $con->consulta($sql, $parametros);

    if ($result) {//la ejecucion de mi consulta fue V => debo obterner la lista de filas obtenidas por la consulta
        $publicaciones = $con->restantesRegistros();
        $smarty->assign("publicaciones", $publicaciones);
    } else {
        echo 'error de consulta' . $con->ultimoError;
    }
} else {
    echo "error de conexion" . $con->ultimoError; // devuelve la cadena con el ultimo error 
}

//Muestro el resultado al Cliente
$smarty->display('listadoPublicacionesTipo.tpl');


?>

