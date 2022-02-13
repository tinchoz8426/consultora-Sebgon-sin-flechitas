<?php
function social($codigo_red,$link_red,$titulo,$codigo_red_defecto,$link_red_defecto)
{
 if ($codigo_red_defecto==1){$nombre_red_defecto="Facebook";}
 if ($codigo_red_defecto==2){$nombre_red_defecto="Instagram";}
 if ($codigo_red_defecto==3){$nombre_red_defecto="Twitter";}
 if ($codigo_red_defecto==4){$nombre_red_defecto="Linkedin";}
 if ($codigo_red_defecto==5){$nombre_red_defecto="Tik Tok";}
 if ($codigo_red_defecto==6){$nombre_red_defecto="Pinterest";}
 if ($codigo_red_defecto==""){$nombre_red_defecto="Seleccionar red social";}
 
echo '
<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>'.$titulo.'</label>
			<div class="select-box">
			<select name="'.$codigo_red.'"class="form-control">
			<option value="'.$codigo_red_defecto.'">'.$nombre_red_defecto.'</option>
			<option value="1">Facebook</option>
			<option value="2">Instagram</option>
			<option value="3">Twitter</option>
			<option value="4">Linkedin</option>
			<option value="5">Tik Tok</option>
			<option value="6">Pinterest</option>
			</select>
			</div>
			</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class="form-group">
			<label>Pegar Link</label>
			<input type="text" class="form-control" name="'.$link_red.'" value="'.$link_red_defecto.'" placeholder="(Ej:) https://www…">
			</div>
			</div>
			';
}
?>