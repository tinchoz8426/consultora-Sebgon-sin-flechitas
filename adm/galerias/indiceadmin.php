<html>
<head>
<title>ABM de Contenido</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php include "estilos.php"; ?>

</head>
<?php include "opciones.php"; ?>

<div class="container">
<div class="tools">
<?php include "filtrocompacto.php"; ?>
</div>
<div class="caja-contenido">
<?php
	if (!$viewart) {
	include "managearticulos.php";								
	} 
	else 
	{
	
	} 
?>
</div>
</div>
</body>
</html>
