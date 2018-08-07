<?php
require_once 'databaseController.php';


$usuario = $_POST['txtUsuario'];
$clave = $_POST['txtClave'];


$login = loginUser($usuario, $clave);

if($login!=null){
    header("Location: privada.php");
} 
else{
    $_SESSION['mensaje'] = "Usuario y clave incorrectos";
    header("Location:login.php?err=1");
}

?>
