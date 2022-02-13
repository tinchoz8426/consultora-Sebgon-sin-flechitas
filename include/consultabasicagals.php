
<?php
include ("include/openbase.php");
if (!$filtro){ $queEmp = "SELECT * FROM pautas  ORDER BY FECHA desc";} else {echo "buscando :".$filtro."<br>" ;$queEmp = "SELECT * FROM album WHERE  CONCAT(TITULO,SUBTITULO,AUTOR,CATEGORIA) regexp '".$filtro."' ORDER BY FECHA desc";}
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
?>


