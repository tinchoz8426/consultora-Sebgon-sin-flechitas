<?php
$estado_actual=busca_registro(avisos_winpage,IDEN,ESTADO,$filtro_cambio);

if ($estado_actual==1)
{$campos="ESTADO=''";}
else
{$campos="ESTADO='1'";
$campos_limpios="ESTADO=''";
$clientes_sql2 = "SELECT * from avisos_winpage where EMPRESA=". $_SESSION["empresa"];
$resTask2 = $database->list_assoc($clientes_sql2);
foreach($resTask2 as $row2) {
$database->update("avisos_winpage" ,"$campos_limpios" ,"IDEN=".$row2['IDEN']);
}	
}
$database->update("avisos_winpage" ,"$campos","IDEN=".$filtro_cambio);	
$url_actual="panel.php?modulo=".enrosca("windi/winpage/win",$_SESSION["clave"]);
echo "<script>location.href='".$url_actual."';</script>"; 
?>