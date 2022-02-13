<?php
include "../vars.php";
	include "../../include/openbase.php";
	$sSQL="Delete From demo  where  IDEN=". $viewart;
			mysql_query($sSQL);
								
echo '<a href="indiceadmin.php">Registro Eliminado</a>';
?>