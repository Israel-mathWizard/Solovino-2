<?php
/*mantener la sesion activa nota:pegar en cada pagina que este dentro del inicio de sesion*/
session_start();
error_reporting(0);
$_SESSION['Email'];
$vsesion = $_SESSION['Email'];
if ($vsesion == null || $vsesion = '') {
	/*alerta de no inicio de sesion*/
	echo '<script language="javascript">alert("Des iniciar sesion");window.location.href="index.html"</script>';
	
}
?>