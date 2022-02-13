<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insertar datos en MySQL</title>

<!-- TinyMCE -->
<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple"
	});
</script>
<!-- /TinyMCE -->


</head>
<body>
<h2>Alta y Modificaci&oacute;n de Art&iacute;culos y Notas</h2>
<h2><a href="indiceadmin.php">regresar</a> </h2>
<form id="insertar" name="insertar" method="post" action="">
  <p>ARTICULO: 
    <input name="TITULO" type="text" id="TITULO" value= '<?php echo(nl2br($tituloamodificar));?>' size="200" />
  </p>
  
  <p>CUERPO:<?php include "codigos.php"?>
  
    <!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
	<textarea id="CUERPO" name="CUERPO" rows="15" cols="80" style="width: 80%">
		Hola
	</textarea>
	<br />
  </p>
  <p>FIRMA: 
    <input name="AUTOR" type="text" id="AUTOR" value= '<?php echo($firmaamodificar);?>' size="50" />
    SECCION 
    <input name="CATEGORIA" type="text" id="CATEGORIA" value= '<?php echo($categoriaamodificar);?>' size="5" maxlength="5" />
  </p>
  <input type="submit" name="Submit" value="Insertar Registro" />
  <input type="hidden" name="action" value="add" />
</form>
<?php if ($state) { ?>
<p><em>Registro insertado correctamente</em></p>
<?php } ?> 
</body>
</html>
