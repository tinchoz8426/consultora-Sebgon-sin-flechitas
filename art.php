<?php
if (!$_GET['viewart']){$filtro=0;} else {
$filtro = $_GET['viewart'];}
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

$queEmp = "SELECT * FROM demo WHERE  IDEN=".$filtro;
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

if ($totEmp> 0) {
while ($rowEmp = mysql_fetch_assoc($resEmp)) {

$titulo=utf8_encode($rowEmp['TITULO']);
$subtitulo=utf8_encode($rowEmp['SUBTITULO']);
$cuerpo=utf8_encode($rowEmp['CUERPO']);
$fuente=$rowEmp['AUTOR'];


}
}
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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

						<div id="content" style="width:650px">

								<div id="splash" style="height:auto">

									<div class="content box-style1">

										<h2 class="title"><span><?php echo $titulo; ?></span></h2>

									</div>

								</div>

									<div class="content">
										<p><h3 class="title"><span><?php echo $subtitulo; 
										
										echo '<br><hr class="divider"><br>'; 
										
										echo '<div class="fb-share-button" data-href="http://www.consultorasebgon.com/art.php?viewart='.$viewart.'&viewart2='.$titulo.'" data-layout="button"></div>';
echo ' ';
include "sociales/compartirtw.php";
echo ' ';
include "sociales/compartirlk.php";
?></span></h3></p>
											<? $queEmp = "SELECT * FROM fotos WHERE  NOTICIA=".$filtro;
											$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
											$totEmp = mysql_num_rows($resEmp);

											if ($totEmp> 0) {
												while ($rowEmp = mysql_fetch_assoc($resEmp)) {

													$urlfoto=$rowEmp['URL'];


												} 
												} else {$urlfoto="sinfoto.jpg";}
											
											?>
										<p><img src="material/notas/<?php echo $urlfoto; ?>" width="100%" /></p>

			 
			   

			 
												<div id="contenedor">
												<p><?php echo $cuerpo; ?></p>

												</div>
<p><?php echo "Fuente : ". $fuente; ?></p>
									</div>
						</div>
							<div id="sidebar" style="width:200px">

								<div id="box3" class="box-style1">

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

