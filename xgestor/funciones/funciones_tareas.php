<?php

function resalta_linea($valor1,$valor2,$valor3)
{
if (($valor1<>$valor2) and ($valor3<>$_SESSION['ID']))
{
return '<tr style="background-color: #FFE599 !important;">';
}	
}

function leida($registro,$historial)
{
$database = new db_mysql();
$database->connect();
$leida=ahorita();
$historial=$historial." // ".$leida;
$insertando="leida='S',leida_historial='{$historial}'" ;
//echo $insertando;
$database->update("tareas" ,"$insertando","id=$registro");
$insercion_confirmada = $database->insert_id();
return $insercion_confirmada;	
}

function controlada($registro,$historial)
{
$database = new db_mysql();
$database->connect();
$leida=ahorita();
$historial=$historial." control de cierre ".$leida;
$insertando="cierre_control='S',leida_historial='{$historial}'" ;
//echo $insertando;
$database->update("tareas" ,"$insertando","id=$registro");
$insercion_confirmada = $database->insert_id();
return $insercion_confirmada;	
}


function notifica($mensaje,$tipo_mensaje)
{
if ($tipo_mensaje==""){$tipo_mensaje="information";}
echo '<button class="btn-notification"  data-layout="top"  data-type="'.$tipo_mensaje.'" data-text="'.$mensaje.'" ></button>
<script>
$(document).ready(function()
{$(".btn-notification").click();});
</script>';
}

function notifica_espera($mensaje,$tipo_mensaje)
{
if ($tipo_mensaje==""){$tipo_mensaje="information";}
echo '<button class="btn-notification"  data-layout="top"  data-type="'.$tipo_mensaje.'" data-text="'.$mensaje.'" ></button>
';
}

function notifica2($mensaje,$tipo_mensaje,$id)
{
if ($tipo_mensaje==""){$tipo_mensaje="information";}
echo '<button class="btn-notification"  data-layout="top"  data-type="'.$tipo_mensaje.'" data-text="'.$mensaje.'" ></button>
<script>
$(document).ready(function()
{$(".btn-notification").click();});
</script>';
}

?>