<div class="col-lg-12 col-md-12">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Usuarios registrados </h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12" Style= "Text-align: right">
                              <a href="<?php 
							  $modulo=enrosca("usuarios/mas_user",$_SESSION["clave"],$_SESSION["clave"]);
							  $nuevo_usuario="panel.php?modulo=".$modulo;
							  
							  echo $nuevo_usuario; ?>">
                              <button type="submit" class="btn btn-primary">nuevo usuario</button>
                              </a>  
							</div>
							<div class="row">
								<table   class="table datatable table-striped table-bordered" >
									<thead>
										<tr>
											<th>ID</th>
											<th>Nombre</th>
											<th>Apellido</th>
											<th class="hidden-xs">Usuario</th>
											<th class="hidden-xs">Contraseña</th>
											<th>Alta</th>
											<th>Perfil Facturación</th>
											<th>Plan</th>
											<th>Contraseña</th>
											
										</tr>
									</thead>
									<tbody>
										
										<?php
										$id_usuario=var_url($_GET['modulo'],1);
										//echo "usuario seleccionado ".$id_usuario;
										if ($id_usuario<>"")
										
										{
										$usuario_reenvio=busca_registro(usuarios,IDEN,USUARIO,$id_usuario,"");
										$usuario_clave=busca_registro(usuarios,IDEN,PIN,$id_usuario,"");
										//echo "datos localizados ". $usuario_reenvio." ".$usuario_clave;
										if (($usuario_reenvio<>"") and ($usuario_clave <>""))
										
										{									
										include "modulos/usuarios/envia_pass.php";										
										}
										
										else
										
										{
										exito("no se pudo reenviar la contraseña, el usuario o la contraseña están vacíos","");	
										}
									    }
										$id_usuario="";
										
										$database = new db_mysql();
										$database->connect();
										$clientes_sql = "SELECT * from usuarios where GRUPO=4 ";
										$clientes_filtro = $database->list_assoc($clientes_sql);
										$modulo_pass="usuarios/usuarios_del_sistema";
							
										
										foreach($clientes_filtro as $row3)
										{
											
										$usuarios_pass="panel.php?modulo=".enrosca($modulo_pass.'***'.$row3['IDEN'],$_SESSION["clave"]);	
										$perfil=busca_registro(empresas,USUARIO,IDEN,$row3['IDEN'],"No");
										$aviso= busca_registro(marcas,USUARIO,IDEN,$row3['IDEN'],"No");
										
										echo "<tr><td><a href='".$nuevo_usuario,"&id=".enrosca($row3['IDEN'],$_SESSION["IDEN"])."'>".$row3['IDEN']."</a></td>";
										echo "<td>".$row3['NOMBRE']."</td>";
										echo "<td>".$row3['APELLIDO']."</td>";
										echo "<td>".$row3['USUARIO']."</td>";
										echo "<td>".$row3['PIN']."</td>";
										echo "<td>".$row3['REGISTRO']."</td>";
										echo "<td>".$perfil."</td>";
										echo "<td>".busca_registro(planes,IDEN,DETALLE,$row3['PLAN'],"sin plan")."</td>";
										//echo '<td>  <a href="" data-toggle="modal" data-descr="'.$row3['IDEN'].'" data-target="#exampleModal">reenvía</a></td>';
										echo '<td>  <a href="'.$usuarios_pass.'" onclick="return confirm('."'¿Reenvía contraseña a ".$row3['USUARIO']."?'".')">reenvía</a></td>';
										echo"</tr>";
										}
										
										
										
										?>										
									</tbody>
								</table>

								
							</div>
						</div>
					</div>
				</div>
<!-- Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       ¿Reenvía Contraseña? <?php echo $id; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Si</button>
      </div>
    </div>
  </div>
</div>
				<!-- /Normal -->