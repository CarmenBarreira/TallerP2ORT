<?php
session_start();

$_SESSION['entro'] = false;

header("Location: login.php");

?>
