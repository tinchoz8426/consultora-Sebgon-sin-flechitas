<?php include "../vars.php"; ?>
<?php include "estilos.php"; ?>
<?php include "opciones.php"; ?>
<div class="container">
<?php
$state = false;
if ($_POST['action'] == "add") { 
include "../consultabasica.php";
$fechayhora=$_POST['ANIOFECHA']."-".$_POST['MESFECHA']."-".$_POST['DIAFECHA']." ".$_POST['HORA'];
$que = "INSERT INTO album (TITULO, SUBTITULO, AUTOR, FECHA, CATEGORIA, SECCION) ";
$que.= "VALUES ('".$_POST['TITULO']."','".$_POST['SUBTITULO']."' , '".$_POST['AUTOR']."','".$fechayhora."','".$_POST['CATEGORIA']."','".$_POST['SECC']."') ";
$res = mysql_query($que, $conexion) or die(mysql_error());
$state = true;
include "indiceadmins.php";
} 
if($state === false)
{
echo '<div class="marco-formulario">';
include "basic.php"; 
 echo '</div>'; 
}

?>
</div>