<html>
<head>
<title>ABM de Contenido</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php include "estilos.php"; ?>
<!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

  <!-- Use title if it's in the page YAML frontmatter -->
  <title>Administrador de Contenidos</title>

  <link href="../core/stylesheets/application.css" media="screen" rel="stylesheet" type="text/css" />

  <!--[if lt IE 9]>
  <script src="../core/javascripts/vendor/html5shiv.js" type="text/javascript"></script>
  <script src="../core/javascripts/vendor/excanvas.js" type="text/javascript"></script>
  <![endif]-->

<script src="../core/javascripts/application.js" type="text/javascript"></script>
</head>
<?php include "opciones.php"; ?>
<div class="panel-izquierdo"> <br><br>
    <div align="center"><img src="../../imagenes/tools.png" width="29" height="31"></div>
  </div>
				<div class="tools">
				<?php include "filtrocompacto.php"; ?>
				</div>
				<div class="container">
				<div class="panel-izquierdo-interno"> 
    <div class="titulos-columnas">
	Estadísticas
	</div>
</div>
				  
				
				<div class="caja-contenido">
				<div class="titulos-columnas">
	Contenidos
	</div><br>
				<?php
					if (!$viewart) {
					include "managearticulos.php";								
					} 
					else 
					{
					
					} 
				?>

  </div>
</div>
</body>
</html>
