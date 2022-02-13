<?php
//include "include/openbase.php";
include "adm/consultabusquedas.php";
include "include/funciones.php";
?>


<?php
if ($totEmp> 0) {
while ($rowEmp = mysql_fetch_assoc($resEmp)) {
if (trim($rowEmp['IDEN'])==trim($viewart)){
?>



<div id="splash">

						    <div class="content">

							<h2 class="title">Búsqueda vigente<?php include "funciones/status.php"; ?></h2>

						    </div>

</div>







      
   <div class="box-content padded">

<?php
$rowEmp['CUERPO']=$rowEmp['CUERPO'];

$rowEmp['TITULO']=$rowEmp['TITULO'];
echo '<div class="page-header">';
echo '<span class="lineas-contenido"> Referencia : '.$rowEmp['AUTOR']." </span><br>";
echo '<span class="lineas-contenido"> Zona : '.zona($rowEmp['ZONA'])." </span><br>";
echo '<span class="lineas-contenido"> Localidad : '.$rowEmp['LOCALIDAD']." </span>";
echo '<h3>'.$rowEmp['TITULO']. '  <br><a href="/cargacv.php?codigodereferencia='.$rowEmp['AUTOR'].'"span class="label label-green">¡postulate!</span></a></h3>';
echo '<span class="lineas-contenido">'.substr($rowEmp['CUERPO'],0,10000). " </span> ";

echo '</div>';
}
}
}
?>