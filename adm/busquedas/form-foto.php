<head>
<title>Agregar foto a la galería <?php echo $viewart; ?></title>

<?php $d1= date("d");?>
<?php $m1= date("m");?>
<?php $y1= date("Y");?>
<?php $h1= date("H");?>
<?php $mm1= date("i");?>

</head>

      <form id="insertar" name="insertar" method="post" ENCTYPE="multipart/form-data" action="">
        
<p>Epígrafe Foto / Descripción del Documento o Adjunto</p>
<p> <textarea name="EPIGRAFE" id="EPIGRAFE" cols="90" rows="4"><?php echo(nl2br($epigrafeamodificar));?></textarea>
        </p>
        
<p>Fuente / Autor 
  <input name="AUTOR" type="text" id="AUTOR" value= '<?php echo($firmaamodificar);?>' size="30" />
</p>
          
  
<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
 <INPUT type=hidden name=MAX_FILE_SIZE  VALUE=2048000>
          <INPUT type=file name="archivo" id="archivo">       
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