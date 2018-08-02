<?php
require_once("seguridad.php");

$nombreUsuario = xss_clean($_GET['txtNombreUsuario']);
$email = $_GET['txtEmailUsuario'];
$password = $_GET['txtPassword'];
$esAdmin = $_GET['chkAdmin'];

echo "Nombre completo: " . $nombreUsuario . "<br/>";
echo "Email: " . $email . "<br/>";
echo "Password: " . $password . "<br/>";
echo "Administrador: " . $esAdmin . "<br/>";

?>