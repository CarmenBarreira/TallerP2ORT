<?php

require_once("seguridad.php");
require_once('Librerias/smarty/libs/Smarty.class.php');
require_once('Librerias/class.Conexion.BD.php');
require_once('config/configuracion.php');

$con = new ConexionBD("mysql", "localhost", "Obligatorio", "root", "root");

$con->conectar();

$sql = "INSERT INTO usuarios (email, password) 
	VALUES (:email, :pass)";

//Preparar la sentencia
$sentencia = $con->prepare($sql);

$nombreUsuario = xss_clean($_GET['txtNombreUsuario']);
$email = $_GET['txtEmailUsuario'];
$password = $_GET['txtPassword'];
$esAdmin = $_GET['chkAdmin'];


//Cargar los parámetros

$sentencia->bindParam('email', $email, PDO::PARAM_STR);
$sentencia->bindParam('pass', $password, PDO::PARAM_STR);

//Ejecutar la consulta
$sentencia->execute();

//, array(
//    array("email", $email, 'string'),
//    array("pass", $password, 'string'),
//    array("admin", $esAdmin, 'int')
//));

/*
echo "Nombre completo: " . $nombreUsuario . "<br/>";
echo "Email: " . $email . "<br/>";
echo "Password: " . $password . "<br/>";
echo "Administrador: " . $esAdmin . "<br/>";
 * 
 * */
//$smarty->display('index.tpl');


?>