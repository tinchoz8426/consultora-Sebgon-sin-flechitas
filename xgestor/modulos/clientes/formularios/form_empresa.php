<form method="POST" autocomplete="off">
                                                <div class="edit-profile-information">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Nombre o razón social (*)</label>
                                                                <input type="text" class="form-control" name= "RAZON_SOCIAL"value="<?php echo $campo["RAZON_SOCIAL"];?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Dirección / Calle (*)</label>
                                                                <input type="text" class="form-control" name= "CALLE" value="<?php echo $campo["CALLE"];?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-12">
                                                            <div class="form-group">
                                                                <label>Número (*)</label>
                                                                <input type="text" class="form-control" name= "NUMERO" value="<?php echo $campo["NUMERO"];?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-12">
                                                            <div class="form-group">
                                                                <label>Piso / Departamento</label>
                                                                <input type="text" class="form-control" name= "PISO" value="<?php echo $campo["PISO"];?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Ciudad (*)</label>
                                                                <input type="text" class="form-control" name= "CIUDAD" value="<?php echo $campo["CIUDAD"];?>" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Provincia / Estado (*)</label>
                                                                <input type="text" class="form-control" name= "ESTADO" value="<?php echo $campo["ESTADO"];?>" required>
                                                            </div>
                                                        </div>
										
										<?php $pais_nombre=busca_registro(pais,IDEN,NOMBRE,$campo["PAIS"],'Seleccionar país');?>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>País (*)</label>
                                                <div class="select-box">
													<select class="form-control" name= "PAIS" required>
														<option value="<?php echo $campo["PAIS"];?>"><?php echo $pais_nombre;?></option>
														<option value="1">Argentina</option>                                                       
														<option value="2">Bolivia</option>
														<option value="3">Brasil</option>
														<option value="4">Chile</option>
														<option value="5">Uruguay</option>
													</select>
												</div>
                                            </div>
                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label> CUIT / CUIL / DNI (*)</label>
                                                                <input type="text" class="form-control" name= "CUIT_DNI" value="<?php echo $campo["CUIT_DNI"];?>" required>
                                                            </div>
															
                                                        </div>
														<br>
															<p> (*) Campos obligatorios </p>
                                                        <div class="col-lg-12 col-md-12">
                                                            
															<input type='submit' value='Guardar cambios' name='<?php echo $accion;?>' class='btn btn-primary pull-left' />
															
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>