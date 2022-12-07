<?php
require('../conexion.php');
	$id=$_GET['id'];
	$name=$_GET['name'];

if ($name===paloma) {
	$actua="UPDATE mascotas SET Estatus = 'Aceptado' WHERE md5(IdMasc) = '$id'";
	if ($db_conectar->query($actua))header('location: Solicitudes.php');
}elseif ($name===tache) {
$actua="UPDATE mascotas SET Estatus = 'Rechazado' WHERE md5(IdMasc) = '$id'";
	if ($db_conectar->query($actua))header('location: Solicitudes.php');
	}
mysqli_close($db_conectar);
?>