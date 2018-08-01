<?php
session_start();

$usuario = $_POST['txtUsuario'];
$clave = $_POST['txtClave'];

if($usuario == "admin" && $clave == "Pass1234"){
    $_SESSION['entro'] = true;
    $_SESSION['admin'] = true; //cambiar esto cuando haya metodo de saber admin
    setcookie("usuario",$usuario,time()+86400);
    header("Location: privada.php");
} 
elseif ($usuario == "user") {
    
    $_SESSION['entro'] = true;
    $_SESSION['admin'] = false; //cambiar esto cuando haya metodo de saber admin
    setcookie("usuario",$usuario,time()+86400);
    header("Location: privada.php");
    
}
else{
    $_SESSION['entro'] = false;
    $_SESSION['admin'] = false; //sacar tambien
    $_SESSION['mensaje'] = "Usuario y clave incorrectos";
    header("Location: login.php");
}

?>
