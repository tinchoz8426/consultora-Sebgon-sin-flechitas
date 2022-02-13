<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" />
  <meta charset="ISO-8859-1" />
  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

  <!-- Use title if it's in the page YAML frontmatter -->
  <title>Administración inteligente de contenidos</title>

  <link href="core/stylesheets/application.css" media="screen" rel="stylesheet" type="text/css" />

  <!--[if lt IE 9]>
  <script src="core/javascripts/vendor/html5shiv.js" type="text/javascript"></script>
  <script src="core/javascripts/vendor/excanvas.js" type="text/javascript"></script>
  <![endif]-->

<script src="core/javascripts/application.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
 <!-- menu superior -->
<?php include("core/menusuperior.php"); ?>
<?php include("core/lateralizquierdo.php"); ?>
<div class="main-content">
  <div class="container-fluid">
    <div class="row-fluid">

      <div class="area-top clearfix">
        <div class="pull-left header">
          <h3 class="title">
            <i class="icon-dashboard"></i>
            NÃºcleo
          </h3>
          <h5>
            online groupware
          </h5>
        </div>
		
<?php include("core/estadisticacompactasup.php"); ?>        
      </div>
    </div>
  </div>

  <div class="container-fluid padded">
    <div class="row-fluid">

      <!-- Breadcrumb line -->

      <div id="breadcrumbs">
        <div class="breadcrumb-button blue">
          <span class="breadcrumb-label"><i class="icon-home"></i> Inicio</span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>       

        <div class="breadcrumb-button">
          <span class="breadcrumb-label">
            <i class="icon-dashboard"></i> Escritorio
          </span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid padded">
 
<div class="row-fluid" >
<?php (include "include/filtrocompacto-core.phpb");?>
</div>

<div class="row-fluid" >
	<div class="span6">    
        <?php include("core/contactos.php"); ?>
		<?php include("core/nuevocontacto.php"); ?>
	</div>
	<div class="span6">    
        <?php include("core/tareas.php"); ?>
		<?php include("core/nuevatarea.php"); ?>
	</div>
     </div>
  

  </div>
</div>

  </div>
  
  
  
  
  
 
		
		
</div>


</body>
</html>
