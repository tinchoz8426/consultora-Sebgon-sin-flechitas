<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Referencia (*)</label>
			<div class="select-box">
			<select class="search form-control" name="CUENTA_VINCULADA" required>
			<?php $cuenta_vinculada=busca_registro(ctasctes_cuentas,IDEN,DETALLE,$campo["CUENTA_VINCULADA"],'Seleccionar cuenta vinculada');?>
			<option value="<?php echo $campo["CUENTA_VINCULADA"];?>"> <?php echo $cuenta_vinculada; ?> </option>
			<?php select_func(ctasctes_cuentas,IDEN,DETALLE,'','',DETALLE);?>
			</select>
			</div>
			</div>
			</div>