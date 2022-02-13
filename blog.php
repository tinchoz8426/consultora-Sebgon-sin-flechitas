<?php

$tituloNO = "Entrenamiento para profesionales y empleados de la salud";

$k1 = "<h1><strong>stress laboral, seminarios de prevencion de riesgos psicosociales en el trabajo, stress laboral</strong></h1>";

$k2 = "<h2><strong>stress laboral, seminarios de prevencion de riesgos psicosociales en el trabajo, stress laboral</strong></h2>";

$k3 = '<h3><a href="http://www.consultorasebgon.com/stress-laboral-prevencion-de-riesgos-psicosociales-stress-laboral.php" target="_self" title="stress laboral, seminarios de prevencion de riesgos psicosociales en el trabajo, stress laboral"><strong>stress laboral, seminarios de prevencion de riesgos psicosociales en el trabajo, stress laboral</strong></a></h3>';

$k4 = "<h4>stress laboral, seminarios de prevencion de riesgos psicosociales en el trabajo, stress laboral</h4>";

$pic = "stress laboral, seminarios de prevencion de riesgos psicosociales en el trabajo, stress laboral";

$pic1 = "stress laboral, seminarios de prevencion de riesgos psicosociales en el trabajo";

$pic2 = "stress laboral";

$links = '<a href="http://www.consultorasebgon.com/stress-laboral-prevencion-de-riesgos-psicosociales-stress-laboral.php" target="_self" title="stress laboral, seminarios de prevencion de riesgos psicosociales en el trabajo, stress laboral"><strong>stress laboral, seminarios de prevencion de riesgos psicosociales en el trabajo, stress laboral</strong></a> - <a href="http://www.bsasprotection.com/" target="_blank" title="empresa de seguridad privada">empresa de seguridad privada</a> - <a href="http://www.bsasprotection.com/servicios-de-seguridad-privada.html" title="servicios de seguridad privada" target="_blank">Servicios de Seguridad Privada</a>';


include "include/openbase.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="title" content="<?php echo $titulo; ?>" />

<meta name="keywords" content="<?php echo $titulo; ?>" />

<meta name="description" content="<?php echo $titulo; ?>" />

<meta name="robots" content="all" />

<title><?php echo $titulo; ?></title>

<link href="default.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>

<div id="wrapper">

	<div id="wrapper-bgbtm">

		<div id="header-wrapper">

			<div id="header" class="container">

				<?php include 'template/navegacion.php';?>

			</div>

			<div class="container"> <a href="index.php"><img src="images/homepage01.jpg" width="460" height="98" alt="" /></a> </div>

		</div>

		<div id="bg1">

			<div id="bg2">

				<div id="bg3">

					<div id="page" class="container">
					<p><img src="images/notas.jpg" width="100%" /></p>
					
					
					<?
$queEmp = "SELECT * FROM demo WHERE  CATEGORIA='ART' ORDER BY FECHA desc";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

if ($totEmp> 0) {
echo '<div id="content" style="width:650px">';
while ($rowEmp = mysql_fetch_assoc($resEmp)) {

$titulo=utf8_encode($rowEmp['TITULO']);
$subtitulo=utf8_encode($rowEmp['SUBTITULO']);
$cuerpo=utf8_encode($rowEmp['CUERPO']);
$link=$rowEmp['IDEN'];
$fuente=$rowEmp['AUTOR'];



echo'						
								<div id="splash" style="height:auto">
									<div class="content">
										<h3 class="title" ><span>'.$titulo.'</span></h3>
									</div>
								</div>
									<div class="content">
										<p><h4 class="title"><span>'.$subtitulo.'</span></h4><a href="art.php?viewart='.$link.'">ver artículo completo</a></p>
									</div><div id="separa_modulos"></div>
									';
						
						}
}
?>
</div> <br>


							<div id="sidebar" style="width:200px">

								<div id="box33" class="box-style1">

									<div class="content">
									<?php include 'derecha.php';?>
									

									</div>

								</div>
							</div>

					</div>

				</div>
	
			</div>

		</div>

	</div>

	

</div>


<?php include 'template/footerMain.php';?>

</body>

</html>

