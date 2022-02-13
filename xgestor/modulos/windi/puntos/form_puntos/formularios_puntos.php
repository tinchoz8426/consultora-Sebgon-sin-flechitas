
<?php

if ($campo["LOGO_M"]==""){$campo["LOGO_M"]="sin_logo.png";}
if ($campo["LOGO"]==""){$campo["LOGO"]="sin_logo.png";}
?>

<div class="col-lg-9 col-md-7">
<form method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo $redir;?>">
<div class="add-listing-box" Style= "margin-top: 0px;">
<div class="listing-box-header">
<h5 style= "color: #fff"><i class="fas fa-map-marked-alt"></i> Configuración de Punto de venta</h5>
</div>

<div class="row" Style= "margin-top: -40px">
<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Nombre comercial</label><input name="NOMBRE" type="text" class="form-control" value="<?php echo $campo["NOMBRE"];?>" required>
</div>
</div>
<div class="col-lg-12 col-md-12">

<p>Elige la terminación de la URL del punto de venta, sin espacios  ni caracteres especiales. <br>
(Ej.: https://windi/<b>tunegocio</b>) Tipea solo el nombre de tu negocio y verifica si está disponible. </p><br>
<input type="text" name="URL" class="form-control" value="<?php echo $campo["URL"];?>" pattern="[a-z0-9]*" title="El nombre elegido no cumple los requisitos establecidos" minlength="5" maxlength="30" required>
<?php echo $aceptado;?>
<br>
<div align="center">
<input type='submit' value='Verificar' name='<?php echo $accion;?>' class='btn btn-primary pull-left' />
</div>
</div>
</div>
</div>
<br><br>
</form>
		
	<?php if ($campo["URL"]<>""){include 'modulos/windi/puntos/form_puntos/formularios_puntos_2.php';}?>	
		
	</div>

