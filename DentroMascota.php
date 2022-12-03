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
            <a class="navbar-brand" href="Dentroindex.html">
                <img src="./imgs/Logo.ico" alt="">
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
                        <ul>
                            <li ><a   href="DentroEstatus.php"><b>Estatus</b> </a></li>
                            <li><a href="php/Destruir_Sesion.php"><b>Cerrar Sesión</b> </a></li>
                     </ul>                           
                    </li>
                   
                </ul>
            </div></nav>
        </div>
    </nav>
 <?php 
    require('./conexion.php');
    $id = $_GET['id'];
$mostrar = "SELECT * FROM mascotas WHERE md5(IdMasc) = '$id'";
$result = $db_conectar->query($mostrar);
$row = $result->fetch_assoc();

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
            echo "Datos de adoptador agregados";
           header('location:DentroCatalogo.php');
    }else{

        echo "Ooppss no se pueden agregar datos" . $db_conectar->error;
        //header('location:DentroCatalogo.php');
    }
  }
}
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
                        
    <div><a onclick="window.modal1.showModal();"><input  type="button" id="btn_adoptar" value="Adóptame"></a></div>
  
    <dialog id="modal1">  
     <img class="close" onclick="window.modal1.close();" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZNJREFUSEu9lY0xBGEQRN9lIANEgAiQAREgAkSCCBABIkAEyIAMZEA99c3V7Nz+nCpnqrbqdneue7pnvtkZK47ZivFZhuAY2AW222VNr+26Bx7GihwjOAAugI0Jle/AOSDZQgwRXAKnLfsD8P6pVe1j1ewBZ8B6yzNHok70EWRw/+D9WEiiUuOqkc7zK4G23LW3O6niqVlQ0UtLOsx2VQL9VHKtfA34LCz1WSgRYzNyM4HTcg3oeW7sDbAF7CcSwR+bwpNEHAXOVWQCgY5K9QLZXAkcTUkMwbXlrTU71IWKW8CCO+dAAIGq95UkpqiCx3N7IZY4HYKvVl3fZGUS0/rAw6kOTgabIghbBAq7auN9N0gwZlH2XJDck0wS46pCf3csGmpybaj/q41fqslxyDpzDEgcqyGAoieq/pmWFqNjas5fHLTOOfr3VaGKvOw8OC6wsfjVsgugTKJt3j+Xde1HSPBYKwubtE5RrdKmCxz7fkiFnkv0qw9OBpPIy0ly/uMkO0GC9gIHwDLf5IkWjL9eOcE3/8xyGRxL0ikAAAAASUVORK5CYII="/>
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
 
   </dialog>
  <!-- Contact Section -->
  <div class="f2">
  </div>
 <!-- End of Page Footer -->  
</body>
</html>