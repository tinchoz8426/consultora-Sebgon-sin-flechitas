<div class="col-lg-12 col-md-12">

<form method="POST" autocomplete="off" enctype="multipart/form-data" data-ajax="false" action="<?php echo $redir;?>">

<div class="add-listing-box" Style= "margin-top: -40px">
			<div class="listing-box-header">
			<h5 style= "color: #fff"><i class="fas fa-info-circle"></i><?php if ($tipo_movimiento==1){echo " Carga de comprobantes de ".$compra_venta." en cta. cte.";} if ($tipo_movimiento==2){echo " Carga de pagos y cobranzas";} ?></h5>
			</div>
			<div class="row" Style= "margin-top: -40px">
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label><?php echo $compra_venta; ?> (*)</label>
			<select class="search form-control" name="CLIENTE_PROVEEDOR" required>
			<?php $cliente_proveedor=nombre_contacto($campo["CLIENTE_PROVEEDOR"]);
			if ($cliente_proveedor==""){$cliente_proveedor="Seleccione ".$compra_venta;}
			?>
			<option value="<?php echo $campo["CLIENTE_PROVEEDOR"];?>"> <?php echo $cliente_proveedor; ?> </option>
			<?php select_func(contactos,numerador,Nombre,Apellido,Organizacion,Nombre,Apellido,Organizacion);?>
			
			</select>
			</div>
			</div>
			
			<?php
			if ($tipo_movimiento==1){include 'modulos/ctas_ctes/form/form_cuenta_contable.php';}
			if ($tipo_movimiento==2){include 'modulos/ctas_ctes/form/form_cuenta_disponibilidades.php';}
			?>
			
		
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Fecha Comprobante (*)</label>
			<input type="date" name="FECHA" class="form-control" value="<?php echo $campo["FECHA"];?>" required>
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Fecha Vencimiento</label>
			<input type="date" class="form-control" name="VTO_1" value="<?php echo $campo["VTO_1"];?>" >
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Tipo de Comprobante (*)</label>
			<div class="select-box">
			<select class="form-control" name="TIPO_COMPROBANTE" required>
			<?php $tipo_comprobante=busca_registro(tipo_comprobante,IDEN,TIPO,$campo["TIPO_COMPROBANTE"],'Seleccionar tipo de comprobante');?>
			<option value="<?php echo $campo["TIPO_COMPROBANTE"];?>"> <?php echo $tipo_comprobante; ?> </option>
			<?php select_func(tipo_comprobante,IDEN,TIPO,'','',TIPO);?>
			</select>
			</div>
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Número de Comprobante</label>
			<input type="text" class="form-control" name="COMPROBANTE" value="<?php echo $campo["COMPROBANTE"];?>" >  
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
$modulo=enrosca("ctas_ctes/ctas_ctes",$_SESSION["clave"],$_SESSION["clave"]);
if ($mv==1){$nuevo_usuario=$clientes_ctas_ctes;}
if ($mv==2){$nuevo_usuario=$proveedores_ctas_ctes;}
echo $nuevo_usuario; ?>" class="btn btn-primary pull-left" > Regresar </a>
</div>

<div class="col-lg-6 col-md-12" Style= "Text-align: center; padding:10px;">

<input type='submit' value='Siguiente' name='<?php echo $accion;?>' class='btn btn-primary pull-left' />
</div>
</div>
	
		
</form>
</div>