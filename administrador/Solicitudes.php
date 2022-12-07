    <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Solicitudes</title>
    <!-- font icons -->
    <link rel="stylesheet" href="./vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="../cssIs/leadmark.css">
    <link rel="stylesheet" href="../cssIs/Solicitudes.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Menu de navegacion -->
    <nav class="navbar custom-navbar navbar-expand-md fixed-top" style="background-color: #ABCEB4; height: 75px;" data-spy="affix" data-offset-top="10">
        <div class="container">
            <div></div>
            <nav class="Menu">
             <!--<a class="navbar-brand" href="../index.html">
                <img src="../imgs/Logo.ico" alt="Huellita, logotipo">
            </a> -->
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto"><!-- Mantiene los botones Inicio y Mi cuenta en linea-->
                    <li class="nav-item">
                        <a href="" class="ml-4 nav-link btn btns-primary btn-sm rounded">Mi cuenta</a>
                        <ul >
                            <li><a href="../php/Destruir_Sesion.php"><b>Cerrar Sesión</b> </a></li>
                     </ul>
                    </li>
                   
                </ul>
            </div></nav>
        </div>
    </nav>
    <!-- Portfolio Section -->
    <div class="flex-container">
    <div class="sidebar"> 
        <br><br><br><br>
            <ul>
                <li>&#9776 Menú</li>
                <li><a class="btn-menu" type="button" href="./CatalogoAdm.php">Catálogo</a></li>
                <li><a class="btn-menu" type="button" href="./Solicitudes.php">Solicitudes</a></li>
            </ul>            
         
    </div>
    <div id="solicitudes-container">
    <div><h4 style="color: black; font-size: 30px;"><center>"Estatus de adopción"</center></h4></div><br>
    <div id="tabla">
    <table border="1">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo electrónico</th>
            <th>¿Por qué quieres adoptar?</th>
            <th>¿Dónde y con quién vivirá?</th>
            <th>Nombre de la mascota</th>
            <th>Estatus</th>
        </tr>
    </thead>

    <?php
require('../conexion.php');
$consulta="SELECT IdAdopt, NombreAdopt, TelefonoAdopt, EmailAdopt, MotivoAdopc, DondeVivira, NombreMasc, IdMasc, Estatus FROM adoptador a INNER JOIN mascotas m ON a.IdAdopt = m.adoptador_IdAdopt";
$resultado=mysqli_query($db_conectar, $consulta);
while ($row=mysqli_fetch_array($resultado)){ 
if($row['Estatus']!='Aceptado'){
    ?> 
    <tr>
        <th ><?php echo $row['NombreAdopt']; ?></th>
        <th ><?php echo $row['TelefonoAdopt']; ?></th>
        <th ><?php echo $row['EmailAdopt']; ?></th>
        <th ><?php echo $row['MotivoAdopc']; ?></th>
        <th ><?php echo $row['DondeVivira']; ?></th>
        <th ><?php echo $row['NombreMasc']; ?></th>
        <th ><div><a href="cambiarEstatus.php?id=<?php echo md5($row['IdMasc']);?>&name=paloma">
                <img src="../imgs/right-icon.png" alt="palomita">
            </a></div><div><a href="cambiarEstatus.php?id=<?php echo md5($row['IdMasc']);?>&name=tache">
                <img src="../imgs/wrong-icon.png" alt="tache">
            </a></div></th>
    </tr>
    <?php }} 
    $db_conectar->close();
    ?>
    </table>
    </div>
</div>
</div>
    <footer></footer>
    
    <!-- End of portfolio section -->
	<!-- core  -->

</body>
</html>