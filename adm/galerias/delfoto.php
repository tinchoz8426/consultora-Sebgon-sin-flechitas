	<?php 
	
	include "../vars.php"; 
	 include "estilos.php";
	include "opciones.php"; 
	echo '<div class="container">';
	include "../../include/openbase.php";
	include "../../include/consultafotos.php";
	echo '<div class="caja-renglon">';
echo "Carpeta : ".$viewart2." (".$totEmp." ) elementos"."<br>";
echo "</div>";
if ($totEmp> 0) {
while ($rowEmp = mysql_fetch_assoc($resEmp)) {
echo '<div class="caja-renglon">';
	echo  '<span class="lineas-contenido">'.$rowEmp['URL'].'</span>'."<a href='borrardoc.php?viewart=".$rowEmp['IDEN']."'>".'<span class="botones-contenido"> borrar </a></span><br>';	
echo "</div>";	
	}
}
	?>
</div>