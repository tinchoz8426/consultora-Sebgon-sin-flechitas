
<?php
$mv_link=$_GET["mv"];
$mv=desenrosca($_GET["mv"],$_SESSION["clave"]);
$cl_pr=desenrosca($_GET["cl_pr"],$_SESSION["IDEN"]);
if ($mv==1){$compra_venta="Clientes";}
if ($mv==2){$compra_venta="Proveedores";}

?>

<div class="col-lg-12 col-md-12">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> <?php echo $compra_venta;?> Tickets </h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-lg-8 col-md-12" Style= "Text-align: right">
							</div>
							<div class="col-lg-2 col-md-12" Style= "Text-align: right">
                              <a href="<?php 
							  $modulo=enrosca("tickets/mas_ticket",$_SESSION["clave"],$_SESSION["clave"]);
							  $tipo_operacion=enrosca("1",$_SESSION["IDEN"]);
							  $nuevo_usuario="panel.php?modulo=".$modulo."&id_x=".$tipo_operacion."&mv=".$mv_link;
							  
							  echo $nuevo_usuario; ?>">
                              <button type="submit" class="btn btn-primary">cargos</button>
                              </a>  
							</div>
							<div class="col-lg-2 col-md-12" Style= "Text-align: right">
                              <a href="<?php 
							  $modulo=enrosca("tickets/mas_ticket",$_SESSION["clave"],$_SESSION["clave"]);
							   $tipo_operacion=enrosca("2",$_SESSION["IDEN"]);
							  $nuevo_usuario="panel.php?modulo=".$modulo."&id_x=".$tipo_operacion."&mv=".$mv_link;
							  
							  echo $nuevo_usuario; ?>">
                              <button type="submit" class="btn btn-primary">Nuevo Ticket</button>
                              </a>  
							</div>
							
							</div>
							<br>
							<div class="row">
								<table   class="table datatable table-striped table-bordered" >
									<thead>
										<tr>
											<th>ID</th>
											<th>Fecha Apertura</th>
											<th>Fecha Inicio</th>
											<th>Cliente</th>
											<th>Referencia</th>
											
											
											
										</tr>
									</thead>
									<tbody>
										
										<?php
										
										$database = new db_mysql();
										$database->connect();
										$clientes_sql = "SELECT * from tickets ";
										$clientes_filtro = $database->list_assoc($clientes_sql);
										$modulo_pass="tickets/mas_ticket";
							
										
										foreach($clientes_filtro as $row3)
										{
										$usuarios_pass="panel.php?modulo=".enrosca($modulo_pass.'***'.$row3['IDEN'],$_SESSION["clave"]);	
										$perfil=busca_registro(empresas,USUARIO,IDEN,$row3['IDEN'],"No");
										$aviso= busca_registro(marcas,USUARIO,IDEN,$row3['IDEN'],"No");
										
										echo "<tr><td><a href='".$nuevo_usuario,"&id=".enrosca($row3['IDEN'],$_SESSION["IDEN"])."&id_x=".enrosca($row3['TIPO_MOV'],$_SESSION["IDEN"])."'>".$row3['IDEN']."</a></td>";
										echo "<td>".$row3['FECHA_APERTURA']."</td>";
										echo "<td>".$row3['FECHA_INICIO']."</td>";
										echo "<td>".nombre_contacto($row3['CLIENTE'])."</td>";
										echo "<td>".busca_registro(tickets_motivos,IDEN,MOTIVO,$row3['MOTIVO'],'')."</td>";
										
										echo"</tr>";
										}
										
										
										
										?>										
									</tbody>
									
									
								</table>

								
							</div>
						</div>
					</div>
				</div>
