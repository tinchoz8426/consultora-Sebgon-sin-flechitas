<?php 

if ($user_id==""){$user_id=desenrosca($_GET["id"],$_SESSION["IDEN"]);}
$tipo_movimiento=desenrosca($_GET["id_x"],$_SESSION["IDEN"]);
$mv=desenrosca($_GET["mv"],$_SESSION["clave"]);
if ($mv==1){$compra_venta="Cliente";}
if ($mv==2){$compra_venta="Proveedor";}
//if ($tipo_movimiento==2){$compra_venta="Cliente / Proveedor";}
include 'modulos/ctas_ctes/crud_movimientos.php' ;   

if ($user_id=="")
{
$accion="nuevo_movimiento";
} 
else
{

//$redir=$url_actual."&id=".enrosca($user_id,$_SESSION["IDEN"]);
$campo=levanta_registro(ctasctes," IDEN=".$user_id);
$accion="modifica_movimiento";
}
?>

<section class="edit-profile-area ptb-10">
            <div class="container">
                <div class="row">
                    <?php
                    include 'modulos/ctas_ctes/form/form_movimientos.php'; ?>

                   </div>

                </div>

           

</section>

<?php //Include 'modulos/imagenes/preview.php'; ?>
<?php //include 'modulos/imagenes/archivo_size.php'; ?>
	  
	  