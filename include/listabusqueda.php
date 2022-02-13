<!--<?php
include "include/openbase.php";
include "adm/consultabusquedas.php";
include "include/funciones.php";
?>-->

<div id="splash">

						    <div class="content">

							<h2 class="title"><!--<?php echo $totEmp; ?>--> Búsquedas vigentes</h2>

						    </div>

</div>


<div class="box-content padded">


<?php
$limite=0;

if ($totEmp> 0) {
while ($rowEmp = mysql_fetch_assoc($resEmp)) {
$limite=$limite+1;
$rowEmp['TITULO']=$rowEmp['TITULO'];
$rowEmp['CUERPO']=$rowEmp['CUERPO'];
echo '<div class="page-header">';
echo '<span class="lineas-contenido"> Referencia : '.$rowEmp['AUTOR']." </span><br>";
echo '<span class="lineas-contenido"> Zona : '.zona($rowEmp['ZONA'])." </span>";
$titulo_busqueda = strtr($rowEmp['TITULO'], " ", "_");
//echo '<h4>  ' .' <a href="visorbusquedas.php?viewart='.$rowEmp['IDEN'].'&viewart2='.$rowEmp['TITULO'].'">'.substr($rowEmp['TITULO'],0,100). " </h4> </a>";
echo '<h4>  ' .' <a href="/'.$rowEmp['IDEN'].'/'.$titulo_busqueda.'">'.substr($rowEmp['TITULO'],0,100). " </h4> </a>";
//echo '<span class="lineas-contenido">'.substr($rowEmp['CUERPO'],0,100). " </span> ";


include "funciones/status2.php"; 

     

	  
echo '</div><hr class="divider">';
if ($limite > 50){break;}
}
}
?>


</div>