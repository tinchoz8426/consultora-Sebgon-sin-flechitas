<?php
$filtro=desenrosca($_GET['punto'],$_SESSION["clave"]);;
$elimina_noticia="ESTADO='X'";
$database = new db_mysql();
$database->connect();
//$database->update("empresas_canales" ,"$elimina_noticia","IDEN=".$filtro);	
$database->elimina("empresas_canales","IDEN=".$filtro);
$insercion_confirmada = $database->insert_id();		
echo "Punto ".$insercion_confirmada." Eliminado";
$url_actual="panel.php?modulo=".enrosca("windi/puntos/puntos",$_SESSION["clave"]);
echo "<script>location.href='".$url_actual."';</script>"; 
?>