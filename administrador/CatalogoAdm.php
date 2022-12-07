<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Catálogo</title>
    <!-- font icons -->
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
    <link rel="stylesheet" href="../cssIs/leadmark.css">
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
    
    <div class="flex-container">
    <div class="sidebar"> 
        <br><br><br><br>
            <ul>
                <li>&#9776 Menú</li>
                <li><a class="btn-menu" type="button" href="./CatalogoAdm.php">Catálogo</a></li>
                <li><a class="btn-menu" type="button" href="./Solicitudes.php">Solicitudes</a></li>
            </ul>            
         
    </div>
    <section id="portfolio" class="section portfolio-section">
        <div class="container"><br>
            <div>
                <a id="btnAgregarMasc" href="./Nueva-mascota.php" type="button">Nueva mascota +</a>
            </div>
            <div class="filters">
                <a href="#" data-filter=".perro" class="active">
                  <b>Perros</b>  
                </a>
                <a href="#" data-filter=".gato">
                   <b>Gatos</b> 
                </a>
            

            </div>            
        <div class="portfolio-container">
        <?php
            require('../conexion.php');
            $resul = $db_conectar->query("SELECT * FROM mascotas");  
                while ($datos = $resul->fetch_assoc()){
if($datos['Estatus']!='Aceptado'){
if ($datos['TipoMasc'] === 'perro') { ?>
                <div class="col-md-6 col-lg-4 web perro">
                    <div class="portfolio-item">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($datos['Foto']); ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates"/>
                        <div class="content-holder">
                            <div class="text-holder">
                                <h6 class="title"><?php echo $datos['NombreMasc']; ?></h6>
                                <ul class="navbar-nav ml-auto">                     
                                    <li class="nav-item">
                                        <a href="EditarMasc.php?id=<?php echo md5($datos['IdMasc']);?>" class="btn btn-primary rounded w-md mt-3">Editar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="EliminarMasc.php?id=<?php echo md5($datos['IdMasc']);?>" class="btn btns-primary rounded w-md mt-3">Eliminar</a>
                                   
                                    </li>
                                </ul>
                            </div>
                        </div>   
                    </div>
                                  
                </div> <?php ;
} elseif ($datos['TipoMasc'] === 'gato') { ?>
    <div class="col-md-6 col-lg-4 web gato"> 
                    <div class="portfolio-item">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($datos['Foto']); ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates"/>
                        <div class="content-holder">
                            <div class="text-holder">
                                <h6 class="title"><?php echo $datos['NombreMasc']; ?></h6>
                                <ul class="navbar-nav ml-auto">                     
                                    <li class="nav-item">
                                        <a href="EditarMasc.php?id=<?php echo md5($datos['IdMasc']);?>" class="btn btn-primary rounded w-md mt-3">Editar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="EliminarMasc.php?id=<?php echo md5($datos['IdMasc']);?>" class="btn btns-primary rounded w-md mt-3">Eliminar</a>
                                    </li> 
                                </ul> 
                                   </div>
                        </div>
                    </div>                                                       
                </div> <?php ;
} 
}
} ?>
        </div> 
                         
    </div>              
    </section>
    </div>
    <footer></footer>
    
    <!-- End of portfolio section -->
    <!-- core  -->
    <script src="../vendors/jquery/jquery-3.4.1.js"></script>
    <script src="../vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="../vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="../vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="../js/leadmark.js"></script>

</body>
</html>