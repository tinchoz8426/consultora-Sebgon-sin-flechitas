<!-- Modal Escenario-->
<div class="modal fade" id="nuevo-contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
        <h4 class="modal-title" id="myModalLabel">Creando una nueva aventura</h4>
      </div>
      <div id="nuevaAventura" class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="nombreAventura">Nombre de la aventura</label>
                <input type="text" class="form-control" id="nombreAventura" placeholder="Reinos de Papel y los dados trucados..." required>
              </div>
              <div class="form-group">
                <label for="tiempoJuego">Tiempo estimado de juego</label>
                <input type="number" class="form-control" id="tiempoJuego" placeholder="7 horas" required>                      
              </div>
              <div class="form-group">
                <label for="nivelJuego">Nivel de los jugadores</label>
                <input type="number" class="form-control" id="nivelJuego"  placeholder="2" required>
              </div>             
           </form>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success" id="botonAventura" onClick="alert('Botón crear')">Crear</button>        
      </div>
    </div>
  </div>
</div>