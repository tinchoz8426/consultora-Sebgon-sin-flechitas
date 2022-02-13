<?php
if(isset($_GET['respuesta'])&&$_GET['respuesta']=='Gracias')
{
			$mensaje_titulo='Gracias';
			$mensaje_resultado='Muchas gracias por su comunicación, a la brevedad nos pondremos en contacto con Usted.';
}
elseif(isset($_GET['respuesta'])&&$_GET['respuesta']=='Codigo invalido')
{
			$mensaje_titulo='Código invalido';
			$mensaje_resultado='El código ingresado es erróneo, por favor vuelva a intentarlo.';
}
elseif(isset($_GET['respuesta'])&&$_GET['respuesta']=='Email invalido')
{
			$mensaje_titulo='Email invalido';
			$mensaje_resultado='El email ingresado es erróneo, por favor vuelva a intentarlo.';
}
elseif(isset($_GET['respuesta'])&&$_GET['respuesta']=='Formulario incompleto')
{
			$mensaje_titulo='Formulario incompleto';
			$mensaje_resultado='El formulario esta incompleto, por favor ingrese todos los campos requeridos.';
}
elseif(isset($_GET['respuesta'])&&$_GET['respuesta']=='Archivo invalido')
{
			$mensaje_titulo='Archivo invalido';
			$mensaje_resultado='El tipo de archivo que intenta subir no esta permitido.';
}
elseif(isset($_GET['respuesta'])&&$_GET['respuesta']=='Peso excesivo')
{
			$mensaje_titulo='Peso excesivo';
			$mensaje_resultado='El archivo que intenta subir es demasiado grande.';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="servicios de consultoria de recursos humanos,  servicios de consultoria de rrhh,  consultoria de recursos humanos,  consultoria de rrhh" />
<meta name="keywords" content="servicios de consultoria de recursos humanos,  servicios de consultoria de rrhh,  consultoria de recursos humanos,  consultoria de rrhh" />
<meta name="description" content="servicios de consultoria de recursos humanos,  servicios de consultoria de rrhh,  consultoria de recursos humanos,  consultoria de rrhh" />
<meta name="robots" content="all" />
<title>servicios de consultoria de recursos humanos,  servicios de consultoria de rrhh,  consultoria de recursos humanos,  consultoria de rrhh</title>
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
						<div id="content" style="width:650px">
							<div id="splash" style="height:auto">
								<div class="content box-style1">
									<h2 class="title"><span><?php echo $mensaje_titulo; ?></span></h2>
								</div>
							</div>
							<div class="content">
								<iframe width="650" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Carlos+Casares+1022,+Castelar,+Buenos+Aires+Province,+Argentina&amp;aq=0&amp;oq=carlos+casares+1022&amp;sll=-34.650447,-58.642445&amp;sspn=0.004792,0.010504&amp;ie=UTF8&amp;hq=&amp;hnear=Carlos+Casares+1022,+Castelar,+Buenos+Aires,+Argentina&amp;t=m&amp;z=15&amp;ll=-34.649426,-58.642216&amp;output=embed"></iframe><br />
   <p><?php echo $mensaje_resultado; ?></p>
   <p><a href="servicios-de-consultoria-de-recursos-humanos.php" target="_self" title="empresa consultora sebgon">« Volver al formulario</a></p>
							</div>
						</div>
						<div id="sidebar" style="width:200px">
							<div id="box3" class="box-style1">
								<div class="content">
									<ul class="style1">
<li> <a href="capacitacion-para-empresas-capacitacion-empresas.php" target="_self" title="capacitacion para empresas, servicio de capacitacion para empresas, capacitacion empresarial">Formación en Management</a></li>
<li style="padding-left:20px"><a href="liderazgo-y-motivacion-capacitacion-en-liderazgo-y-motivacion.php" target="_self" title="liderazgo y motivacion, capacitacion en liderazgo y motivacion, capacitacion en liderazgo, capacitacion en motivacion">Liderazgo y Motivación</a></li>
<li style="padding-left:20px"><a href="capacitacion-trabajo-en-equipo-capacitacion-team-building.php" target="_self" title="capacitacion trabajo en equipo, capacitacion team-building, trabajo en equipo, team-building">Trabajo en Equipo</a></li>
<li style="padding-left:20px"><a href="conflicto-laboral-capacitacion-en-conflicto-laboral.php" target="_self" title="conflicto laboral, capacitacion en conflicto laboral, cambio actitudinal">Conflicto Laboral</a></li>
<li style="padding-left:20px"><a href="cursos-de-oratoria-seminarios-de-oratoria.php" target="_self" title="cursos de oratoria, capacitación en oratoria, seminarios de oratoria">Oratoria</a></li>

<li style="padding-left:20px"><a href="seminarios-de-capacitacion-para-empresas.php" target="_self" title="seminarios para empresas, seminarios de capacitacion para empresas">Administración del Tiempo</a></li>


<li><a href="stress-laboral-prevencion-de-riesgos-psicosociales-stress-laboral.php" target="_self" title="stress laboral, seminarios de prevencion de riesgos psicosociales en el trabajo, stress laboral">Riesgos PsicoSociales</a></li>
<li style="padding-left:20px"><a href="stress-laboral-prevencion-de-riesgos-psicosociales-stress-laboral.php" target="_self" title="stress laboral, seminarios de prevencion de riesgos psicosociales en el trabajo, stress laboral">Stress Laboral</a></li>
<li style="padding-left:20px"><a href="burn-out-prevencion-de-riesgos-psicosociales-burn-out.php" target="_self" title="burn out, seminarios de prevencion de riesgos psicosociales en el trabajo, burn out">Burn Out</a></li>
<li style="padding-left:20px"><a href="mobbing-prevencion-de-riesgos-psicosociales-mobbing.php" target="_self" title="mobbing, seminarios de prevencion de riesgos psicosociales en el trabajo, mobbing">Mobbing</a></li></li>
<li><a href="cursos-de-grafologia-capacitacion-en-grafologia.php" target="_self" title="cursos de grafologia, capacitacion en grafologia, seminarios de grafologia">Grafología</a></li>

									</ul>
								</div>
							</div>
							<div class="box-style2" style="width:190px;background:url('images/homepage06Short.jpg')">
								<div class="bgtop" style="background:url('images/homepage05Short.jpg') no-repeat scroll left top transparent;width:190px">
									<div class="bgbtm" style="background:url('images/homepage07Short.jpg') no-repeat bottom">
										<div id="box2" class="box-style1">
											<div class="content">
												<div class="image-style2"><span><img src="images/gallery04.jpg" width="105" height="96" alt="" /></span>
													<div class="thumbnails"></div>
												</div>
												<p><strong>CARGÁ TU CV</strong> en nuestro sistema y te tendremos en cuenta en las búsquedas laborales <br/><a href="consultores-de-recursos-humanos-consultores-de-rrhh.php">Cargar...</a></p>
											</div>
										</div>
									</div>
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
