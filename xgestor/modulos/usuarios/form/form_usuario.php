<form method="POST" autocomplete="off">
                                                <div class="edit-profile-information">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Nombre</label>
                                                                <input type="text" class="form-control" name= "NOMBRE" value="<?php echo $campo["NOMBRE"];?>" style=" border: 1px solid #dee2e6;" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Apellido</label>
                                                                <input type="text" class="form-control" name= "APELLIDO" value="<?php echo $campo["APELLIDO"];?>" style=" border: 1px solid #dee2e6;" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Usuario</label>
                                                                <input type="text" class="form-control" name= "USUARIO" value="<?php echo $campo["USUARIO"];?>" style=" border: 1px solid #dee2e6;" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control" name= "EMAIL" value="<?php echo $campo["EMAIL"];?>" style=" border: 1px solid #dee2e6;" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Contraseña</label>
                                                                <input type="text" class="form-control" name= "PIN" value="<?php echo $campo["PIN"];?>" style=" border: 1px solid #dee2e6;" required>
                                                            </div>
                                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Plan (requerido)</label>
                                                <div class="select-box">
													<select class="form-control" name= "PLAN" style=" line-height: 1.3 solid #ff4e00;" required>
														<option value="<?php echo $campo["PLAN"];?>"><?php echo busca_registro(planes,IDEN,DETALLE,$campo["PLAN"],"Seleccione un plan");?></option>
														<option value="1">Empresa</option>                                                       
														<option value="2">Particular</option>
														
													</select>
												</div>
                                            </div>
                                        </div>

                                                        

                                                        <div class="col-lg-6 col-md-12">
                                                            
															<input type='submit' value='Guardar cambios' name='<?php echo $accion;?>' class='btn btn-primary pull-left' />
															
                                                        </div>
														<div class="col-lg-6 col-md-12">
                                                            
															<a href="<?php 
							  $modulo=enrosca("usuarios/usuarios_del_sistema",$_SESSION["clave"]);
							  $nuevo_usuario="panel.php?modulo=".$modulo;
							  
							  echo $nuevo_usuario; ?>" class="btn btn-primary">Regresar  </a> 
															
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>