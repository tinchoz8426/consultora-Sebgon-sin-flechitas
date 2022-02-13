<div class="col-lg-12 col-md-12">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Eventos del sistema </h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="row">
								<table   class="table datatable table-striped table-bordered" >
									<thead>
										<tr>
											
											<th>ID</th>
											<th>Usuario</th>
											<th class="hidden-xs">Tipo de Evento</th>
											<th class="hidden-xs">Otro</th>
											<th>IP</th>
											<th>Fecha y Hora</th>
											
											
										</tr>
									</thead>
									<tbody>
										
										<?php
										$database = new db_mysql();
										$database->connect();
										$clientes_sql = "SELECT * from log ";
										$clientes_filtro = $database->list_assoc($clientes_sql);
										foreach($clientes_filtro as $row3)
										{
										//$perfil=busca_registro(empresas,USUARIO,IDEN,$row3['IDEN'],"No");
										//$aviso= busca_registro(marcas,USUARIO,IDEN,$row3['IDEN'],"No");
										echo "<tr><td>".$row3['IDEN']."</td>";
										echo "<td>".$row3['USUARIO']."</td>";
										echo "<td>".$row3['EVENTO']."</td>";
										echo "<td>".$row3['OTRO']."</td>";
										echo "<td>".$row3['IP']."</td>";
										echo "<td>".$row3['FECHA']."</td>";
										
										echo"</tr>";
										}
										
										
										
										?>										
									</tbody>
								</table>

								
							</div>
						</div>
					</div>
				</div>
				<!-- /Normal -->