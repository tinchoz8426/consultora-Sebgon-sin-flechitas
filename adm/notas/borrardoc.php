<?php
include "../vars.php";
	include "../../include/openbase.php";
	include "../../include/consultafotos.php";
	$sSQL="Delete From fotos  where  IDEN=". $viewart;
			mysql_query($sSQL);
								
echo '<a href="indiceadmin.php">Registro Eliminado</a>';
?>