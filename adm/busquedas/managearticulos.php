<?php (include "../vars.php");?>
<?php (include "../../include/funciones.php");?>
<div class="col-lg-4 col-md-4">
<br>
</div>
<div class="col-lg-8 col-md-8">
<table id="example" class="display" style="width:100%">
<thead>
<tr>
<th>Acciones</th>
<th>Fecha</th>
<th>Referencia</th>
<th>Estado</th>
<th>Zona</th>
<th>Localidad</th>
<th>Post.</th>
</tr>
</thead>
<tbody>
<?php
include "../consultabusquedas.php";
if ($totEmp> 0) {
while ($rowEmp = mysql_fetch_assoc($resEmp)) {
$queEstadistica = "SELECT * FROM estadistica  WHERE  ARTICULO regexp '".$rowEmp['IDEN']."' ORDER BY ARTICULO desc ";
@mysql_query("SET NAMES 'utf8'");
$resEstadistica = mysql_query($queEstadistica, $conexion) or die(mysql_error());
$totEstadistica = mysql_num_rows($resEstadistica);
if ($rowEmp['TITULO']<>"")
{
echo '<tr>';
echo "<td><a href='actualizar.php?viewart=".$rowEmp['IDEN']."'>".'editar </a>';
echo "<a href='borrar.php?viewart=".$rowEmp['IDEN']."'>".' borrar </a></td>';
echo "<td>".$rowEmp['FECHA']."</td>";
echo "<td>".substr($rowEmp['TITULO'],0,100)."</td>";
echo "<td>".$rowEmp['CATEGORIA']."</td>";
echo "<td>".$rowEmp['LOCALIDAD']."</td>";
echo "<td>".zona($rowEmp['ZONA'])."</td>";
echo "<td>".$totEstadistica."</td>";
echo "</tr>";
}
}
}
?>
</tbody>
</table>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>