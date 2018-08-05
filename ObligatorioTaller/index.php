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
    $sqlRecetas = "SELECT p.titulo as titulo, SUBSTRING(p.texto, 1, 150) as texto, " 
        . "p.fecha as fecha, p.imagen as imagen, c.nombre as nombre, c.categoria_id " 
        . " FROM publicaciones p, categorias c "
        . "WHERE (p.tipo_id = 1 AND p.categoria_id = c.categoria_id)"
        . "ORDER BY p.Fecha DESC limit 4";
    
    
    $parametros = array();
    
    
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
    $sqlNotas = "SELECT p.titulo as titulo, SUBSTRING(p.texto, 1, 150) as texto, " 
        . "p.fecha as fecha, p.imagen as imagen, c.nombre as nombre, c.categoria_id " 
        . " FROM publicaciones p, categorias c "
        . "WHERE (p.tipo_id = 2 AND p.categoria_id = c.categoria_id)"
        . "ORDER BY p.Fecha DESC limit 4";
    
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