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

<?php include "../vars.php"; ?>
<?php include "estilos.php"; ?>
<?php include "opciones.php"; ?>
<?php include "../../include/openbase.php"; ?>
<br>

<?php
$state = false;
if ($_POST['action'] == "add") { 

$fechayhora=$_POST['ANIOFECHA']."-".$_POST['MESFECHA']."-".$_POST['DIAFECHA']." ".$_POST['HORA'];
$que = "INSERT INTO busquedas (ZONA,LOCALIDAD,TITULO, SUBTITULO, CUERPO, AUTOR, FECHA, CATEGORIA, SECCION) ";
$que.= "VALUES ('".$_POST['ZONA']."','".$_POST['LOCALIDAD']."','".$_POST['TITULO']."','".$_POST['SUBTITULO']."', '".html_entity_decode($_POST['CUERPO'])."', '".$_POST['AUTOR']."','".$fechayhora."','".$_POST['CATEGORIA']."','".$_POST['SECC']."') ";
$res = mysql_query($que, $conexion) or die(mysql_error());
$state = true;

} 
if($state === false)
{
echo '<div class="marco-formulario">';
include "basic.php"; 
 echo '</div>'; 
}

?>
