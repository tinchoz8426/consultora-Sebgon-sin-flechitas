<?php
$viewart = $_GET['viewart'];
$viewart2 = $_GET['viewart2'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="title" content="Ofertas de Trabajo |  <?php echo $viewart2; ?>" />

<meta name="keywords" content="búsqueda laboral de <?php echo $viewart2; ?>" />

<meta name="description" content="<?php echo $viewart2; ?>" />

<meta name="robots" content="all" />

<title><?php echo "Búsqueda Laboral | ". $viewart2; ?></title>


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

							

								

									<?php include 'include/visor.php'; ?>

									<a href= "busquedas.php"><h3 style="margin-top: 50px;">> Consulte otras búsquedas</h3></a><br>

				
						
						
						
					</div>





<?php include 'template/footerMain.php';?>

</body>

</html>