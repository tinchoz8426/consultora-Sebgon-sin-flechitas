<head>
<title>Editor HtmL</title>
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

</head>

      <form id="insertar" name="insertar" method="post" action="">
         <ul class="padded separate-sections">
          <input type="text" placeholder="Título Nota" name="TITULO" type="text" id="TITULO" value= '<?php echo(nl2br($tituloamodificar));?>' size="90" />
        
		</ul>
		<ul class="padded separate-sections">
         
          <input type="text" placeholder="Subtítulo Nota" name="SUBTITULO" type="text" id="SUBTITULO" value= '<?php echo(nl2br($subtituloamodificar));?>' size="90" />
        </ul>
        <p> día / mes / año :: hora </p>
        <p> Fecha Actual 
  <input name="DIAFECHA" type="text" id="DIAFECHA" value= '<?php echo $d1;?>' size="2" />
  <input name="MESFECHA" type="text" id="MESFECHA" value= '<?php echo $m1;?>' size="2" />
  <input name="ANIOFECHA" type="text" id="DIAFECHA" value= '<?php echo $y1;?>' size="4" maxlength="4" />
  <input name="HORA" type="text" id="HORA" value= '<?php echo $h1.":".$mm1;?>' size="5" />

          Fuente 
          <input name="AUTOR" type="text" id="AUTOR" value= '<?php echo($firmaamodificar);?>' size="30" />
        </p>
		<p>Fecha grabada 
  <input name="FECHA" type="text" id="FECHA" value= '<?php echo($fechaamodificar); ?>' size="30" />
  Actualizar Fecha? 
  <select name="CAMBIAFECHA">
    <option value="NO" selected>NO</option>
    <option value="SI">SI</option>
  </select>
  ** Solo para Modificaci&oacute;n</p>
        <p>Ubic: 
          <select name="CATEGORIA">
            <option value="<?php echo($categoriaamodificar); ?>"> 
            <?php echo($categoriaamodificar); ?>
            </option>
            <option value="ART">Portada y principales</option>
            <option value="ARTTO">sólo principales</option>
            <option value="ART1">Columna 1 </option>
            <option value="ART2">Columna 2 Recuadro</option>
            <option value="ART3">Columna 2 Abajo</option>
            <option value="ART4">Columna 3 Videos</option>
            <option value="ART5">Columna 3 Notas</option>
			<option value="ENCA">Encuesta Activa</option>
            <option value="ENCC">Encuesta Cerrada</option>
            <option value="ART6">Columna 3 Banner</option>
            <option value="ART7">Columna Urgente</option>
            <option value="ART8">Columna Urgente Full</option>
          </select>
          <select name="SECC">
            <option value="<?php echo($seccionamodificar); ?>"> 
            <?php echo($seccionamodificar); ?>
            </option>
            <option value="CIU">Recursos Humanos</option>
            <option value="PAI">Seguridad Corporativa</option>
            <option value="MUN">Industria</option>
            <option value="SAL">Capacitación</option>
            <option value="CUL">Desarrollo profesional</option>
            <option value="DEP">Finanzas</option>
            <option value="LAB">Interés General</option>
          </select>
        </p>
        <!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
        <div align="center"> 
          <textarea name="CUERPO" id="CUERPO" cols="80" rows="25" wrap="PHYSICAL"><?php echo($cuerpoamodificar);?>
	</textarea>
          <br />
        </div>
        <div align="right"> 
          <input type="submit" name="Submit" value="Grabar" />
          <input type="hidden" name="action" value="add" />
        </div>
     
    

<?php if ($state) { ?>
<p><em>Grabación Correcta</em></p>

<?php } ?> 
</body>

                
</html>