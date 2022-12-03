<?php 
// Conexíon a la base de datos , parámetros correspondientes al sistema.
$host="localhost";
$username="root";   
$password="";
$database="solovino";
$db_conectar=mysqli_connect($host,$username,$password,$database)or die("ERROR".mysqli_error($db_conectar));
if (mysqli_connect_error()){
	echo "No se puede conectar , por favor vuelva a intentarlo";
	exit();
}
?>
