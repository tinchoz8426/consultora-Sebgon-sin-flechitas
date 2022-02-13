
<html>
<head>
<title></title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

</head>

<?php include "estilos.php"; ?>
<?php include "opciones.php"; ?>
<div class="container">
<?php
include "../vars.php";

include "../consultabusquedas.php";
include "../../include/funciones.php";
$fechayhora=$_POST['ANIOFECHA']."-".$_POST['MESFECHA']."-".$_POST['DIAFECHA']." ".$_POST['HORA'];
$state = false;
	if ($_POST['action'] == "add") { 
	$grab1="UPDATE  busquedas  SET  ZONA='" .$_POST['ZONA']. "', LOCALIDAD='" .$_POST['LOCALIDAD']. "', CUERPO='" .$_POST['CUERPO']. "',  SUBTITULO='" .$_POST['SUBTITULO']. "', TITULO ='" .$_POST['TITULO']. "' , AUTOR ='" .$_POST['AUTOR']. "' , CATEGORIA ='" .$_POST['CATEGORIA']. "' , FECHA ='" .$fechayhora. "' , SECCION ='" .$_POST['SECC']. "' where  IDEN=". $viewart;
	
	$grab2="UPDATE  busquedas  SET  ZONA='" .$_POST['ZONA']. "', LOCALIDAD='" .$_POST['LOCALIDAD']. "', CUERPO='" .$_POST['CUERPO']. "',  SUBTITULO='" .$_POST['SUBTITULO']. "', TITULO ='" .$_POST['TITULO']. "' , AUTOR ='" .$_POST['AUTOR']. "' , CATEGORIA ='" .$_POST['CATEGORIA']. "' , SECCION ='" .$_POST['SECC']. "' where  IDEN=". $viewart;

	if ($_POST['CAMBIAFECHA']=="SI"){$sSQL=$grab1;} else {$sSQL=$grab2;}
	mysql_query($sSQL);
	$state = true;
	echo '<a href="indiceadmin.php">Registros modificados</a>';
	ECHO $_POST['CAMBIAFECHA']." ".$fechayhora;
	}

if($state === false)
{
  
while ($rowEmp = mysql_fetch_assoc($resEmp)) {
														
																			
														
																
																if (trim($rowEmp['IDEN'])==trim($viewart)){
																$tituloamodificar=$rowEmp['TITULO'];													
																$subtituloamodificar=$rowEmp['SUBTITULO'];
																$cuerpoamodificar=TRIM($rowEmp['CUERPO']);
																$firmaamodificar=$rowEmp['AUTOR'];
																$categoriaamodificar=$rowEmp['CATEGORIA'];
																$fechaamodificar=$rowEmp['FECHA'];
																$seccionamodificar=$rowEmp['SECCION'];
																$localidad=$rowEmp['LOCALIDAD'];
																$zona=$rowEmp['ZONA'];
																
																}
														
														}

$zona_nombre=zona($zona);


include "basic.php"; 


}

?>
</div>