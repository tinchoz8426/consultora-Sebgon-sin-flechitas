<?php
$filtro=desenrosca($_GET['id'],$_SESSION["clave"]);
$database = new db_mysql();
$database->connect();
$database->elimina("avisos_winpage","IDEN=".$filtro);
$insercion_confirmada = $database->insert_id();		
echo "Campaña ".$insercion_confirmada." Eliminada";
$url_actual="panel.php?modulo=".enrosca("windi/winpage/win",$_SESSION["clave"]);
echo "<script>location.href='".$url_actual."';</script>"; 
?>