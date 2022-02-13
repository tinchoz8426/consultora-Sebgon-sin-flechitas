<script>

$(document).ready(function() {
    $('#abonos').DataTable( {
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
 
 
            // Total over all pages
            total = api
                .column( 4)
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 4 ).footer() ).html(
                ''+pageTotal +' ( '+ total +' total)'
            );
			
			$("#total_abonos").text(total);
			$("#total_fitlrado").text(pageTotal);
			$("#total_registros").text(end);
			
        }
    } );



//var total22 = api.column(4).data().sum();


} );

</script>


<div class="col-lg-12 col-md-12">
					<div class="col-md-12">
						<div class="widget box">
							<div class="row">
								<div class="col-md-6">
								<h4><i class="icon-reorder"></i> Abonos </h4> 
								</div>
								<div class="col-md-6" style="text-align:right;">
								<a href="<?php   $modulo=enrosca("abonos/mas_abonos",$_SESSION["clave"],$_SESSION["clave"]);  $nuevo_usuario="panel.php?modulo=".$modulo;
							  
							  
							  echo $nuevo_usuario; ?>" class="btn btn-primary btn-sm">
                              +
                              </a> 
								</div>
							</div>
							<br>
							
							<div class="row">
							<div class="col-lg-4 col-md-4">
                                    <div class="dashboard-box">
                                        
                                        <h5>Sub-Total</h5>
										<hr>
                                        <h5><span id="total_fitlrado"></span></h5>
                                        
                                    </div>
                            </div>
							
							<div class="col-lg-4 col-md-4">
                                    <div class="dashboard-box">
                                        
                                        <h5>Total</h5>
										<hr>
                                        <h5><span id="total_abonos"></span></h5>
                                        
                                    </div>
                            </div>
							
							<div class="col-lg-4 col-md-4">
                                    <div class="dashboard-box">
                                        
                                        <h5>Mostrando</h5>
										<hr>
                                        <h5><span id="total_registros"></span> reg.</h5>
                                        
                                    </div>
                            </div>
							
							</div>
							
							<br>
							<div class="row">
								<table   id="abonos" class="table datatable table-striped table-bordered display" >
									<thead>
										<tr>
											<th>ID</th>
											
											<th>Cliente / Prov.</th>
											
											<th class="hidden-xs">Referencia</th>
											<th class="hidden-xs">Ciclo</th>
											<th class="hidden-xs">Precio</th>
											
											
										</tr>
									</thead>
									<tbody>
										
										<?php
										
										$database = new db_mysql();
										$database->connect();
										$clientes_sql = "SELECT * from abonos ";
										$clientes_filtro = $database->list_assoc($clientes_sql);
										$modulo_pass="abonos/mas_abonos";
							
										
										foreach($clientes_filtro as $row3)
										{
											
										$usuarios_pass="panel.php?modulo=".enrosca($modulo_pass.'***'.$row3['IDEN'],$_SESSION["clave"]);	
										$perfil=busca_registro(empresas,USUARIO,IDEN,$row3['IDEN'],"No");
										$aviso= busca_registro(marcas,USUARIO,IDEN,$row3['IDEN'],"No");
										
										echo "<tr><td><a href='".$nuevo_usuario,"&id=".enrosca($row3['IDEN'],$_SESSION["IDEN"])."'>".$row3['IDEN']."</a></td>";
										echo "<td>".nombre_contacto($row3['CLIENTE_PROVEEDOR'])."</td>";
										
										echo "<td>".busca_registro(ctasctes_cuentas,IDEN,DETALLE,$row3['CUENTA'],'error verifique la carga')." (".$row3['DETALLE'].")</td>";
										echo "<td>".busca_registro(ciclos,IDEN,CICLO,$row3['CICLO'])."</td>";
										echo "<td>".$row3['IMPORTE']."</td>";
										echo"</tr>";
										}
										
										
										
										?>										
									</tbody>
									
									<tfoot>
										<tr>
											<th colspan="4" style="text-align:right">Total:</th>
											<th></th>
										</tr>
									</tfoot>
								</table>

								
							</div>
						</div>
					</div>
				</div>
