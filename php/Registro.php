<?php
//Se incluye la conexion a la base de datos

require('../conexion.php');

//Recibe los datos del formulario.
        $Nombre = $_POST['Nombre'];
        $Direccion = $_POST['Direccion'];
        $Telefono = $_POST['Telefono'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

//
$sql="INSERT INTO usuarios(Nombre, Direccion, Telefono, Email, Password)
VALUES('$Nombre', '$Direccion', '$Telefono', '$Email', '$Password')";

$Result=mysqli_query($db_conectar, $sql);

if ($Result== true) {
      // inicio de sesion..
     header("location:../Login.html");
 } else {
       // alerta de usuario o contraseña no valido
      echo '<script language="javascript">alert("Error de registro");window.location.href=""</script>';
 }
 mysqli_close($db_conectar);
?>