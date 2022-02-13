<!-- Start Preloader Area -->
	    
	    <!-- End Preloader Area -->
	    
	    <!-- Start Login Area -->
	    <section class="login-area">
	        <div class="d-table">
	            <div class="d-table-cell">
	                <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="login">
                                    <h3>Inicie sesión</h3>
                                    <form  method="POST" autocomplete="off">
                                        <div class="form-group">
                                            <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" name="pass" class="form-control" placeholder="Contraseña">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ingresar</button>
                                        
                                        <span><?php echo $error; ?><a href="../ayuda.php"> centro de ayuda </a></span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
	            </div>
	        </div>
	        
	       
	    </section>
	    <!-- End Login Area -->