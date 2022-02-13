
<?php

if (!$filtro){ $queEmp = "SELECT * FROM fotos  WHERE  NOTICIA regexp '".$viewart."' ORDER BY FECHA desc";} else {echo "buscando :".$filtro."<br>" ;$queEmp = "SELECT * FROM fotos WHERE  CONCAT(TITULO,SUBTITULO,AUTOR,CATEGORIA) regexp '".$filtro."' ORDER BY FECHA desc";}
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
?>


