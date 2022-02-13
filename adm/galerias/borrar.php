<?php
include "../vars.php";
	include "../consultabasica.php";
	$sSQL="Delete From album  where  IDEN=". $viewart;
			mysql_query($sSQL);
								
echo '<a href="indiceadmin.php">Registro Eliminado</a>';
?>