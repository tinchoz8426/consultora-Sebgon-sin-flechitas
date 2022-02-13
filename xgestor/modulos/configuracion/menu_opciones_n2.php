<div class="col-lg-12 col-md-12">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Sub-opciones correspondientes a</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content">
								<table   class="table datatable table-striped table-bordered" >
									<thead>
										<tr>
											
											<th>IDEN</th>
											<th>NOMBRE</th>
											<th class="hidden-xs">VINCULO</th>
											<th>LINK</th>
											<th>ORDEN</th>
										</tr>
									</thead>
									<tbody>
										
										<?php
										$nuevo_link=enrosca("configuracion/crud_opciones_n2",$_SESSION["clave"]);
										$nuevo_link2=enrosca("configuracion/menu_opciones",$_SESSION["clave"]);
										$filtro=var_url($_GET['modulo'],1);
										//echo $filtro;
										$database = new db_mysql();
										$database->connect();
										$clientes_sql = "SELECT * from opciones_nivel2 WHERE SUPERIOR=".$filtro." order by ORDEN";
										$clientes_filtro = $database->list_assoc($clientes_sql);
										$modulo="configuracion/crud_opciones_n2";
										foreach($clientes_filtro as $row3)
										{
											$parametros=enrosca($modulo.'***'.$row3['IDEN'],$_SESSION["clave"]);
											//$parametros=desenrosca($parametros,$_SESSION["clave"]);
											echo "<tr><td><a href='panel.php?modulo=".$parametros."'>".$row3['IDEN']."</a></td><td>".$row3['NOMBRE']."</td><td>".desenrosca($parametros,$_SESSION["clave"])."</td><td>".$row3['LINK']."</td><td>".$row3['ORDEN']."</td></tr>";}
										?>										
									</tbody>
								</table>

								
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-12 col-md-12" style="padding:20px; text-align:right">
				<a href='panel.php?modulo=<?php echo $nuevo_link; ?>' class="btn btn-primary" >Nuevo</a>
				
				<a href='panel.php?modulo=<?php echo $nuevo_link2; ?>' class="btn btn-primary-black" >Regresar</a>
				</div>
				<!-- /Normal -->