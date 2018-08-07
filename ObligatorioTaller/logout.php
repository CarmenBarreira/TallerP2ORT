<?php
session_start();

$_SESSION["usuario"] = NULL;
$_SESSION["mensaje"] = "Deslogueado correctamente";
header("Location: login.php");

?>
