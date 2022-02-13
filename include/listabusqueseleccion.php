<?php

include "include/openbase.php";
include "adm/consultabusquedas.php";
$limite=0;
if ($totEmp> 0) {
while ($rowEmp = mysql_fetch_assoc($resEmp)) {
if ($rowEmp['SECCION']=="PORT") {
$limite=$limite+1;
$detallebusqueda=utf8_encode($rowEmp['TITULO']);
//echo '<span class="lineas-contenido"> Referencia : '.$rowEmp['AUTOR']." </span>";
echo '<div class="bgbtm">' .' <a href="visorbusquedas.php?viewart='.$rowEmp['IDEN'].'&viewart2='.$detallebusqueda.'">'.substr($rowEmp['TITULO'],0,100). "</a> (";  include 'funciones/status2.php'; echo ")</div>";
//echo '<span class="lineas-contenido">'.substr($rowEmp['CUERPO'],0,100). " </span> ";
echo '<br>';

if ($limite > 50){break;}}
}
}
?>
 