 <div id="nuevatarea" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h6 id="modal-formLabel">Nueva Tarea</h6>
      </div>
      <div class="modal-body">
        <form class="form-horizontal fill-up separate-sections">
          <div>
            <label>Describa la tarea</label>
            <input type="text" name="regular" placeholder="Tarea" />
          </div>

          <div class="divider"><span></span></div>

         
          <div class="divider"><span></span></div>

          <div>
		  <label>Notas</label>
            <textarea rows="4" placeholder="Notas y comentarios"></textarea>
          </div>

          
        </form>
<?php include "include/searchcontactosno.php"; ?>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-blue">Grabar</button>
      </div>
    </div>
  </div>
</div>
<!-- find me in partials/modal_tables -->


        <!-- find me in partials/data_tables_custom -->