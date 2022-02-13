<?php
include "include/openbase.php";
$que = "INSERT INTO postulantes (nombre, apellido, cargo, direccion, ciudad, email) ";
$que.= "VALUES ('".$_POST['nombre']."','".$_POST['apellido']."', '".html_entity_decode($_POST['cargo'])."', '".$_POST['direccion']."','".$_POST['ciudad']."','".$_POST['email']."') ";
$res = mysql_query($que, $conexion) or die(mysql_error());
?>