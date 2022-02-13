<?php
$url_actual=$_SERVER['REQUEST_URI'];

$url_actual="panel.php?modulo=".enrosca("windi/puntos/puntos",$_SESSION["clave"]);
$empresa=busca_registro(empresas,USUARIO,IDEN,$_SESSION["IDEN"]);

$accion="";
include 'modulos/clientes/crud.php' ;   
if ($empresa=="")
{
$paso=1;
$accion="nuevo_registro";
} 
else
{
$_SESSION["empresa"]=$empresa;
$campo=levanta_registro(empresas," IDEN=".$empresa);
$accion="modifica_registro";
//echo $_SESSION["empresa"];
}
?>
<section class="edit-profile-area ptb-10">
            <div class="container">
                <div class="row">
                   <?php if ($paso<>1){include 'modulos/opciones/menu_clientes.php' ;} else {include 'modulos/opciones/menu_clientes_complete.php' ;}?>
                    <div class="col-lg-9 col-md-7">
                        <div class="profile edit-profile">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="profile-box mt-0 text-center">
                                        <h3 class="title"> <i class="fas fa-info-circle"></i> Datos de facturación</h3>
                                        <div class="profile-information">
                                         <?php include 'modulos/clientes/formularios/form_empresa.php' ; ?>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                     </div>
                 </div>
                </div>
      </div>
</section>