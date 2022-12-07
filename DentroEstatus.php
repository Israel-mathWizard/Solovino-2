<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Estatus de adopción</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="./vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="./css/Estatus.css">
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
     <?php 
    session_start();
    $NM=$_SESSION['Nombre'];
    ?>

    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="DentroIndex.html">
                <img src="./imgs/Logo.ico" alt="">
            </a>
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="Menu">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ml-auto">                     
                    <li class="nav-item">
                        <a href="DentroCatalogo.php" class="ml-4 nav-link btn btn-primary btn-sm rounded">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="ml-4 nav-link btn btns-primary btn-sm rounded">Mi cuenta</a>
                        <ul >
                            <li ><a  href=""><b>Estatus</b> </a></li>
                            <li><a href="php/Destruir_Sesion.php"><b>Cerrar Sesión</b> </a></li>
                     </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
<h1 class="titulo" >“Estatus de adopción”</h1>
<div id="main-container">
    <table border="1">
        <thead>

        <tr>
            <th>Nombre de la mascota</th>
            <th>Características</th>
            <th>Género</th>
            <th>Edad</th>
            <th>Tamaño</th>
            <th>Estatus</th>

        </tr>
        
    </thead>
<?php
require('./conexion.php');
$consulta="SELECT NombreMasc, Caracteristicas, Genero, Edad, Tamanio, Estatus FROM adoptador a INNER JOIN mascotas m ON a.IdAdopt = m.adoptador_IdAdopt WHERE a.NombreAdopt = ?";
$stmt = $db_conectar->prepare($consulta);
$stmt->bind_param("s", $NM);
$stmt->execute();
$result = $stmt->get_result();
while ($row=$result->fetch_assoc()){?>
    <tr>
        <th id=""><?php echo $row['NombreMasc']; ?></th>
        <th id=""><?php echo $row['Caracteristicas']; ?></th>
        <th id=""><?php echo $row['Genero']; ?></th>
        <th id=""><?php echo $row['Edad']; ?></th>
        <th id=""><?php echo $row['Tamanio']; ?></th>
        <th id=""><?php echo $row['Estatus']; ?></th>
    </tr>
<?php } ?>
    </table>
</div>
    
<div class="f2">
</div>   

   
</body>
</html>