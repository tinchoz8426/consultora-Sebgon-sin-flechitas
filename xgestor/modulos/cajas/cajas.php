<script>

$(document).ready(function() {
    $('#ctasctes').DataTable( {
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
			
			$("#total_ctasctes").text(total);
			$("#total_fitlrado").text(pageTotal);
			$("#total_registros").text(end);
			
        }
    } );



//var total22 = api.column(4).data().sum();


} );

</script>

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
								<h4><i class="icon-reorder"></i> <?php echo $compra_venta;?> Cajas </h4>
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
							  $modulo=enrosca("ctas_ctes/mas_movi",$_SESSION["clave"],$_SESSION["clave"]);
							  $tipo_operacion=enrosca("1",$_SESSION["IDEN"]);
							  $nuevo_usuario="panel.php?modulo=".$modulo."&id_x=".$tipo_operacion."&mv=".$mv_link;
							  
							  echo $nuevo_usuario; ?>">
                              <button type="submit" class="btn btn-primary">cargos</button>
                              </a>  
							</div>
							<div class="col-lg-2 col-md-12" Style= "Text-align: right">
                              <a href="<?php 
							  $modulo=enrosca("ctas_ctes/mas_movi",$_SESSION["clave"],$_SESSION["clave"]);
							   $tipo_operacion=enrosca("2",$_SESSION["IDEN"]);
							  $nuevo_usuario="panel.php?modulo=".$modulo."&id_x=".$tipo_operacion."&mv=".$mv_link;
							  
							  echo $nuevo_usuario; ?>">
                              <button type="submit" class="btn btn-primary">cajas</button>
                              </a>  
							</div>
							
							</div>
							<br>
							<div class="col-lg-12 col-md-12">
								<table   class="table datatable table-striped table-bordered" id="ctasctes">
									<thead>
										<tr>
											<th>ID</th>
											<th>Fecha</th>
											<th>Caja</th>
											<th class="hidden-xs">REF.</th>
											<th class="hidden-xs">Importe</th>
											
											
										</tr>
									</thead>
									<tbody>
										
										<?php
										
										$database = new db_mysql();
										$database->connect();
										$clientes_sql = "SELECT * from ctasctes WHERE TIPO_MOV=2";
										$clientes_filtro = $database->list_assoc($clientes_sql);
										$modulo_pass="ctas_ctes/mas_movi";
							
										
										foreach($clientes_filtro as $row3)
										{
										if($row3['TIPO_MOV']==1){$detalle_movimiento=busca_registro(ctasctes_cuentas,IDEN,DETALLE,$row3['CUENTA_VINCULADA'],'error verifique la carga')." ".$row3['DETALLE'];}
										
										
										if($row3['TIPO_MOV']==2){$detalle_movimiento=busca_registro(ctasctes_cajas,IDEN,CUENTA,$row3['CAJA'],'error verifique la carga')." ".$row3['DETALLE'];}
										
										if (($row3['TIPO_MOV']==2) AND ($row3['COMPRA_VENTA']==2) ){$row3['IMPORTE']=$row3['IMPORTE']*-1;}
										
										$usuarios_pass="panel.php?modulo=".enrosca($modulo_pass.'***'.$row3['IDEN'],$_SESSION["clave"]);	
										$perfil=busca_registro(empresas,USUARIO,IDEN,$row3['IDEN'],"No");
										$aviso= busca_registro(marcas,USUARIO,IDEN,$row3['IDEN'],"No");
										
										echo "<tr><td><a href='".$nuevo_usuario,"&id=".enrosca($row3['IDEN'],$_SESSION["IDEN"])."&id_x=".enrosca($row3['TIPO_MOV'],$_SESSION["IDEN"])."'>".$row3['IDEN']."</a></td>";
										echo "<td>".$row3['FECHA']."</td>";
										echo "<td>".busca_registro(ctasctes_cajas,IDEN,CUENTA,$row3['CAJA'])."</td>";
										echo "<td>".nombre_contacto($row3['CLIENTE_PROVEEDOR'])." / ".$row3['DETALLE']."</td>";
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
