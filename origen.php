<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>origen</title>
</head>
<body>
	<?php 
require('./conexion.php');

	?>
<form>
	<a href="pruebas.php?id=<?php echo md5($row['IdMasc']); ?>"><input type="submit" value="ADOPTAR"></a>
</form>
</body>
</html>