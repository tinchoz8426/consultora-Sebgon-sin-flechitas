
<?php $d1= date("d");?>
<?php $m1= date("m");?>
<?php $y1= date("Y");?>
<?php $h1= date("H");?>
<?php $mm1= date("i");?>
<!-- TinyMCE -->
<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "simple",
		
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

<div class="col-lg-12 col-md-12">

<form id="insertar" accept-charset="utf-8" name="insertar" method="post" action="" autocomplete="off">
<div class="form-group">

<input type="text" class="form-control" placeholder="Título de la Búsqueda" name="TITULO" type="text" id="TITULO" value= '<?php echo(nl2br($tituloamodificar));?>' size="90" />

</div>

<div class="form-group">

<input type="text" class="form-control" placeholder="Datos adiciones no publicados" name="SUBTITULO" type="text" id="SUBTITULO" value= '<?php echo(nl2br($subtituloamodificar));?>' size="90" />
</div>


<div class="form-row">

<div class="col" align="left">
<label for="exampleInputEmail1">Zona / Provincia</label> 
<select name="ZONA" class="form-control" >
<?php echo '<option value="'.$zona.'">'.$zona_nombre.'</option>' ; ?>

<?php

$consulta = "SELECT * FROM zonas  ORDER BY ZONA desc";
$resEmp_2 = mysql_query($consulta, $conexion) or die(mysql_error());
@mysql_query("SET NAMES 'utf8'");

while ($lista_zonas = mysql_fetch_assoc($resEmp_2)) 
{
echo '<option value="'.$lista_zonas['IDEN'].'">'.$lista_zonas['ZONA'].'</option>';	
};
?>
</select>
</div>

<div class="col" align="left">
<label for="exampleInputEmail1">Localidad</label> 
<input type="text" class="form-control" placeholder="Localidad" name="LOCALIDAD" type="text" id="LOCALIDAD" value= '<?php echo(nl2br($localidad));?>' size="90" />
</div>

</div>


<br>

 

<div class="form-row" align="left">
<div class="col" align="left">
<label for="exampleInputEmail1">Día</label> 
<input name="DIAFECHA" class="form-control" type="text"  id="DIAFECHA" value= '<?php echo $d1;?>' size="2" />
</div>
<div class="col" align="left">
<label for="exampleInputEmail1">Mes</label> 
<input name="MESFECHA" class="form-control" type="text"  id="MESFECHA" value= '<?php echo $m1;?>' size="2" />
</div>
<div class="col" align="left">
<label for="exampleInputEmail1">Año</label> 
<input name="ANIOFECHA" class="form-control" type="text"   id="DIAFECHA" value= '<?php echo $y1;?>' size="4" maxlength="4" />
</div>
<div class="col" align="left">
<label for="exampleInputEmail1">Hora</label> 
<input name="HORA" class="form-control" type="text"  id="HORA" value= '<?php echo $h1.":".$mm1;?>' size="5" />
</div>

<div class="col" align="left">

<label for="exampleInputEmail1">Fecha grabada </label> 
<input name="FECHA" type="text" class="form-control" id="FECHA" value= '<?php echo($fechaamodificar); ?>' size="30" />
Actualizar Fecha? 
<select name="CAMBIAFECHA">
<option value="NO" selected>NO</option>
<option value="SI">SI</option>
</select>
** Solo para Modificación
</div>


</div>

<div class="form-row">

<div class="col" align="left">
<label for="exampleInputEmail1">Estado</label> 
<select name="CATEGORIA" class="form-control" >
<option value="<?php echo($categoriaamodificar); ?>"> 
<?php echo($categoriaamodificar); ?>
</option>
<option value="ACT">ACTIVO</option>
<option value="NOA">CERRADA</option>
<option value="PAU">PAUSADA</option>
</select>
</div>

<div class="col" align="left">
<label for="exampleInputEmail1">Ubicación</label> 
<select name="SECC"  class="form-control">
<option value="<?php echo($seccionamodificar); ?>"> 
<?php echo($seccionamodificar); ?>
</option>
<option value="PORT">PORTADA</option>
<option value="NOPORT">SOLO INTERIOR</option>
</select>
</div>

<div class="col" align="left">
<label for="exampleInputEmail1">Ref.</label>  
<input name="AUTOR" class="form-control" type="text" id="AUTOR" value= '<?php echo($firmaamodificar);?>'  />
</div>

</div>
<br>
<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
<div class="form-group" align="left">
<label for="exampleInputEmail1">Detalle de la búsqueda</label> 
<textarea name="CUERPO" id="CUERPO" cols="100" rows="10" wrap="PHYSICAL"><?php echo($cuerpoamodificar);?></textarea>

<br />
</div>

<div align="right"> 
<input type="submit" class="btn btn-primary mb-2" name="Submit" value="Grabar" />
<input type="hidden" name="action" value="add" />
</div>

</form> 

</div>

<?php if ($state) { ?>
<p><em>Grabación Correcta</em></p>

<?php } ?> 
