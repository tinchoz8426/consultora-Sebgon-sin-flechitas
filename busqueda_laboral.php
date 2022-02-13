<?php
include "include/openbase.php";
//include "adm/consultabusquedas.php";
$viewart = (int)$_GET['viewart'];
$viewart2 = $_GET['viewart2'];
$queEmp = "SELECT * FROM busquedas  WHERE IDEN=".$viewart;
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

while ($rowEmp = mysql_fetch_assoc($resEmp)) {

	$titulo_solapa=utf8_encode($rowEmp['TITULO']);
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="title" content="Ofertas de Trabajo |  <?php echo $titulo_solapa; ?>" />

<meta name="keywords" content="búsqueda laboral de <?php echo $titulo_solapa; ?>" />

<meta name="description" content="<?php echo $titulo_solapa; ?>" />

<meta name="robots" content="all" />



<title><?php echo  $titulo_solapa; ?></title>


<!--<link href="adm/core/stylesheets/application.css" media="screen" rel="stylesheet" type="text/css" />-->

<link href="/default.css" rel="stylesheet" type="text/css" media="all" />
  <!--[if lt IE 9]>
  <script src="adm/core/javascripts/vendor/html5shiv.js" type="text/javascript"></script>
  <script src="adm/core/javascripts/vendor/excanvas.js" type="text/javascript"></script>
  <![endif]-->

<script src="adm/core/javascripts/application.js" type="text/javascript"></script>

</head>

<body>




	   <div id="header-wrapper">

			<div id="header" class="container">

				<?php include 'template/navegacion.php';?>

			</div>

		</div>



 


			

	



					<div class="busquedas interna">

							

								

									<?php include 'include/visor_busquedas.php'; ?>

									<a href= "busquedas.php"><h3 style="margin-top: 50px;">> Consulte otras búsquedas</h3></a><br>

				
						
						
						
					</div>





<?php include 'template/footerMain.php';?>

</body>

</html>