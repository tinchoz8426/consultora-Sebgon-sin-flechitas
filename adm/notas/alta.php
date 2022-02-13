<?php include "../vars.php"; ?>
<?php include "estilos.php"; ?>
<?php include "opciones.php"; ?>
<div class="container">
<?php
$state = false;
if ($_POST['action'] == "add") { 
include "../../include/openbase.php";
$fechayhora=$_POST['ANIOFECHA']."-".$_POST['MESFECHA']."-".$_POST['DIAFECHA']." ".$_POST['HORA'];
$que = "INSERT INTO demo (TITULO, SUBTITULO, CUERPO, AUTOR, FECHA, CATEGORIA, SECCION) ";
$que.= "VALUES ('".$_POST['TITULO']."','".$_POST['SUBTITULO']."', '".html_entity_decode($_POST['CUERPO'])."', '".$_POST['AUTOR']."','".$fechayhora."','".$_POST['CATEGORIA']."','".$_POST['SECC']."') ";
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
</div>