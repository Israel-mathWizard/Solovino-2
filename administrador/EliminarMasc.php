<?php 
require('../conexion.php');
$id = $_GET['id'];
$sql = "DELETE FROM mascotas WHERE md5(IdMasc) = '$id'";
	$ejecutaquery= $db_conectar->query($sql);
	if($ejecutaquery=== true){
		echo "Los datos se borraron correctamente";
		header("location:../administrador/CatalogoAdm.php");
		
	}else{
		echo "Ooops algo salió mal!    ".$db_conectar->error;

	}
?>