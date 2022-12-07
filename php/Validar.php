<?php
    require('../conexion.php');
    $Nombre=$_POST['Nombre'];
    $Password=$_POST['Password'];

    //conectar a base de datos
    $consulta="SELECT * FROM usuarios WHERE Nombre='$Nombre' and Password ='$Password'";
 
    $Result=mysqli_query($db_conectar, $consulta);

    $filas=mysqli_num_rows($Result);

        if ($filas>0) {
             // inicio de sesion..
            if($Nombre==='Admin'){

                session_start();
            $_SESSION['Nombre']=$Nombre;
            header("location:../administrador/CatalogoAdm.php");
        }else{
             session_start();
             $_SESSION['Nombre']=$Nombre;
           header("location:../DentroIndex.html");
        }
        // alerta de usuario ou contraseña no valido
         echo '<script language="javascript">alert("Error de autentificacion");window.location.href="../Login.html"</script>';
        }
    

    mysqli_free_result($Result);
    mysqli_close($db_conectar);

?>	                    