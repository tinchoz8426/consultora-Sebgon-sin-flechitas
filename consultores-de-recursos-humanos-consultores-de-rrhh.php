<?php
session_start(); 
$_SESSION['controlando'] = 'noataques';
include('mailcode-includes-cv/config.inc.php'); ?>
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
if ((document.form1.cargo.value == "") || (document.form1.cargo.value== null)) {
alert("Debe ingresar el cargo al que se postula.");
document.form1.cargo.focus();
return false;
}
else
if ((document.form1.direccion.value == "") || (document.form1.direccion.value== null)) {
alert("Debe ingresar su dirección.");
document.form1.direccion.focus();
return false;
}
else
if ((document.form1.ciudad.value == "") || (document.form1.ciudad.value== null)) {
alert("Debe ingresar su ciudad.");
document.form1.ciudad.focus();
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
									<h2 class="title"><span>Envíenos aquí su CV</span></h2>
								</div>
							</div>
							<div class="content">
								<form enctype="multipart/form-data" id="form1" name="form1" action="mailcode-includes/envia_legajo.php" method="post">
									<input type="hidden" name="address" value="<?php echo $_SERVER['REMOTE_ADDR'].'<br>';?>"/><br />
									<p class="txt-color-rojo"><strong>(*) Campos obligatorios.</strong></p>
									<?php
$codereferencia='';
if(isset($_GET['codigodereferencia'])&&$_GET['codigodereferencia']!='')
{
$codereferencia = $_GET["codigodereferencia"];
echo "<strong>Código de Referencia: </strong>".$codereferencia."<br /><br /><input type='hidden' id='REF' name='REF' value='".$codereferencia."'>";
}
else{
}
?>
									Nombre (*):<br />
									<input name="nombre" type="text" class="form" size="30" />
									<br />
									Apellido (*):<br />
									<input class="form" type="text" name="apellido" size="30" />
									<br />
									Cargo al que se postula (*):<br />
									<input class="form" type="text" name="cargo" size="30" />
									<br />
									Dirección (*):<br />
									<input class="form" type="text" name="direccion" size="30" />
									<br />
									Ciudad (*):<br />
									<input class="form" type="text" name="ciudad" size="30" />
									<br />
									Teléfono (*):<br />
									<input class="form" type="text" name="telefono" size="30" />
									<br />
									Email (*):<br />
									<input class="form" type="text" name="email" size="30" />
									<br />
									<?php if ($attachments == 1) { ?>
									Archivo(CV):<br />
									<input class="form" type="file" name="nombre_CV" size="28" />
									<br />
									<input class="form" type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
									<?php  }
									?>
									Mensaje (*):<br />
									<textarea class="form" name="mensaje" rows="5" cols="22"></textarea>
									<br />
									Código de seguridad:<br />
									<img src="mailcode-includes/txt2png.php?" name="img" id="img" alt="Security Code" title="Security Code" /><br />
									Por favor Escriba el c&oacute;digo de seguridad (*):<br />
									<input class="form" id="security_code" name="security_code" type="text" />
									<input class="form" type="submit" name="Send" onclick="return verifica(this.form)" value="Enviar" />
									<input class="form" type="reset" value="Borrar" />
								</form>
								<p><a href="" onclick="newcode(); return false;">» Obtener un nuevo Código de Seguridad</a></p>
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
												<p><strong>CARGÁ TU CV</strong> en nuestro sistema y te tendremos en cuenta en las búsquedas laborales <br/>
													<a href="consultores-de-recursos-humanos-consultores-de-rrhh.php">Cargar...</a></p>
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
