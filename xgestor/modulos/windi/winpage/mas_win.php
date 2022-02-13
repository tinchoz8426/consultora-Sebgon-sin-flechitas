<?php 
include 'modulos/windi/winpage/funciones_win.php';
$url_actual="panel.php?modulo=".enrosca("windi/winpage/mas_win",$_SESSION["clave"]);
if ($win_id<1){$win_id=desenrosca($_GET["id"],$_SESSION["IDEN"]);}
include 'modulos/windi/winpage/crud_win.php' ;   

if ($win_id=="")
{
$paso=1;
$accion="nuevo_registro";
} 
else
{

$redir=$url_actual."&id=".enrosca($win_id,$_SESSION["IDEN"]);
$campo=levanta_registro(empresas_canales," IDEN=".$win_id);
$accion="modifica_registro";
}
?>

<section class="edit-profile-area ptb-10">
            <div class="container">
                <div class="row">
                    <?php include 'modulos/opciones/menu_clientes.php';

                    include 'modulos/windi/winpage/form_win/formularios_win.php'; ?>

                   </div>

                </div>

           

</section>

<?php include 'modulos/imagenes/preview.php'; ?>
<?php //include 'modulos/imagenes/archivo_size.php'; ?>
	  
	  