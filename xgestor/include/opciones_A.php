<div class="main-header-area header-sticky">

            <div class="container">

                <div class="classy-nav-container breakpoint-off">

                    <!-- Classy Menu -->

                    <nav class="classy-navbar justify-content-between" id="listingNav">



                        <!-- Logo -->

                        <a class="nav-brand" href="index.html"><img src="../img/logo.png" alt="logo"></a>



                        <!-- Navbar Toggler -->

                        <div class="classy-navbar-toggler">

                            <span class="navbarToggler"><span></span><span></span><span></span></span>

                        </div>



                        <!-- Menu -->

                        <div class="classy-menu">



                            <!-- close btn -->

                            <div class="classycloseIcon">

                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>

                            </div>



							<?php 

							$modulo_7="usuarios/usuarios_del_sistema";
							$modulo_11="ctas_ctes/ctas_ctes_res";
							$modulo_15="ctas_ctes/ctas_ctes";
							$modulo_12="abonos/abonos";
							$modulo_8="log/log";
							$modulo_14="abonos/imputa_abonos";
							$modulo_16="cajas/cajas";
							$modulo_9="estadistica/avisos_activos";
							$modulo_17="tickets/tickets";
							$modulo_13="profiles/profiles";
							$ctas_ctes="panel.php?modulo=".enrosca($modulo_11,$_SESSION["clave"]);
							$clientes_ctas_ctes="panel.php?modulo=".enrosca($modulo_11,$_SESSION["clave"])."&mv=".enrosca("1",$_SESSION["clave"]);
							$proveedores_ctas_ctes="panel.php?modulo=".enrosca($modulo_11,$_SESSION["clave"])."&mv=".enrosca("2",$_SESSION["clave"]);
							$log="panel.php?modulo=".enrosca($modulo_8,$_SESSION["clave"]);
							$abonos="panel.php?modulo=".enrosca($modulo_12,$_SESSION["clave"]);
							$activos="panel.php?modulo=".enrosca($modulo_9,$_SESSION["clave"]);
							$abonos_imputa="panel.php?modulo=".enrosca($modulo_14,$_SESSION["clave"]);
							$cajas_saldos="panel.php?modulo=".enrosca($modulo_16,$_SESSION["clave"]);
							$tickets="panel.php?modulo=".enrosca($modulo_17,$_SESSION["clave"]);
							$profiles="panel.php?modulo=".enrosca($modulo_13,$_SESSION["clave"]);

							?>

                            <!-- Nav Start -->

                            <div class="classynav">

                                <ul>
								
								<li><a href="#">Soporte</a>

										<ul class="dropdown">

                                           

                                            
											<li><a href="<?php echo $tickets;?>">Tickets</a></li>
											<li><a href="<?php echo $profiles;?>">Profiles</a></li>
																			
											

											

                                            

										</ul>

									</li> 
									
									

                                   <li><a href="#">Abonos</a>

										<ul class="dropdown">

                                           

                                            
											<li><a href="<?php echo $abonos;?>">Abonos</a></li>
											<li><a href="<?php echo $abonos_imputa;?>">Imputar abonos</a></li>
																			
											

											

                                            

										</ul>

									</li> 

 <li><a href="#">Ctas. Ctes.</a>

										<ul class="dropdown">

                                           

                                            
											
											<li><a href="<?php echo $clientes_ctas_ctes;?>">Clientes Ctas. Ctes.</a></li>
											
											<li><a href="<?php echo $proveedores_ctas_ctes;?>">Proveedores Ctas. Ctes.</a></li>

											

                                            

										</ul>

									</li> 
									
									

<li><a href="#">Disponibilidades</a>

										<ul class="dropdown">

                                           

                                            
											
											
											
											<li><a href="<?php echo $cajas_saldos;?>">Cajas saldos</a></li>
											
											
											

											

                                            

										</ul>

									</li> 
									
									<li><a href="#">Configuración</a>

										<ul class="dropdown">

                                           

                                            
											
											
											
											<li><a href="<?php echo $log;?>">Log</a></li>
											<li><a href="<?php echo $usuarios;?>">Usuarios</a></li>
											
											

											

                                            

										</ul>

									</li> 
									
                                    <li class="right-side">

                                        <ul>

                                            



                                            <li><a href="logout.php" class="btn btn-primary"> Salir</a></li>

                                        </ul>

                                    </li>

                                </ul>

                            </div>

                            <!-- Nav End -->

                        </div>

                    </nav>

                </div>

            </div>

        </div>
