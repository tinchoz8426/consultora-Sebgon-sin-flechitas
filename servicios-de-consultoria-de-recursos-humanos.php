<?php

session_start(); 

$_SESSION['controlando'] = 'noataques';

include('mailcode-includes/config.inc.php'); ?>

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

<script language="javascript" type="text/javascript">

function rand(n) {

  return (Math.floor(Math.random()*n+1));

}

function newcode() {

    var sec;

    sec = document.getElementById("img");

    if (sec)

	sec.setAttribute("src",sec.src+rand(9));

}

</script>

<script type="text/javascript">

function verifica() {

if ((document.form1.nombre.value == "") || (document.form1.nombre.value== null)) {

alert("Debe ingresar el nombre de la persona de contacto.");

document.form1.nombre.focus();

return false;

}

else

if ((document.form1.apellido.value == "") || (document.form1.apellido.value== null)) {

alert("Debe ingresar el apellido de la persona de contacto.");

document.form1.apellido.focus();

return false;

}

else

if ((document.form1.empresa.value == "") || (document.form1.empresa.value== null)) {

alert("Debe ingresar el nombre de la empresa.");

document.form1.empresa.focus();

return false;

}

else

if ((document.form1.telefono.value == "") || (document.form1.telefono.value== null)) {

alert("Debe ingresar su número de teléfono.");

document.form1.telefono.focus();

return false;

}

else

if ((document.form1.email.value == "") || (document.form1.email.value== null)) {

alert("Debe ingresar su dirección de Email.");

document.form1.email.focus();

return false;

}

else

if ((document.form1.mensaje.value == "") || (document.form1.mensaje.value== null)) {

alert("Debe ingresar un mensaje");

document.form1.mensaje.focus();

return false;

}

else

if ((document.form1.security_code.value == "") || (document.form1.security_code.value== null)) {

alert("Debe ingresar el código de seguridad.");

document.form1.security_code.focus();

return false;

}

else

return true;

}

</script>



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

									<h2 class="title"><span>Escríbanos</span></h2>

								</div>

							</div>

							<div class="content">

<?php $userip = $_SERVER['REMOTE_ADDR']; ?>

   <strong><a href="http://www.consultorasebgon.com" target="_self" title="consultora en recursos humanos sebgon">www.consultorasebgon.com</a></strong><br />
   <br />



   <p><strong>Dirección:</strong> Carlos Casares 1022 2° PISO Of 10 - Castelar<br />

     Pcia. de Buenos Aires - Argentina.<br />

  <strong>Teléfono/Fax:</strong> (011)4139-1629/1630<br />

  <strong>Línea directa:</strong> (011) 155 455-7841<br />

  <strong>Skype: </strong>consultora.sebgon1 <br />

  <strong>Email:</strong> <a href="mailto:consultora@consultorasebgon.com" title="email - consultora en recursos humanos sebgon">consultora@consultorasebgon.com</a></p>

<p>&nbsp;</p>

<form enctype="multipart/form-data" id="form1" name="form1" action="mailcode-includes/envia_formulario.php" method="post">

<?php echo "<input type=\"hidden\" name=\"address\" value=\"$userip\" /><br />"; ?>

<p class="txt-color-rojo"><strong>-» Todos los campos son obligatorios.</strong></p>

Nombre:<br />

<input class="form" type="text" name="nombre" size="30" /><br />

Apellido:<br />

<input class="form" type="text" name="apellido" size="30" /><br />

Empresa:<br />

<input class="form" type="text" name="empresa" size="30" /><br />

Teléfono:<br />

<input class="form" type="text" name="telefono" size="30" /><br />

Email:<br />

<input class="form" type="text" name="email" size="30" /><br />

<?php 	// ========================================================================================

// Begin Attachments: Do Not Delete This Section.  Enable/Disable attachments in script config.

?>

<?php if ($attachments == 1) { ?>

Archivo(CV):<br />

<input class="form" type="file" name="attachment" size="28" />

<br /><input class="form" type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />

<?php  }

// End Attachments 

// ======================================================================================== 

?>

Mensaje:<br />

<textarea class="form" name="mensaje" rows="5" cols="22"></textarea>

<br />

Código de seguridad:<br />

<img src="mailcode-includes/txt2png.php?" name="img" id="img" alt="Security Code" title="Security Code" /><br />

Por favor Escriba el c&oacute;digo de seguridad:<br />

<input class="form" id="security_code" name="security_code" type="text" />

<input class="form" type="submit" name="Send" onclick="return verifica(this.form)" value="Enviar" />

<input class="form" type="reset" value="Borrar" />

</form>

<p><a href="" onclick="newcode(); return false;">» Obtener un nuevo Código de Seguridad</a></p>
	<p>En nuestros servicios encontrará, la CALIDAD, PROFESIONALISMO Y EXPERIENCIA acumulada de:<br />
                                + de 35 profesionales expertos en nuestro equipo de trabajo.<br />
+ de 40 clientes con amplias dotaciones, algunos de los cuales, superiores a los 4.500 empleados.<br />
+ de 75 profesionales incorporados con éxito en el último año, en empresas multinacionales como nacionales.<br />
+ de 2 de años de permanencia promedio de candidatos seleccionados e incorporados en empresas clientes.<br /><br />

Privacidad: Los datos enviados se manejan en absoluta reserva y confidencialidad.</p>

<p>Privacidad: Los datos enviados se manejan en absoluta reseva y confidencialidad.</p>

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

