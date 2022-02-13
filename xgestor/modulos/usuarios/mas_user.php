<?php 

if ($user_id==""){$user_id=desenrosca($_GET["id"],$_SESSION["IDEN"]);}
include 'modulos/usuarios/crud_user.php' ;   

if ($user_id=="")
{
$accion="nuevo_usuario";
} 
else
{

$redir=$url_actual."&id=".enrosca($user_id,$_SESSION["IDEN"]);
$campo=levanta_registro(usuarios," IDEN=".$user_id);
$accion="modifica_usuario";
}
?>

<section class="edit-profile-area ptb-10">
            <div class="container">
                <div class="row">
                    <?php
                    include 'modulos/usuarios/form/form_usuario.php'; ?>

                   </div>

                </div>

           

</section>

<?php //Include 'modulos/imagenes/preview.php'; ?>
<?php //include 'modulos/imagenes/archivo_size.php'; ?>
	  
	  