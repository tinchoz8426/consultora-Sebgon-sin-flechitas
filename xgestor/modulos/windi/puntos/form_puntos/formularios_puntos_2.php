<form method="POST" autocomplete="off" enctype="multipart/form-data" data-ajax="false" action="<?php echo $redir;?>">
		
		
		
		<div class="add-listing-box mt-0">
			<div class="listing-box-header">
			<h5 style= "color: #fff"><i class="far fa-image"></i> Miniatura </h5>
			</div>
			<div class="row" Style= "margin-top: -40px">
			<div class="col-lg-6 col-md-6">
			<div class="profile-information"  Style= "margin-top: -20px">
						<div id="zdrop" class="fileuploader center-align">
			<div id="upload-label">
			
			<img id="uploadPreview2" width="150" height="150" src="../biblioteca/logos_m/<?php echo $campo["LOGO_M"];  ?>" />
			</div>
			<span class="tittle"><?php echo $error_archivo;?></span>
			
			<div class="file-select" id="src-file1" >
			<input id="uploadImage2" type="file" name="LOGO[2]" onchange="previewImage(2);" />
			</div>
			</div>
			
			</div>
			</div>
			<div class="col-lg-6 col-md-6" Style="text-align: center" >
		<p style= "color: #ff4e00"> <br>Imagen o logo - Formato cuadrado / Peso máx.: 200 kb </p> 
		<br>

		<!-- Botón en HTML (lanza el modal en Bootstrap) -->
		<a href="#victorModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Ver modelo</a>


		<!-- Modal / Ventana / Overlay en HTML -->
		<div id="victorModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
		<div class="modal-header">
		<h4 class="modal-title" >Así se verá al compartir en WhatsApp</h4>
		</div>
		<div class="modal-body">
		<img src="../img/whats1.jpg" alt="blog-img">
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		</div>
		</div>
		</div>
		</div>

		</div>
			</div>
			
			
		</div>
		<br><br>
		
		<div class="add-listing-box mt-0">

			<div class="listing-box-header">
			<h5 style= "color: #fff"><i class="fas fa-info-circle"></i> “Cabezal” de tu WinPage </h5>
			</div>
			
<div class="row" Style= "margin-top: -40px">
	<div class="col-lg-6 col-md-6">
		<div class="profile-information"  Style= "margin-top: -20px">
		<div id="zdrop" class="fileuploader center-align">
		<div id="upload-label">



		<img id="uploadPreview1" width="150" height="150" src="../biblioteca/logos/<?php echo $campo["LOGO"];  ?>" />
		</div>
		<span class="tittle"></span>
		<br>
		<div class="file-select" id="src-file1" >
		<input id="uploadImage1" type="file" name="LOGO[1]" onchange="previewImage(1);" />
		</div>
		<br>
		</div>
		</div>
		</div>
		<div class="col-lg-6 col-md-6" Style="text-align: center" >
		<p style= "color: #ff4e00"> <br><i class="far fa-image"></i> Logotipo / Formato ideal: 80 px (alto) / hasta 300 px (ancho)<br>Si no hay un logotipo disponible se mostrará el nombre comercial </p> 
		<br>

		<!-- Botón en HTML (lanza el modal en Bootstrap) -->
		<a href="#victorModal1" role="button" class="btn btn-large btn-primary" data-toggle="modal">Ver modelo</a>


		<!-- Modal / Ventana / Overlay en HTML -->
		<div id="victorModal1" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
		<div class="modal-header">
		<h4 class="modal-title" >Así se verá el cabezal de tu WinPage</h4>
		</div>
		<div class="modal-body">
		<img src="../img/cabezal1.jpg" alt="blog-img">
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		</div>
		</div>
		</div>
		</div>

		</div>
	

