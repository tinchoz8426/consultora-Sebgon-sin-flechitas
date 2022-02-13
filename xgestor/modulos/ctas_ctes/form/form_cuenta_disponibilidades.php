<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Forma de Pago o cobro (*)</label>
			<div class="select-box">
			<select class="search form-control" name="CAJA" required>
			<?php $caja=busca_registro(ctasctes_cajas,IDEN,CUENTA,$campo["CAJA"],'Seleccionar medio pago o cobranza');?>
			<option value="<?php echo $campo["CAJA"];?>"> <?php echo $caja; ?> </option>
			<?php select_func(ctasctes_cajas,IDEN,CUENTA,'','',CUENTA);?>
			</select>
			</div>
			</div>
			</div>