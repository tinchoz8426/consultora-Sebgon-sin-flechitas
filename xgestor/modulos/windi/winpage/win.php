<section class="edit-profile-area ptb-10">
            <div class="container">
                <div class="row">
                   <?php include 'modulos/opciones/menu_clientes.php' ; 
				   $database = new db_mysql();
					$database->connect();
				    $modulo=enrosca("windi/winpage/mas_win",$_SESSION["clave"]);
					$mas_win="panel.php?modulo=".$modulo;
					$url_actual="panel.php?modulo=".enrosca("windi/puntos/puntos",$_SESSION["clave"]);
					confirma_del();
				   
				   $filtro_cambio=desenrosca($_GET['id'],$_SESSION["IDEN"]);
				   $cambio_de_estado=desenrosca($_GET['ce'],$_SESSION["IDEN"]);
				   if (($cambio_de_estado=="cambia_estado") and ($filtro_cambio<>""))
				   {include include 'modulos/windi/winpage/cambia_estado.php';}
				   //echo $cambio_de_estado." llllllll ".$filtro_cambio. " ooooooo ".$_SESSION["IDEN"];
				   ?>

                    <div class="col-lg-9 col-md-7">
                        <div class="manage-listing">
                            <h3 class="title" Style= "background: #8c817c;"> <i class="fas fa-list-ol"></i> Listado de campañas (emp) <?php echo $_SESSION["empresa"]; ?> </h3>


                            <div class="col-lg-12 col-md-12" Style= "Text-align: center">
                              <a href="<?php echo $mas_win; ?>">
                              <button type="submit" class="btn btn-primary">Crear Winpage</button>
                              </a>                                                        </div>

<br>

                          <div class="listing-table table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Winpage</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php

$clientes_sql = "SELECT * from avisos_winpage where EMPRESA=". $_SESSION["empresa"];
$resTask = $database->list_assoc($clientes_sql);
foreach($resTask as $row) {
$estado="";
$url_winpage='http://myaweb.com.ar/windi/'.$row['URL'];
$elimina_win="panel.php?modulo=".enrosca("windi/winpage/elimina_win",$_SESSION["clave"])."&id=".enrosca($row['IDEN'],$_SESSION["clave"]);
$modi_win="panel.php?modulo=".enrosca("windi/winpage/mas_win",$_SESSION["clave"]);
$pre_view="panel.php?modulo=".enrosca("windi/winpage/previa",$_SESSION["clave"]);
$cambia_estado="panel.php?modulo=".enrosca("windi/winpage/win",$_SESSION["clave"]);
if ($row['ESTADO']<>1){$estado=" non-active ";$estado_texto="inactiva";} else {$estado_texto="activa";}
echo '  <tr>
<td class="listing-info">
<a>'.$row['TITULO'].'</a>
<p><i class="fas fa-map-marker-alt"></i> '.$row['BAJADA'].'</p>
<p><i class="fab fa-whatsapp"></i> Validez de la oferta: '.conviertefechas($row['HASTA'],"C") .'</p>
</td>
<td class="date text-center"><a href="'.$cambia_estado.'&id='.enrosca($row['IDEN'], $_SESSION["IDEN"]).'&ce='.enrosca('cambia_estado', $_SESSION["IDEN"]).'" ><span class="status '.$estado.'">'.$estado_texto.'</spam></a></td>

<td class="action"><a href="'.$modi_win.'&id='.enrosca($row['IDEN'], $_SESSION["IDEN"]).'" class="edit"><i class="fas fa-edit"></i></a>
<a href="'.$pre_view.'&id='.enrosca($row['IDEN'], $_SESSION["IDEN"]).'" class="edit"><i class="fas fa-eye"></i></a>
<a href="javascript:;" onclick="confirmar('."'".$elimina_win."')".'; return false;"  ><i class="fas fa-times"></i></a></td>
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