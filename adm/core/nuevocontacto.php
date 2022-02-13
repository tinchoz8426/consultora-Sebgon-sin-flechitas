<div id="nuevo-contacto" class="modal fade">
	<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h6 id="modal-formLabel">Nuevo Contacto</h6>
				</div>
				
					<div class="modal-body">
					<?php include "core/solapas.php"; ?>
					</div>
			
				<div class="modal-footer">
					<input type="submit" name="submit" value="Agregar" class="btn btn-blue" />
					<input type="hidden" name="action" value="add" />
					<button class="btn btn-default" data-dismiss="modal">Cancelar</button>
					</form>
					<?php if ($state) { ?>
					<p><em>Registro insertado correctamente</em></p>
					<?php } ?>
				</div>
			</div>
	</div>
</div>
<!-- find me in partials/modal_tables -->
