<div class="col-lg-12 col-md-12">

<form method="POST" autocomplete="off" enctype="multipart/form-data" data-ajax="false" action="<?php echo $redir;?>">

<div class="add-listing-box" Style= "margin-top: -40px">
			<div class="listing-box-header">
			<h5 style= "color: #fff"><i class="fas fa-info-circle"></i> Alta / Modificación Abonos </h5>
			</div>
			<div class="row" Style= "margin-top: -40px">
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Cliente (*)</label>
			<select class="search form-control" name="CLIENTE_PROVEEDOR" required>
			<?php $cliente_proveedor=nombre_contacto($campo["CLIENTE_PROVEEDOR"]);
			if ($cliente_proveedor==""){$cliente_proveedor="Seleccione Cliente";}
			?>
			<option value="<?php echo $campo["CLIENTE_PROVEEDOR"];?>"> <?php echo $cliente_proveedor; ?> </option>
			<?php select_func(contactos,numerador,Nombre,Apellido,Organizacion,Nombre,Apellido,Organizacion);?>
			
			</select>
			</div>
			</div>
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
			<label>Fecha Alta (*)</label>
			<input type="date" name="FECHA_ALTA" class="form-control" value="<?php echo $campo["FECHA_ALTA"];?>" required>
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Fecha Inicio</label>
			<input type="date" class="form-control" name="FECHA_INICIO" value="<?php echo $campo["FECHA_INICIO"];?>" >
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
			<label>Importe total con impuestos (*)</label>
			<input type="text" class="form-control" placeholder="sin signo peso" name="IMPORTE" value="<?php echo $campo["IMPORTE"];?>" required >
			</div>
			</div>
			
			
			
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Moneda (*)</label>
			<select class="form-control" name="MONEDA" required>
			<?php $moneda=busca_registro(monedas,IDEN,NOMBRE,$campo["MONEDA"]);
			if ($moneda==""){$moneda="Seleccionar moneda";}
			?>
			<option value="<?php echo $campo["MONEDA"];?>"> <?php echo $moneda; ?> </option>
			<?php select_func(monedas,IDEN,NOMBRE);?>
			
			</select>
			</div>
			</div>
			
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Observaciones</label>
			<textarea class="form-control" rows="5" name="DETALLE"><?php echo $campo["DETALLE"];?></textarea>
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

<input type='submit' value='Siguiente' name='<?php echo $accion;?>' class='btn btn-primary pull-left' />
</div>
</div>
	
		
</form>
</div>