<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Modal Encuesta</title>
    <!-- font icons -->
    <link rel="stylesheet" href="./vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">          
      
    <link rel="stylesheet" href="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css">  
      
    
    <link rel="stylesheet" href="./css/leadmark2.css">
</head>
<body>
<?php
require('./conexion.php');
$id = $_GET['id'];

if(isset($_POST['submit'])){

        $id=$_GET['id'];
        $nombre= $_POST['nombre'];     
        $tele=$_POST['tele'];
        $email=$_POST['email'];
        $porqueadop = $_POST['porqueadop'];     
        $dondevivi=$_POST['dondevivi'];    
    
    $insertar="INSERT INTO adoptador(NombreAdopt,TelefonoAdopt,EmailAdopt,MotivoAdopc,DondeVivira) VALUES('$nombre','$tele','$email', '$porqueadop', '$dondevivi')" or die("error".mysqli_errno($db_conectar));
    $result=mysqli_query($db_conectar,$insertar);
    if($result== TRUE){

        $getIdAdopt=$db_conectar->query("SELECT IdAdopt FROM adoptador ORDER BY IdAdopt DESC LIMIT 1");
        $idAdopt= $getIdAdopt->fetch_assoc();
        $idado = $idAdopt['IdAdopt'];

        $insertIdAdopt="UPDATE mascotas SET adoptador_IdAdopt = '$idado' WHERE md5(IdMasc) = '$id'";

        if($db_conectar->query($insertIdAdopt)== TRUE){
            
            header('location:DentroCatalogo.php');
    }else{

        echo "Ooppss no se pueden agregar datos" . $db_conectar->error;
        header('location:DentroCatalogo.php');
    }
  }
}
mysqli_close($db_conectar);
?>
<section id="portfolio" class="section portfolio-section">
        <div class="container">


    <div id="dialog">
     <a href="DentroCatalogo.php"><img class="close" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZNJREFUSEu9lY0xBGEQRN9lIANEgAiQAREgAkSCCBABIkAEyIAMZEA99c3V7Nz+nCpnqrbqdneue7pnvtkZK47ZivFZhuAY2AW222VNr+26Bx7GihwjOAAugI0Jle/AOSDZQgwRXAKnLfsD8P6pVe1j1ewBZ8B6yzNHok70EWRw/+D9WEiiUuOqkc7zK4G23LW3O6niqVlQ0UtLOsx2VQL9VHKtfA34LCz1WSgRYzNyM4HTcg3oeW7sDbAF7CcSwR+bwpNEHAXOVWQCgY5K9QLZXAkcTUkMwbXlrTU71IWKW8CCO+dAAIGq95UkpqiCx3N7IZY4HYKvVl3fZGUS0/rAw6kOTgabIghbBAq7auN9N0gwZlH2XJDck0wS46pCf3csGmpybaj/q41fqslxyDpzDEgcqyGAoieq/pmWFqNjas5fHLTOOfr3VaGKvOw8OC6wsfjVsgugTKJt3j+Xde1HSPBYKwubtE5RrdKmCxz7fkiFnkv0qw9OBpPIy0ly/uMkO0GC9gIHwDLf5IkWjL9eOcE3/8xyGRxL0ikAAAAASUVORK5CYII="/></a>
     <h2><b>CONTACTA AL PROTECTOR</b></h2>
       <p><b>• Llena el formulario.</b></p>
       <p><b>• El protector recibirá tu mensaje de adopción.</b></p>
       <p><b>• Arreglen una cita para conocer al adoptable, revisa tu estatus en el Catálogo de adopción.</b></p>

       <form action="" method="POST">
             <table border="0">
             <tr>             
                  <td> <input  type="text"  id="nombre" name="nombre" placeholder="Nombre completo"  required></td> 
          </tr>
          <tr>
                 
             <td> <input  type="text"  id="tele" name="tele" placeholder="Teléfono"  required></td> 
        </tr>
           <tr>             
             <td> <input  type="email"  id="email" name="email" placeholder="Correo electrónico"  required></td> 
          </tr>
          <tr>
        
              <td> <input  class="lugar" type="text"  id="porqueadop" name="porqueadop" placeholder="¿Por qué quieres adoptar?"  required></td> 
         </tr>
          <tr>
        
              <td> <input class="lugar" type="text"  id="dondevivi" name="dondevivi" placeholder="¿Dónde y con quiénes vivirá la mascota?"  required></td> 
         </tr>                
         </table>
                <div>    
                    <input type="submit" name="submit" value="ADOPTAR">
                </div>
      </form>   
 
   </div>

  </div>
</section>
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