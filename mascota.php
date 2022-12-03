<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Información de Mascota</title>
    <!-- font icons -->
    <link rel="stylesheet" href="./vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
    <link rel="stylesheet" href="./css/leadmark2.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Menu de navegacion -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="./imgs/Logo.ico" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                    <li class="nav-item">
                        <a href="Catalogo.php" class="ml-4 nav-link btn btn-primary btn-sm rounded">Catálogo</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="Login.html" class="ml-4 nav-link btn btns-primary btn-sm rounded">Mi cuenta</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
 <?php 
    require('conexion.php');
    $id = $_GET['id'];
$mostrar = "SELECT * FROM mascotas WHERE md5(IdMasc) = '$id'";
$result = $db_conectar->query($mostrar);
$row = $result->fetch_assoc();
 ?>

    <div class="mascota">
        <div class="foto">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Foto']); ?>" class="img-fluid" alt=""/>
        </div>

        <div class="info">
            <div class="datos">
                <h4><b>Nombre:</b> <?php echo $row['NombreMasc'];?></h4>
                <h4><b>Caracteristicas: </b><?php echo $row['Caracteristicas'];?></h4>
                <h4><b>Género:</b><?php echo $row['Genero'];?></h4>
                <h4><b>Edad:</b><?php echo $row['Edad'];?></h4>
                <h4><b>Tamaño:</b><?php echo $row['Tamanio'];?></h4>
                <h4><b>Ubicación de adopción:</b> <br><?php echo $row['UbicacionAdopc'];?></h4>
            </div>
            
        </div>
    </div>
  <!-- Contact Section -->

  <div class="f2">
  </div>
 <!-- End of Page Footer -->  
</body>
</html>