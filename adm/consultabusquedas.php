<?php
include ("../../include/openbase.php");
if (!$filtro){ $queEmp = "SELECT * FROM busquedas  ORDER BY FECHA desc";} else {echo "buscando :".$filtro."<br>" ;$queEmp = "SELECT * FROM busquedas WHERE  CONCAT(TITULO,SUBTITULO,AUTOR,CATEGORIA) regexp '".$filtro."' ORDER BY FECHA desc";}
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
@mysql_query("SET NAMES 'utf8'");
?>