</div>
<br>
			<hr>
			<div class="row">
			<div class="col-lg-12 col-md-12">
			<br>
			<h5  style= "color: #ff4e00"><i class="fas fa-share-alt"></i> Redes sociales</h5> <br>
			</div>
			<?php echo social("SOCIAL_1","LINK_1","Red social 1",$campo["SOCIAL_1"],$campo["LINK_1"]); ?>
			<?php echo social("SOCIAL_2","LINK_2","Red social 2",$campo["SOCIAL_2"],$campo["LINK_2"]); ?>
			<?php echo social("SOCIAL_3","LINK_3","Red social 3",$campo["SOCIAL_3"],$campo["LINK_3"]); ?>
			<?php echo social("SOCIAL_4","LINK_4","Red social 4",$campo["SOCIAL_4"],$campo["LINK_4"]); ?>
			
					
			<br>
			<div class="col-lg-12 col-md-12">
			<div class="faq">
			<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
			<div class="card">
			<div class="card-header" role="tab" id="headingTwo">
			<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			<h5 class="mb-0">
			¿Cómo obetener el link de tus redes sociales?<i class="fas fa-angle-down"></i>
			</h5>
			</a>
			</div>
			<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
			<div class="card-body">
			<p>
			• Accede a tu red social desde el navegador de internet<br>
			• En la parte superior de la pantalla, selecciona y copia <strong>la dirección completa</strong> como se ve en la imagen:</p>
			<br>
			<div class="blog-details-img">
			<img src="../img/wwwredes.jpg" alt="blog-img">
			</div><br>
			<p>
			• Luego, vuelve al formulario y pega <strong>la dirección completa</strong> en el campo “Pegar link”</p>
			<br>
			<div class="blog-details-img">
			<img src="../img/wwwredes2.jpg" alt="blog-img">
			</div>
			</div>
			</div>
			</div>
			
			</div>
			</div>
			</div>
			<br><br>
			</div>
		</div>

	<br><br>
 
		<div class="add-listing-box" Style= "margin-top: 0px">
			<div class="listing-box-header">
			<h5 style= "color: #fff"><i class="fas fa-info-circle"></i> “Pie” de tu WinPage</h5>
			</div>
			<div class="row" Style= "margin-top: -40px">
			<div class="col-lg-12 col-md-12">
			<div class="form-group">
			<label>Dirección</label>
			<input type="text" name="DIRECCION" class="form-control" value="<?php echo $campo["DIRECCION"];?>" >
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Ciudad</label>
			<input type="text" name="CIUDAD" class="form-control" value="<?php echo $campo["CIUDAD"];?>" required>
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Provincia / Estado</label>
			<input type="text" class="form-control" name="PROVINCIA" value="<?php echo $campo["PROVINCIA"];?>" required>
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>País</label>
			<div class="select-box">
			<select class="form-control" name="PAIS" required>
			<?php $pais_nombre=busca_registro(pais,IDEN,NOMBRE,$campo["PAIS"]);
			if ($pais_nombre==""){$pais_nombre="Seleccionar país";}
			?>
			<option value="<?php echo $campo["PAIS"];?>"> <?php echo $pais_nombre; ?> </option>
			<option value="1">Argentina</option>
			<option value="2">Uruguay</option>
			<option value="3">Bolivia</option>
			<option value="4">Chile</option>
			<option value="5">Paraguay</option>
			</select>
			</div>
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Correo electrónico (opcional)</label>
			<input type="email" class="form-control" name="MAIL" value="<?php echo $campo["MAIL"];?>" >  
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>WhatsApp (incluir códigos de área)</label>
			<input type="text" class="form-control" placeholder="(Ej:) +549 11 4444-4444" name="WHATSAPP" value="<?php echo $campo["WHATSAPP"];?>" required >
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Teléfono (opcional)</label>
			<input type="text" class="form-control" placeholder="(Ej:) +549 11 4444-4444" name="TELEFONO" value="<?php echo $campo["TELEFONO"];?>">
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Sitio web (opcional)</label>
			<input type="text" class="form-control" name="WEB" value="<?php echo $campo["WEB"];?>">
			</div>
			</div>
			
			<div class="col-lg-6 col-md-12" Style="text-align: center" >
<br>
<!-- Botón en HTML (lanza el modal en Bootstrap) -->
<a href="#victorModal2" role="button" class="btn btn-large btn-primary" data-toggle="modal">Ver modelo</a>


<!-- Modal / Ventana / Overlay en HTML -->
<div id="victorModal2" class="modal fade">
<div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" >Así se verá el pie de WinPage</h4>
            </div>
            <div class="modal-body">
            <img src="../img/pie1.jpg" alt="blog-img">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
    </div>

              </div>
			
			<br><br>
			</div>
		</div>


	<br><br>
		
	<br><br>

		<div class="col-lg-12 col-md-12" Style= "Text-align: center">
		<input type='submit' value='Guardar cambios' name='<?php echo $accion2;?>' class='btn btn-primary pull-left' />
		</div>
		</form>