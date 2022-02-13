<?php (include "modulos/control-sesion.php");?>
<br>
<?php
include('clases/clasesbasicas.php'); 
include('clases/form_class.php'); 	
$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * from aplicaciones";
$resTask = $database->list_assoc($clientes_sql);
$coma="";
$agrega_aplicacion="'emerge.php?modulo=tools/crud&iframe=true&width=90%&height='".  'rel="modalBox"' ;
?>	
<div id="panelcontactos" class="row">
	<div class="col-md-12">
		<div class="widget box">
		<div class="widget-header">
		<h4><i class="icon-reorder"></i> Administrador de Aplicaciones <a href=<?php echo $agrega_aplicacion;?> class="label label-danger label-mini"> Nuevo </a> </h4>
		<div class="toolbar no-padding">
		<div class="btn-group">
		<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
		</div>
		</div>
		</div>
		<div class="widget-content no-padding">
			<table id="tareas" class="table  table-condensed table-bordered table-hover table-checkable  table-responsive datatable" data-display-length="25">
			<thead>
			<tr>
			<th data-hide="phone">Id</th>
			<th data-hide="phone">NOMBRE</th>
			<th data-hide="phone">URL</th>
			<th data-hide="phone">URL2</th>
			<th data-hide="phone">ICONO</th>
			<th data-phone="phone">UBICACIÓN</th>
			</tr>
			</thead>
			<tbody>
									<?php
									foreach($resTask as $rowTask) {
									$modifica="'emerge.php?modulo=tools/crud&IDEN=".$rowTask['IDEN']."&iframe=true&width=&height='".  'rel="modalBox"' ;
									$agrega_item="'emerge.php?modulo=tools/permisos&IDEN=".$rowTask['IDEN']."&presupuesto=".$item_presupuesto."&iframe=true&width=&height='".  'rel="modalBox"' ;
									echo '<tr>';
									echo  '<td><a href='.$modifica.'>'.$rowTask['IDEN'].'</a></td>';
									echo  '<td><a href='.$agrega_item.'>'.$rowTask['NOMBRE'].'</a></td>';
									echo  '<td><a href='.$imprime_presupuesto.'>'.$rowTask['URL'].'</a></td>';
									echo '<td>'.$rowTask['URL2'].'</td>';
									echo '<td>'.$rowTask['ICONO'].'</td>';										
									echo '<td>'.$rowTask['UBICACION'].'</td>';
									echo ' </tr>';
									}
									?>
			</tbody>
			</table>
		</div>
		</div>
	</div>
	</div>