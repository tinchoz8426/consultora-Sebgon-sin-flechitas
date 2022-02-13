<?php
include "../vars.php";
	include "../../include/openbase.php";
	$sSQL="Delete From busquedas  where  IDEN=". $viewart;
			mysql_query($sSQL);
								
echo '<a href="indiceadmin.php">Registro Eliminado</a>';
?>