<?php
session_start(); 
$_SESSION['controlando'] = 'noataques';
include('mailcode-includes-cv/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="Cargar CV - Consultora SEBGON" />
<meta name="keywords" content="consultores de recursos humanos, consultores de rrhh" />
<meta name="description" content="Cargá tu curriculum para poder participar en las búsquedas laborales" />
<meta name="robots" content="all" />
<title>Cargar CV - Consultora SEBGON</title>
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





		<div id="header-wrapper">

			<div id="header" class="container">

				<?php include 'template/navegacion.php';?>

			</div>

		</div>



		
					<div id="page" class="container cargar"><div class="content">
						
							<h2 class="title">Envíenos aquí su CV</h2>





							
								<form enctype="multipart/form-data" id="form1" name="form1" action="mailcode-includes/envia_legajo.php" method="post">
									<input type="hidden" name="address" value="<?php echo $_SERVER['REMOTE_ADDR'].'<br>';?>"/>
									<p style="color: #b91600">* Campos obligatorios.</p>
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
									*Nombre:<br />
									<input name="nombre" type="text" class="form" size="30" />
									<br />
									*Apellido:<br />
									<input class="form" type="text" name="apellido" size="30" />
									<br />
									*Cargo al que se postula:<br />
									<input class="form" type="text" name="cargo" size="30" />
									<br />
									*Dirección:<br />
									<input class="form" type="text" name="direccion" size="30" />
									<br />
									*Ciudad:<br />
									<input class="form" type="text" name="ciudad" size="30" />
									<br />
									*Teléfono:<br />
									<input class="form" type="text" name="telefono" size="30" />
									<br />
									*Email:<br />
									<input class="form" type="text" name="email" size="30" />
									<br />
									<?php if ($attachments == 1) { ?>
									Archivo(CV):<br />
									<input class="form" type="file" name="nombre_CV" size="28" />
									<br />
									<input class="form" type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
									<?php  }
									?>
									*Mensaje:<br />
									<textarea class="form" name="mensaje" rows="5" cols="22"></textarea>
									<br />
									Código de seguridad:<br />
									<img src="mailcode-includes/txt2png.php?" name="img" id="img" alt="Security Code" title="Security Code" /><br />
									*Por favor escriba el c&oacute;digo de seguridad:<br />
									<input class="form" id="security_code" name="security_code" type="text" /><br>
									<input class="form" type="submit" name="Send" onclick="return verifica(this.form)" value="Enviar" /><br>
									<input class="form" type="reset" value="Borrar" />
								</form>
								<p style="margin-bottom: 0 !important; padding-bottom: 50px !important"><a style="color: #fff" href="" onclick="newcode(); return false;">» Obtener un nuevo Código</a></p>
							
						
						
					</div></div>
		

<?php include 'template/footerMain.php';?>
</body>
</html>