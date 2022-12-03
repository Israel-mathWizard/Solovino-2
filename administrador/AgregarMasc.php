<?php
require('../conexion.php');

$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    if(!empty($_FILES["foto"]["name"])) {

        $status = 'error';
        $fileName = basename($_FILES["foto"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
          
        $allowTypes = array('jpg','png','jpeg'); 
        if(in_array($fileType, $allowTypes)){ 
            $imagen = $_FILES['foto']['tmp_name']; 
            $foto = addslashes(file_get_contents($imagen));
	
	$nombre= $_POST['nombre'];     
    $carac=$_POST['carac'];
    $genero=$_POST['genero'];
    $edad = $_POST['edad'];
    $tamanio=$_POST['tamanio'];
    $tipomasc=$_POST['tipomasc'];
    $ubi=$_POST['ubi'];
    
    
	$insertar="INSERT INTO mascotas(NombreMasc,Caracteristicas,Genero,Edad,Tamanio,TipoMasc,UbicacionAdopc,Foto,created) VALUES('$nombre','$carac','$genero', '$edad', '$tamanio', '$tipomasc', '$ubi', '$foto', NOW())" or die("error".mysqli_errno($db_conectar));

	$result=mysqli_query($db_conectar,$insertar);
    if($result== TRUE){
		$status = 'success'; 
        //echo'File uploaded successfully.';
    	header('Location: Nueva-mascota.php');
			
	}else{

		echo 'No se pudo insertar los datos' . $db_conectar->error;
	}
  }else{
    echo 'Introducir solo imagenes con formato JPG, JPEG, PNG.';
   }
  }else{ 
        echo'Please select an image file to upload.'; 
    } 
    $db_conectar->close();
} 

?>