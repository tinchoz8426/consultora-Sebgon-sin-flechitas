<?php
$modulo=enrosca("clientes/clientes",$_SESSION["clave"]);
$mi_perfil="panel.php?modulo=".$modulo;
$modulo=enrosca("windi/puntos/puntos",$_SESSION["clave"]);
$mis_puntos="panel.php?modulo=".$modulo;
$modulo=enrosca("windi/winpage/win",$_SESSION["clave"]);
$mi_winpage="panel.php?modulo=".$modulo;
?>

 <div class="col-lg-3 col-md-5">
                        <div class="user-profile-menu">


                            <div class="user-menu">
                                <h5 class="title mt-0" Style= "color: #ff4e00;">PANEL <?php echo " (Plan: ". $_SESSION["plan"].")"; ?> <i class="fas fa-cog"></i></h5>

                                <ul>
                                    <li><a href="<?php echo $mi_perfil;?>"><i class="far fa-user"></i> Mi perfil</a></li>
                                    <li><a href="<?php echo $mis_puntos;?>"><i class="fas fa-map-marker-alt"></i> Puntos de venta</a></li>
                                    <li><a href="<?php echo $mi_winpage;?>"><i class="far fa-file"></i> WinPage</a></li>
                                    

                                </ul>
                            </div>
                        </div>
                    </div>