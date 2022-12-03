<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Catálogo</title>
    <!-- font icons -->
    <link rel="stylesheet" href="./vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">	         
      
    <link rel="stylesheet" href="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css">  
      
    
	<link rel="stylesheet" href="./css/leadmark2.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Menu de navegacion -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="DentroIndex.html">
                <img src="./imgs/Logo.ico" alt="" >
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="Menu">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                    <li class="nav-item">
                        <a href="DentroIndex.html" class="ml-4 nav-link btn btn-primary btn-sm rounded">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="ml-4 nav-link btn btns-primary btn-sm rounded">Mi cuenta</a>
                        <ul >
                            <li ><a  href="DentroEstatus.php"><b>Estatus</b> </a></li>
                            <li><a href="php/Destruir_Sesion.php"><b>Cerrar Sesión</b> </a></li>
                     </ul>
                    </li>
                   
                </ul>
            </div></nav>
        </div>
    </nav> 
    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="title">CATÁLOGO</h1>
          <!--  <h1 class="subtitle">Adopta una mascota</h1> -->
        </div>
    </header>
    
    <!-- End Of Page Header -->
    <!-- Portfolio Section -->
    <section id="portfolio" class="section portfolio-section">
        <div class="container">
            <h6 class="section-title text-center">ENCUENTRA A TU AMIGO</h6>
            
            <h4 class="section-subtitle mb-5 text-center">Si deseas adoptar, ¡registrate!</h4>
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
            require('./conexion.php');
            $resul = $db_conectar->query("SELECT * FROM mascotas");  
                while ($datos = $resul->fetch_assoc()){
if ($datos['TipoMasc'] === 'perro') { ?>
                <div class="col-md-6 col-lg-4 web perro">
                    <div class="portfolio-item">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($datos['Foto']); ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates"/>
                        <div class="content-holder">
                            <div class="text-holder">
                                <h6 class="title"><?php echo $datos['NombreMasc']; ?></h6>
                                <ul class="navbar-nav ml-auto">                     
                                    <li class="nav-item">
                                        <a href="DentroMascota.php?id=<?php echo md5($datos['IdMasc']);?>" class="btn btn-primary rounded w-md mt-3">Conóceme</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="AgregarAdopt.php?id=<?php echo md5($datos['IdMasc']);?>" class="btn btns-primary rounded w-md mt-3">Adóptame</a>
                                        
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
                                        <a href="DentroMascota.php?id=<?php echo md5($datos['IdMasc']);?>" class="btn btn-primary rounded w-md mt-3">Conóceme</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="AgregarAdopt.php?id=<?php echo md5($datos['IdMasc']);?>" class="btn btns-primary rounded w-md mt-3">Adóptame</a>
                                        
                                    </li>
                                        
                                    </li>
                                </ul> 
                                   </div>
                        </div>
                    </div>                                                       
                </div> <?php ;
} 
} ?> 
                </div>
            </div>
         </section>
    <!-- End of portfolio section -->
    
    
    
	<!-- core  -->
    <script src="./vendors/jquery/jquery-3.4.1.js"></script>
    <script src="./vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="./vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="./vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="./js/leadmark.js"></script>
</body>

</html>