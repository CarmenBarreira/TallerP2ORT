<?php
session_start();

$usuario = $_POST['txtUsuario'];
$clave = $_POST['txtClave'];

if($usuario == "admin" && $clave == "1234"){
    $_SESSION['entro'] = true;
    setcookie("usuario",$usuario,time()+86400);
    header("Location: privada.php");
} 
else{
    $_SESSION['entro'] = false;
    $_SESSION['mensaje'] = "Usuario y clave incorrectos";
    header("Location: login.php");
}

?>
