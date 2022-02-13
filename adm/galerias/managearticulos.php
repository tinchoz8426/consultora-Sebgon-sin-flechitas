<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js?ver=3.5.1'></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="http://www.pikachoose.com/wp-content/themes/pikachoose/_/js/fancybox/jquery.fancybox.css?v=2.0.1" type="text/css" media="screen" />
<script type="text/javascript" src="http://www.pikachoose.com/wp-content/themes/pikachoose/_/js/fancybox/jquery.fancybox.js?v=2.0.1"></script>
<script src="http://www.pikachoose.com/wp-content/themes/pikachoose/_/js/functions.js"></script>

<?php (include "../vars.php");?>
<?php (include "../include/filtrocompacto.php");?>

<?php
include "../consultabasica.php";
if ($totEmp> 0) {
while ($rowEmp = mysql_fetch_assoc($resEmp)) {

echo '<div class="caja-renglon">';
echo "<a href='actualizar.php?viewart=".$rowEmp['IDEN']."'>".'<span class="botones-contenido"> editar </a></span>';
echo "<a href='borrar.php?viewart=".$rowEmp['IDEN']."'>".'<span class="botones-contenido"> borrar </a></span>';
echo "<a href='addfoto.php?viewart=".$rowEmp['IDEN']."'>".'<span class="botones-contenido"> + </a></span>';
echo "<a href='delfoto.php?viewart=".$rowEmp['IDEN']."&viewart2=".$rowEmp['TITULO']."'>".'<span class="botones-contenido"> - </a></span>';
echo "<a class='sbox lfbox' href='../../galerias/proyector.php?viewart=".$rowEmp['IDEN']."&viewart2=".$rowEmp['TITULO']."'>".'<span class="botones-contenido"> v </a></span>';
echo '<span class="lineas-contenido">'.$rowEmp['FECHA']." </span>";
echo '<span class="lineas-contenido">'.substr($rowEmp['TITULO'],0,100). " </span> ";
echo "</div>";

//echo "<p class='autor'>".$rowEmp['AUTOR'];
}
}
?>


 

