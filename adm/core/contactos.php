	
<div class="box">
		<div class="box-header"><span class="title">Contactos</span> 
		<ul class="box-toolbar">
		<li><span class="label label-blue"><?php include ("include/cuentareg.php"); ?></span></li>
		</ul> 
		</div>
				
		<a data-toggle="modal" href="#nuevo-contacto" class="btn btn-gray"><i class="icon-mobile-phone icon-1x"></i> Nuevo</a>
		<a data-toggle="modal" href="#modal-form" class="btn btn-gray"><i class="icon-plus-sign"></i> Imprimir</a>
		<a data-toggle="modal" href="#modal-form" class="btn btn-gray"><i class="icon-plus-sign"></i> Exportar</a>
		<a data-toggle="modal" href="#modal-form" class="btn btn-gray"><i class="icon-plus-sign"></i> Mailing</a>
					<div class="box-content">
					<!-- find me in partials/data_tables_custom -->
								<div class="table-responsive">
								<table class="table table-striped">
								<thead>
								<tr>
								<th>Nombre</th>
								<th>Email</th>
								</tr>
								</thead>
								<tbody>
								<?php include("include/listacontactos.php"); ?>  
								</tbody>
								</table>
								</div>
					</div>
</div>
