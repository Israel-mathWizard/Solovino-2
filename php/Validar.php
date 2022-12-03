<?php
    require('../conexion.php');
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    //conectar a base de datos
    $consulta="SELECT * FROM usuarios WHERE Email='$Email' and Password ='$Password'";
 
    $Result=mysqli_query($db_conectar, $consulta);

    $filas=mysqli_num_rows($Result);

        if ($filas>0) {
             // inicio de sesion..
            if($Email==='israelrh78@gmail.com' || $Email==='Yazzmintrejo17@gmail.com'){

                session_start();
            $_SESSION['Email']=$Email;
            header("location:../administrador/CatalogoAdm.php");
        }else{
             session_start();
            $_SESSION['Email']=$Email;
            header("location:../DentroIndex.html");
        }
        // alerta de usuario ou contraseña no valido
         echo '<script language="javascript">alert("Error de autentificacion");window.location.href="../Login.html"</script>';
        }
    

    mysqli_free_result($Result);
    mysqli_close($db_conectar);

?>	                    