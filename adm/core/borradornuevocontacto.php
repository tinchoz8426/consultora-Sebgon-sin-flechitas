<form class="form-horizontal fill-up separate-sections" id="insertar" name="insertar" method="post" action="">
<label> Tratamiento:</label>
<select input class="apellido" name="Tratamiento" id="Tratamiento">
<option value="Sr.">Sr.
<option value="Sra.">Sra.
<option value="Org.">Organizacion
<option value="Orga.">Organismo
</select>

<label> Nombre:</label>
<input type="text" name="Nombre"  id="Nombre" placeholder="Nombre" />
<label> Apellido:</label>
<input type="text" name="Apellido"  id="Apellido" placeholder="Apellido" />
<label>Organización / Organismo:</label>
<input class="apellido" name="Organizacion" type="text" id="Organizacion"  />
<label> Email:</label>
<input class="apellido" name="Email" type="text" id="Email"  />

<label> Grupo </label>
<select input class="apellido" name="Clasificacion" id="Clasificación">
<option value="1">1 Contactos
<option value="2">2 Proveedor
<option value="3">3 Cliente
<option value="4">4 Amigos
<option value="5">5 Marketing
<option value="6">6 Fiscal
<option value="7">7 Staff
<option value="8">8 Otros
</select>

<?php include "campostel.php"; ?>
<?php include "campostelwork2.php"; ?>
<?php include "campostelfax.php"; ?>
<?php include "campostelmovil.php"; ?>
<?php include "campostelpart.php"; ?>
<label>Sitio Web:</label>
<input class="apellido" name="Web" type="text" id="Web" size="40" maxlength="60" />
<label>Notas:</label>
<textarea class="apellido" name="Notas" id="Notas" cols="42" rows="7"></textarea>
<label> Cumpleaños : </label>
<label> Día </label>
<input class="" name="cumpledia" type="text" id="cumpledia" size="2" maxlength="2" />
<label> Mes </label>
<input class="" name="cumplemes" type="text" id="cumplemes" size="2" maxlength="2" />
<?php include "domicilios.php"; ?>
<div class="modal-footer">
<input type="submit" name="submit" value="Agregar" class="btn btn-blue" />
<input type="hidden" name="action" value="add" />
<button class="btn btn-default" data-dismiss="modal">Cancelar</button>
</div>
</form>
<?php if ($state) { ?>
<p><em>Registro insertado correctamente</em></p>
<?php } ?>
