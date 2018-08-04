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
    $sqlRecetas = "SELECT * FROM publicaciones WHERE tipo_id = 1 ORDER BY (Fecha) DESC limit 4";
    $parametros = array();
    
    
    $sqlNotas = "SELECT * FROM publicaciones WHERE tipo_id = 2 ORDER BY (Fecha) DESC limit 4";
    $parametrosNotas = array();

    $resultRecetas = $con->consulta($sqlRecetas, $parametros);
//    $resultNotas = $con->consulta($sqlNotas, $parametrosNotas);

   
    if ($resultRecetas) {//la ejecucion de mi consulta fue V => debo obterner la lista de filas obtenidas por la consulta
        $recetas = $con->restantesRegistros();
        $smarty->assign("recetas", $recetas);
    } else {
        echo 'error de consulta' . $con->ultimoError;
    }
    
//     if ($resultNotas) {//la ejecucion de mi consulta fue V => debo obterner la lista de filas obtenidas por la consulta
//        $notas = $con->restantesRegistros();
//        $smarty->assign("notas", $notas);
//    } else {
//        echo 'error de consulta' . $con->ultimoError;
//    }
    
} else {
    echo "error de conexion" . $con->ultimoError; // devuelve la cadena con el ultimo error 
}


$con->desconectar();
 
  
$con->conectar();

if ($con) {
    $sqlNotas = "SELECT * FROM publicaciones WHERE tipo_id = 2 ORDER BY (Fecha) DESC limit 4";
    $parametrosNotas = array();

    $resultNotas = $con->consulta($sqlNotas, $parametrosNotas);

    if ($resultNotas) {//la ejecucion de mi consulta fue V => debo obterner la lista de filas obtenidas por la consulta
        $notas = $con->restantesRegistros();
        $smarty->assign("notas", $notas);
    } else {
        echo 'error de consulta' . $con->ultimoError;
    }
} else {
    echo "error de conexion" . $con->ultimoError; // devuelve la cadena con el ultimo error 
}


//Muestro el resultado al Cliente
$smarty->display('index.tpl');


?>