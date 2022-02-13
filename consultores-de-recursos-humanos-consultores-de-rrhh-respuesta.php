<?php
if(isset($_GET['respuesta'])&&$_GET['respuesta']=='Gracias')
{
			$mensaje_titulo='Gracias';
			//$mensaje_resultado='Su mensaje ha sido enviado correctamente.';
			$mensaje_resultado='su CV ha sido enviado con éxito, muchas gracias por confiarnos su búsqueda laboral.<br/>Atte.<br/> CONSULTORA SEBGON.';
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
<meta name="title" content="consultores de recursos humanos, consultores de rrhh" />
<meta name="keywords" content="consultores de recursos humanos, consultores de rrhh" />
<meta name="description" content="consultores de recursos humanos, consultores de rrhh" />
<meta name="robots" content="all" />
<title>consultores de recursos humanos, consultores de rrhh</title>
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
									<h2 class="title"><span>Envíenos aquí su CV</span></h2>
								</div>
							</div>
							<div class="content">
								<iframe width="650" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Carlos+Casares+1022,+Castelar,+Buenos+Aires+Province,+Argentina&amp;aq=0&amp;oq=carlos+casares+1022&amp;sll=-34.650447,-58.642445&amp;sspn=0.004792,0.010504&amp;ie=UTF8&amp;hq=&amp;hnear=Carlos+Casares+1022,+Castelar,+Buenos+Aires,+Argentina&amp;t=m&amp;z=15&amp;ll=-34.649426,-58.642216&amp;output=embed"></iframe><br />
   <p><?php echo $mensaje_resultado; ?></p>
   <p><a href="javascript:window.history.back(-1)" target="_self" title="consultores de recursos humanos, consultores de rrhh">« Volver al formulario</a></p>
							</div>
						</div>
						<div id="sidebar" style="width:200px">
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
