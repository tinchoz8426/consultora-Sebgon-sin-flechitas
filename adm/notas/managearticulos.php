<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js?ver=3.5.1'></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="../../estilos/fancybox.css?v=2.0.1" type="text/css" media="screen" />
<script type="text/javascript" src="../../js/jquery.fancybox.js?v=2.0.1"></script>
<script src="http://www.pikachoose.com/wp-content/themes/pikachoose/_/js/functions.js"></script>

<?php (include "../vars.php");?>
<?php (include "../include/filtrocompacto.php");?>

<?php
$limite=0;
include "../consultabasicanotas.php";
if ($totEmp> 0) {
while ($rowEmp = mysql_fetch_assoc($resEmp)) {
$limite=$limite+1;
echo '<div class="caja-renglon">';
$queEstadistica = "SELECT * FROM estadistica  WHERE  ARTICULO regexp '".$rowEmp['IDEN']."' ORDER BY ARTICULO desc ";
$resEstadistica = mysql_query($queEstadistica, $conexion) or die(mysql_error());
$totEstadistica = mysql_num_rows($resEstadistica);
echo "<a data-toggle='modal' href='actualizar.php?viewart=".$rowEmp['IDEN']."' class='btn btn-sm btn-default'>".'editar </a>';
echo "<a data-toggle='modal' href='borrar.php?viewart=".$rowEmp['IDEN']."' class='btn btn-xs btn-default'>".' borrar </a>';
echo "<a data-toggle='modal' href='addfoto.php?viewart=".$rowEmp['IDEN']."' class='sbox lfbox'>".'<span class="botones-contenido"> + </a></span>';
echo "<a data-toggle='modal' href='deladj.php?viewart=".$rowEmp['IDEN']."' class='sbox lfbox'>".'<span class="botones-contenido"> - </a></span>';
echo "<a data-toggle='modal' href='lisstadj.php?viewart=".$rowEmp['IDEN']."' class='sbox lfbox'>".'<span class="botones-contenido"> v </a></span>';
echo '<span class="lineas-contenido">'.$rowEmp['FECHA']." </span>";
echo '<span class="lineas-contenido">'.substr($rowEmp['TITULO'],0,100). " </span> ";
echo '<span class="lineas-contenido-azul">'.$totEstadistica." </span>";
echo "</div>";
if ($limite > 20){break;}
//echo "<p class='autor'>".$rowEmp['AUTOR'];
}
}
?>
