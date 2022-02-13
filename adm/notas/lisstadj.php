<div class="container">;
<div class="titulos-columnas">
	Archivos incluidos en el documento
</div>
	<?php 
	include "../vars.php"; 
	 include "estilos.php";
	 
	
	include "../../include/openbase.php";
	include "../../include/consultafotosN.php";
	echo '<div class="caja-renglon">';
echo "Carpeta : ".$viewart2." (".$totEmp." ) elementos"."<br>";
echo "</div>";
if ($totEmp> 0) {
while ($rowEmp = mysql_fetch_assoc($resEmp)) {
echo '<div class="caja-renglon">';
	echo  '<span class="lineas-contenido">'.$rowEmp['URL'].'</span>'."".'<span class="botones-contenido"> borrar </a></span><br>';
	print base64_decode($icons['ppt']);	
echo "</div>";	
	}
}
	?>
</div>