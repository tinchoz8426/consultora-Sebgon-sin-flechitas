<section class="edit-profile-area ptb-10">
            <div class="container">
                <div class="row">
<?php 
include 'modulos/windi/winpage/funciones_win.php';
include 'modulos/opciones/menu_clientes.php' ; 
?>

<div class="col-lg-9 col-md-7">
<div class="manage-listing">
<h3 class="title" Style= "background: #8c817c;"> <i class="fas fa-eye"></i></i> Vista previa WinPage Inactiva</h3>
<div class="listing-table table-responsive">
<table class="table mb-0">
<thead>
<tr>
<th scope="col">Imagen</th>
<th scope="col">Nobre del producto</th>
<th scope="col">Precio</th>
</tr>
</thead>
<tbody>


<?php 
$win_id=desenrosca($_GET["id"],$_SESSION["IDEN"]);
$modi_win="panel.php?modulo=".enrosca("windi/winpage/mas_win",$_SESSION["clave"]);
$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * from avisos where WINPAGE=". $win_id;
$resTask = $database->list_assoc($clientes_sql);
foreach($resTask as $row) 
{
pre_vista($row['ILUSTRACION'],$row['TITULO'],$row['PRECIO']);
}

?>

</tbody>
</table>
</div>
</div>

<br><br>
<div class="row" Style= "margin-top: 0px">
<div class="col-lg-6 col-md-12" Style= "Text-align: center">
<br>
<h6>Fecha de publicación: 12/07/2021</h6><br>
</div>

<div class="col-lg-6 col-md-12" Style= "Text-align: center">
<a href="<?php echo $modi_win.'&id='.enrosca($win_id, $_SESSION["IDEN"]);?>">
<button type="submit" class="btn btn-primary">Editar WinPage</button>
</a>                                                        
</div>
</div>
</div>
</div>
</div>	
</section>
