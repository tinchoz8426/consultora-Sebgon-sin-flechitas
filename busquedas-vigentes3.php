

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta name="title" content="busquedas laborales, seleccion de recursos humanos, busqueda laboral" />

<meta name="keywords" content="busquedas laborales, seleccion de recursos humanos, busqueda laboral" />

<meta name="description" content="busquedas laborales, seleccion de recursos humanos, busqueda laboral" />

<meta name="robots" content="all" />

<title>busquedas laborales, seleccion de recursos humanos, busqueda laboral</title>



<link href="adm/core/stylesheets/application.css" media="screen" rel="stylesheet" type="text/css" />
<link href="estilos/basico.css" rel="stylesheet" type="text/css" media="all" />
  <!--[if lt IE 9]>
  <script src="adm/core/javascripts/vendor/html5shiv.js" type="text/javascript"></script>
  <script src="adm/core/javascripts/vendor/excanvas.js" type="text/javascript"></script>
  <![endif]-->

<script src="adm/core/javascripts/application.js" type="text/javascript"></script>

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

			<div class="container2"> <a href="index.php"><img src="images/homepage01.jpg" width="460" height="98" alt="" /></a> </div>

		</div>

		<div id="bg1">

			<div id="bg2">

				<div id="bg3">

					<div id="page" class="container">

						<div id="content2" style="width:650px">

							<div id="splash" style="height:auto">

								

							</div>

							<div class="content2">

								

								<div class="busquedas">

									<?php include 'include/listabusqueda.php'; ?>

									

									<p><img src="images/line.gif" alt="-" width="480" height="1" /></p>

								</div>


							</div>

						</div>
						
						
						<div id="sidebar" style="width:200px">
						  <div id="box3" class="box-style1">
						    <div class="content">
						




 

					
						      <p><?php include 'funciones/menuderA.php'; despliegaA(once);?></p>
							  
							  <?php include 'sociales/seguinostw.php'; ?>
							  <?php include 'sociales/seguinoslk.php'; ?>
							  <p></p>
							  <?php include 'sociales/seguinosfb.php'; ?>
					        </div>
					      </div>
					  </div>
					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<?php include 'template/footerMain2.php';?>

</body>

</html>

