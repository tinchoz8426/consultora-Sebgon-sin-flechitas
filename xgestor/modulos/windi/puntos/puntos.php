<section class="edit-profile-area ptb-10">
            <div class="container">
                <div class="row">
                   <?php include 'modulos/opciones/menu_clientes.php' ; 
				    $modulo=enrosca("windi/puntos/mas_puntos",$_SESSION["clave"]);
					$mas_puntos="panel.php?modulo=".$modulo;
					$url_actual="panel.php?modulo=".enrosca("windi/puntos/puntos",$_SESSION["clave"]);
					
					confirma_del();
				   ?>

                    <div class="col-lg-9 col-md-7">
                        <div class="manage-listing">
                            <h3 class="title" Style= "background: #8c817c;"> <i class="fas fa-list-ol"></i> Lista de Puntos de venta </h3>


                            <div class="col-lg-12 col-md-12" Style= "Text-align: center">
                              <a href="<?php echo $mas_puntos; ?>">
                              <button type="submit" class="btn btn-primary">Agregar Punto de venta</button>
                              </a>                                                        </div>

<br>

                          <div class="listing-table table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Miniatura</th>
                                            <th scope="col">Punto de venta</th>
                                            <th scope="col">Compartir</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * from empresas_canales where EMPRESA=". $_SESSION["empresa"];
$resTask = $database->list_assoc($clientes_sql);
foreach($resTask as $row) {
if ($row['LOGO_M']==""){$miniatura="sin_logo.jpg";} else {$miniatura=$row['LOGO_M'];}
$url_winpage='http://windi.com.ar/'.$row['URL'];
$texto_wsp="". $url_winpage;
$elimina_punto="panel.php?modulo=".enrosca("windi/puntos/elimina_punto",$_SESSION["clave"])."&punto=".enrosca($row['IDEN'],$_SESSION["clave"]);
                                      echo '  <tr>
                                            <td class="listing-image">
                                                <a href="">
                                                    <img src="../biblioteca/logos_m/'.$miniatura.'" alt="listing">
                                                </a>
                                            </td>
                                            <td class="listing-info">
                                                <a>'.$row['NOMBRE'].'</a>
                                                <p><i class="fas fa-map-marker-alt"></i> '.$row['DIRECCION']." ".$row['CIUDAD']." ".$row['PROVINCIA'].'</p>

                                                <p><i class="fab fa-whatsapp"></i> '.$url_winpage .'</p>

                                          </td>
                                            <td class="date text-center"><a href="https://wa.me/'.$row['WHATSAPP'].'?text='.$texto_wsp.'" target="_blank"><img src="../img/what_logo.jpg" alt="listing"></a></td>
                                            <td class="action"><a href="'.$mas_puntos.'&punto='.enrosca($row['IDEN'], $_SESSION["IDEN"]).'" class="edit"><i class="fas fa-edit"></i></a>
											<a href="javascript:;" onclick="confirmar('."'".$elimina_punto."')".'; return false;"  ><i class="fas fa-times"></i></a></td>
</tr>';}
?>
                                    </tbody>
                                </table>
                            </div>
                            

                            
                        </div>
                    </div>

                    </div>

                </div>

            </div>

        </section>