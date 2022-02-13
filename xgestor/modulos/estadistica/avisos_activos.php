<div class="col-lg-12 col-md-12">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Avisos Activos </h4>
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
											<th class="hidden-xs">MARCA</th>
											<th class="hidden-xs">PROVINCIA</th>
											<th>PAIS</th>
											<th>RUBRO</th>
											<th>VÁLIDO DESDE</th>
											<th>VÁLIDO HASTA</th>
											
											
										</tr>
									</thead>
									<tbody>
										
										<?php
										$database = new db_mysql();
										$database->connect();
										$clientes_sql = "SELECT * from marcas ";
										$clientes_filtro = $database->list_assoc($clientes_sql);
										foreach($clientes_filtro as $row3)
										{
										$rubro=busca_registro(rubros,IDEN,RUBRO,$row3['RUBRO'],"No");
										//$aviso= busca_registro(marcas,USUARIO,IDEN,$row3['IDEN'],"No");
										echo "<tr><td>".$row3['IDEN']."</td>";
										echo "<td>".$row3['USUARIO']."</td>";
										echo "<td>".$row3['MARCA']."</td>";
										echo "<td>".$row3['ESTADO']."</td>";
										echo "<td>".$row3['PAIS']."</td>";
										echo "<td>".$rubro."</td>";
										echo "<td>".$row3['DESDE']."</td>";
										echo "<td>".$row3['HASTA']."</td>";
										
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