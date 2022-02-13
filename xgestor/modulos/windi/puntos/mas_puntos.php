<?php 
include 'modulos/windi/puntos/funciones_puntos.php';
$url_actual="panel.php?modulo=".enrosca("windi/puntos/mas_puntos",$_SESSION["clave"]);
$punto_id_2=desenrosca($_GET["punto"],$_SESSION["IDEN"]);
include 'modulos/windi/puntos/crud_puntos.php' ;   
if (($punto_id=="") and ($punto_id_2==""))
{
$paso=1;
$accion="nuevo_registro";
} 
else
{
if ($punto_id_2<>""){$punto_id=$punto_id_2;}
$redir=$url_actual."&punto=".enrosca($punto_id,$_SESSION["IDEN"]);
$campo=levanta_registro(empresas_canales," IDEN=".$punto_id);
$accion="modifica_registro";
$accion2="modifica_registro_pasodos";
}
?>

<section class="edit-profile-area ptb-10">
            <div class="container">
                <div class="row">
                    <?php include 'modulos/opciones/menu_clientes.php';

                    include 'modulos/windi/puntos/form_puntos/formularios_puntos.php'; ?>

                   </div>

                </div>

           

</section>

<?php include 'modulos/imagenes/preview.php'; ?>
<?php //include 'modulos/imagenes/archivo_size.php'; ?>
	  
	  