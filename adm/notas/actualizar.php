<?php include "estilos.php"; ?>
<?php include "opciones.php"; ?>
<div class="container">
<?php
include "../vars.php";
include "../consultabasicanotas.php";
$fechayhora=$_POST['ANIOFECHA']."-".$_POST['MESFECHA']."-".$_POST['DIAFECHA']." ".$_POST['HORA'];
$state = false;
	if ($_POST['action'] == "add") { 
	$grab1="UPDATE  demo  SET  CUERPO='" .$_POST['CUERPO']. "',  SUBTITULO='" .$_POST['SUBTITULO']. "', TITULO ='" .$_POST['TITULO']. "' , AUTOR ='" .$_POST['AUTOR']. "' , CATEGORIA ='" .$_POST['CATEGORIA']. "' , FECHA ='" .$fechayhora. "' , SECCION ='" .$_POST['SECC']. "' where  IDEN=". $viewart;
	$grab2="UPDATE  demo  SET  CUERPO='" .$_POST['CUERPO']. "',  SUBTITULO='" .$_POST['SUBTITULO']. "', TITULO ='" .$_POST['TITULO']. "' , AUTOR ='" .$_POST['AUTOR']. "' , CATEGORIA ='" .$_POST['CATEGORIA']. "' , SECCION ='" .$_POST['SECC']. "' where  IDEN=". $viewart;

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
																
																}
														
														}

echo '<div class="marco-formulario">';
include "basic.php"; 
 echo '</div>'; 

}

?>
</div>