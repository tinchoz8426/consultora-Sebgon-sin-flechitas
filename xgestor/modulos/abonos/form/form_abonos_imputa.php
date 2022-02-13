<div class="col-lg-12 col-md-12">

<form method="POST" autocomplete="off" enctype="multipart/form-data" data-ajax="false" action="<?php echo $redir;?>">

<div class="add-listing-box" Style= "margin-top: 0px">
			<div class="listing-box-header">
			<h5 style= "color: #fff"><i class="fas fa-info-circle"></i> Imputación de abonos en cuentas corrientes </h5>
			</div>
			<div class="row" Style= "margin-top: -40px">
			
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Referencia (*)</label>
			<div class="select-box">
			<select class="search form-control" name="CUENTA" required>
			<?php $cuenta_vinculada=busca_registro(ctasctes_cuentas,IDEN,DETALLE,$campo["CUENTA"],'Seleccionar cuenta vinculada');?>
			<option value="<?php echo $campo["CUENTA"];?>"> <?php echo $cuenta_vinculada; ?> </option>
			<?php select_func(ctasctes_cuentas,IDEN,DETALLE,'','',DETALLE);?>
			</select>
			</div>
			</div>
			</div>
		<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Ciclo de Facturación (*)</label>
			<div class="select-box">
			<select class="form-control" name="CICLO" required>
			<?php $ciclo=busca_registro(ciclos,IDEN,CICLO,$campo["CICLO"],'Seleccionar ciclo ');?>
			<option value="<?php echo $campo["CICLO"];?>"> <?php echo $ciclo; ?> </option>
			<?php select_func(ciclos,IDEN,CICLO,'','',CICLO);?>
			</select>
			</div>
			</div>
			</div>
			
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Fecha Desde (*)</label>
			<input type="date" name="DESDE" class="form-control" value="<?php echo $campo["DESDE"];?>" required>
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Fecha Hasta</label>
			<input type="date" class="form-control" name="HASTA" value="<?php echo $campo["HASTA"];?>" >
			</div>
			</div>
			
						
			
			
		<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>(*) 	Campos Obligatorios</label>
			<BR>
			</div>
			</div>
			
			</div>
			
			</div>


<div class="row" >		
<div class="col-lg-6 col-md-12" Style= "Text-align: center; padding:10px;">

<a href="<?php 
$modulo=enrosca("abonos/abonos",$_SESSION["clave"],$_SESSION["clave"]);
$nuevo_usuario="panel.php?modulo=".$modulo;
echo $nuevo_usuario; ?>" class="btn btn-primary pull-left" > Regresar </a>
</div>

<div class="col-lg-6 col-md-12" Style= "Text-align: center; padding:10px;">

<input type='submit' value='Confirma' name='<?php echo $accion;?>' class='btn btn-primary pull-left' />
</div>
</div>
	
		
</form>
</div>