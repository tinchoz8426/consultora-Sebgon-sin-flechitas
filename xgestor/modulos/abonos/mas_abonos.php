<?php 
if ($user_id==""){$user_id=desenrosca($_GET["id"],$_SESSION["IDEN"]);}
include 'modulos/abonos/crud_abonos.php' ;   
if ($user_id=="")
{
$accion="nuevo_abono";
} 
else
{
//$redir=$url_actual."&id=".enrosca($user_id,$_SESSION["IDEN"]);
$campo=levanta_registro(abonos," IDEN=".$user_id);
$accion="modifica_abono";
}
?>
<section class="edit-profile-area ptb-10">
            <div class="container">
                <div class="row">
                    <?php
                    include 'modulos/abonos/form/form_abonos.php'; ?>
                   </div>
                </div>
</section>
