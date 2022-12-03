<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Nueva Mascota</title>
    <!-- font icons -->
    <link rel="stylesheet" href="./vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
    <link rel="stylesheet" href="../cssIs/leadmark.css">
    <link rel="stylesheet" href="../cssIs/NuevaMasc.css">
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
    <div id="NuevaMasc-container">
        <br><br><br>
    <div id="crear">

        <div id="titulo"><h3><center>"Nueva mascota"</center></h3></div>

        <form action="AgregarMasc.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="input-group">
                    <label for="nombre">Nombre:</label> 
                    <input  type="text" id="nombre" name="nombre" required>
            </div>
          </div>   

          <div class="row">
            <div class="input-group">
                    <label for="carac">Características:</label> 
                    <input  type="text" id="carac" name="carac" required>
            </div>
          </div>   

          <div class="row">  
            <div class="column">
                <div class="input-group">
                    <label for="genero">Género:</label> 
                    <input  type="text" id="genero" name="genero" required>
                </div>
            </div>    
            <div class="column">
                <div class="input-group">
                    <label for="edad">Edad:</label> 
                    <input  type="text" id="edad" name="edad" required>
                </div>
            </div>
            <div class="column">
                <div class="input-group">
                    <label for="tamanio">Tamaño:</label>
                    <input  type="text" id="tamanio" name="tamanio" required>
                </div>
            </div>
          </div>       

          <div class="row">  
            <div id="ubi">
                    <label for="ubi">Ubicación de adopción</label> 
                    <textarea  type="text" id="ubi" name="ubi" required></textarea>
                </div>
          </div> 

          <div class="row"> 
            <div class="column2">
                <div id="adjunt">
                    <label for="foto">Adjuntar fotografías:</label> 
                    <input  type="file" id="foto" name="foto" required>
                </div>
            </div>
                <div class="column2">
                  <div id="tipoMasc">
                    <label for="tipomasc">Tipo de mascota:</label>
                        <select name="tipomasc" id="tipomasc" required>
                          <option disabled selected hidden>Seleccionar</option>
                          <option value="perro">Perro</option>
                          <option value="gato">Gato</option>
                        </select>
                  </div>  
                </div>
            </div> 
            
                <div id="btn-agregar">    
                    <input type="submit" name="submit" value="Agregar">
                </div>
                                
        </form>
      </div>   
   </div>
</div>
    <footer></footer>
    
    <!-- End of portfolio section -->
    <!-- core  -->

</body>
</html>