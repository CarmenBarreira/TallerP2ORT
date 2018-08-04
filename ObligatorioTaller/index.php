<?php

//Incluyo la biblioteca SMARTY
require_once('Librerias/smarty/libs/Smarty.class.php');
require_once('Librerias/class.Conexion.BD.php');
    

//Instancio objeto SMARTY
$smarty = new Smarty();

//Indicamos las carpetas a usar por SMARTY
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

//creo conexion BD
$con = new ConexionBD("mysql", "localhost", "Obligatorio", "root", "root"); //Estableci la conexion a la bd

$con->conectar();

if ($con) {
    $sqlRecetas = "SELECT * FROM publicaciones WHERE tipo_id = 1 ORDER BY (Fecha) DESC";
    $parametros = array();

    $result = $con->consulta($sqlRecetas, $parametros);

    if ($result) {//la ejecucion de mi consulta fue V => debo obterner la lista de filas obtenidas por la consulta
        $recetas = $con->restantesRegistros();

        //para probar
//        var_dump($recetas);
//        die();

        $smarty->assign("recetas", $recetas);
    } else {
        echo 'error de consulta' . $con->ultimoError;
    }
} else {
    echo "error de conexion" . $con->ultimoError; // devuelve la cadena con el ultimo error 
}

//Muestro el resultado al Cliente
$smarty->display('index.tpl')
?>