	
<div class="box">
		<div class="box-header"><span class="title">Contactos</span> 
		<ul class="box-toolbar">
		<li><span class="label label-blue"><?php include ("include/cuentareg.php"); ?></span></li>
		</ul> 
		</div>
				
		<a data-toggle="modal" href="#nuevo-contacto" class="btn btn-green"><i class="icon-mobile-phone icon-1x"></i> Nuevo</a>
		
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
								<?php include("managearticulos.php"); ?>  
								</tbody>
								</table>
								</div>
					</div>
</div>
