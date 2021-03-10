<?php
session_start();
$usuario = $_REQUEST["usuario"];
$password = $_REQUEST["password"];
if ( $usuario == "admin" && $password="1234") {
	$_SESSION["usuario_logeado"]="admin";
	header("Location: index.php"); 
} else {
	echo "credenciales no válidas";
}

?>