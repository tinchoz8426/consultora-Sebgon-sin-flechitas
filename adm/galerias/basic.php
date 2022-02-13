<head>
<title>Editor HtmL</title>

<?php $d1= date("d");?>
<?php $m1= date("m");?>
<?php $y1= date("Y");?>
<?php $h1= date("H");?>
<?php $mm1= date("i");?>

</head>

      <form id="insertar" name="insertar" method="post" action="">
        <p>T&iacute;tulo:</p> 
          
 <p> <textarea name="TITULO" id="TITULO" cols="90" rows="4"><?php echo(nl2br($tituloamodificar));?></textarea>
        </p>
        <p>Subt&iacute;t. </p>
          
  <p><textarea name="SUBTITULO" id="SUBTITULO" cols="90" rows="4"><?php echo(nl2br($subtituloamodificar));?></textarea>
        </p>
        <p> día / mes / año :: hora </p>
        
<p> Fecha Actual 
  <input name="DIAFECHA" type="text" id="DIAFECHA" value= '<?php echo $d1;?>' size="2" />
  <input name="MESFECHA" type="text" id="MESFECHA" value= '<?php echo $m1;?>' size="2" />
  <input name="ANIOFECHA" type="text" id="DIAFECHA" value= '<?php echo $y1;?>' size="4" maxlength="4" />
  <input name="HORA" type="text" id="HORA" value= '<?php echo $h1.":".$mm1;?>' size="5" />
</p>
<p>Fecha grabada 
  <input name="FECHA" type="text" id="FECHA" value= '<?php echo($fechaamodificar); ?>' size="30" />
  Actualizar Fecha? 
  <select name="CAMBIAFECHA">
    <option value="NO" selected>NO</option>
    <option value="SI">SI</option>
  </select>
  ** Solo para Modificaci&oacute;n</p>
<p>Fuente / Autor 
  <input name="AUTOR" type="text" id="AUTOR" value= '<?php echo($firmaamodificar);?>' size="30" />
  Ubic: 
  <select name="CATEGORIA">
    <option value="<?php echo($categoriaamodificar); ?>"> 
    <?php echo($categoriaamodificar); ?>
    </option>
    <option value="ART">General</option>
    <option value="ARTTO">Nota Principal</option>
    <option value="ART1">Columna 1 </option>
    <option value="ART2">Columna 2 Recuadro</option>
    <option value="ART3">Columna 2 Abajo</option>
    <option value="ART4">Columna 3 Videos</option>
    <option value="ART5">Columna 3 Notas</option>
    <option value="ART6">Columna 3 Banner</option>
    <option value="ART7">Columna Urgente</option>
    <option value="ART8">Columna Urgente Full</option>
  </select>
  Secc: 
  <select name="SECC">
    <option value="<?php echo($seccionamodificar); ?>"> 
    <?php echo($seccionamodificar); ?>
    </option>
    <option value="CIU">La Ciudad</option>
    <option value="PAI">El País</option>
    <option value="MUN">El Mundo</option>
    <option value="SAL">Salud</option>
    <option value="CUL">Cultura</option>
    <option value="DEP">Deportes</option>
    <option value="LAB">Labor Parlamentaria</option>
  </select>
</p>
        <!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
        
<div align="center"> <br />
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