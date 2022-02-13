<?php

function win_metadatos($filtro,$redir)
{
	
$hasta=busca_registro(avisos_winpage,IDEN,HASTA,$filtro);
$titulo=busca_registro(avisos_winpage,IDEN,TITULO,$filtro);
$bajada=busca_registro(avisos_winpage,IDEN,BAJADA,$filtro);
if ($filtro>0)
{$form_name="modifica_metadatos";}else {$form_name="nuevo_metadatos";}
echo '


<form method="POST" autocomplete="off" enctype="multipart/form-data" action="'. $redir.'">


<div class="form-group">
<label>TÍTULO DE LA CAMPAÑA (ejemplo: Ofertas de Julio!!!) Max.: 26 caracteres.
</label>
<input type="text" class="form-control" name= "TITULO" value="'.$titulo.'"  maxlength="26" required>
</div>

<div class="form-group">
<label>BAJADA (ejemplo: Ideal para las vacaciones) Max.: 26 caracteres.</label>
<input type="text" class="form-control" name="BAJADA" value="'.$bajada.'"  maxlength="26" required>
</div>

<div class="form-group">
<label>Ofertas válidas hasta:</label>
<input type="date" class="form-control" name="HASTA" value="'.$hasta.'" placeholder="Colocar fecha: Ej. 20/12/2021" required>
</div>
<br>
<div class="row">
<div class="col-lg-6 col-md-6" Style="text-align: center; padding-top:10px;" >
<!-- Botón en HTML (lanza el modal en Bootstrap) -->
<a href="#victorModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Ver modelo</a>
<br>
</div>


<div class="col-lg-6 col-md-6" Style= "Text-align: center; padding-top:10px;">

<input type="submit" value="Grabar" name="'.$form_name.'" class="btn btn-primary pull-left" />

</div>
</div>
</form>
</div>
<br>

';
}


function win_avisos($filtro,$redir,$limite)
{
win_metadatos($filtro,$redir);	
$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * from avisos where WINPAGE=".$filtro." order by IDEN";
$resTask = $database->list_assoc($clientes_sql);
$resultado_consulta = $resTask->num_rows;
$producto_numero=0;
if (($resultado_consulta<$limite) and ($filtro<>""))
{
	
	win_form('nuevo_producto','','',$redir,$producto_numero);}

foreach($resTask as $row) {
$producto_numero=$producto_numero+1;
win_form('modifica_producto',$row['TITULO'],$row['CUERPO'],$redir,$producto_numero,'Modificar',$row['IDEN'],$filtro,$row['PRE_PRECIO'],$row['PRECIO'],$row['ILUSTRACION']);	
} 	
}




function win_form($accion,$titulo,$cuerpo,$redir,$producto_numero,$boton,$id,$win_aviso,$pre_precio,$precio,$ilustracion)
{
	
	if ($boton==""){$boton="Grabar";} else 
	{
	$url_actual="panel.php?modulo=".enrosca("windi/winpage/mas_win",$_SESSION["clave"]);
	$redir=$url_actual."&id=".enrosca($win_aviso,$_SESSION["IDEN"])."&id_producto=".enrosca($id,$_SESSION["IDEN"])."&numero_producto=".enrosca($producto_numero,$_SESSION["IDEN"]);
	}

echo'

<div class="add-listing-box" Style= "margin-top: 0px;">
<div class="profile-information"  Style= "margin-top: -100px">
<form method="POST" autocomplete="off" enctype="multipart/form-data" action="'. $redir.'">
<div class="row">
<div class="col-lg-12 col-md-12">
<h5  style= "color: #ff4e00"><i class="far fa-file"></i> Producto '.$producto_numero.'</h5> <br>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<input type="text" class="form-control" placeholder="Nombre del Producto" name="TITULO" value="'.$titulo.'" required>
</div>
</div>
<div class="col-lg-5 col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="PRE_PRECIO" value="'.$pre_precio.'" placeholder="Prefijo: Ej. Oferta! (opcional)">
</div>
</div>
<div class="col-lg-7 col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="PRECIO" value="'.$precio.'" placeholder="Precio: Ej. $ 100" required>
</div>
</div>
<div class="col-lg-5 col-md-12">
<div id="zdrop" class="fileuploader center-align">
<div id="upload-label">
<img id="uploadPreview'.$producto_numero.'" width="200" height="200" src="../biblioteca/promos/'.$ilustracion.'" alt="listing" >
</div>

<span class="tittle" style= "color: #ff4e00"><i class="far fa-file"></i> Imagen cuadrada / Formato ideal: 400x400 px</span>

<div class="file-select" id="src-file1" >
<input id="uploadImage'.$producto_numero.'" type="file" name="IMG['.$producto_numero.']" onchange="previewImage('.$producto_numero.');" />

</div>

</div>

<br>
</div>
<div class="col-lg-7 col-md-12">
<div class="form-group">
<textarea  name="CUERPO" cols="30" rows="8" class="form-control" placeholder="(Descripción del productoI máximo 200 caracteres)"  maxlength="200" required>'.$cuerpo.'</textarea>
</div>

<div class="col-lg-12 col-md-12" Style= "Text-align: center">
<input type="submit" value="'.$boton.'" name="'.$accion.'" class="btn btn-primary pull-left" />
</div>
</div>
<br><br>
</form>	
</div>
</div>
</div>
<br>
';
}

function pre_vista($ilustracion,$titulo,$precio)
{
echo'<tr>
<td class="listing-image">
<a href="">
<div class="main-banner2 item-bg-two" style="background-image: url(../biblioteca/promos/'.$ilustracion.')" alt="listing">   </div>
</a>
</td>
<td class="listing-info" >
<a Style= "color: #ff4e00;">'.$titulo.'</a>
</td>

<td class="listing-info">
<a Style= "color: #ff4e00;">'.$precio.'</a>
</td>
</tr>';}

?>