<?php (include "../vars.php");?>
<?php (include "../include/filtrocompacto.php");?>

<?php
include "../consultabasicanotas.php";
if ($totEmp> 0) {
while ($rowEmp = mysql_fetch_assoc($resEmp)) {


echo "<a href='actualizar.php?viewart=".$rowEmp['IDEN']."'>".'<span class="botones-contenido">editar</a></span>';
echo "<a href='borrar.php?viewart=".$rowEmp['IDEN']."'>".'<span class="botones-contenido">borrar</a></span>';
echo '<span class="lineas-contenido">'.$rowEmp['FECHA']." </span>";
echo '<span class="lineas-contenido">'.$rowEmp['TITULO']. " </span> ";
echo "<br><br>";

//echo "<p class='autor'>".$rowEmp['AUTOR'];
}
}
?>


 

