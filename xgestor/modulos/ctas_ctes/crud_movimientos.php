<?php
$tabla="ctasctes";
//$tipo_movimiento="2";

$database = new db_mysql();
$database->connect();
if (isset($_POST['nuevo_movimiento']))
	{ 
		$ahora=ahorita();
		
		$insertando="COMPRA_VENTA=".$mv.",TIPO_MOV='".$tipo_movimiento."',".var_for();	
		$database->insert($tabla ,"$insertando"); 
		$user_id = $database->insert_id();
		$url_actual="panel.php?modulo=".enrosca("ctas_ctes/ctas_ctes",$_SESSION["clave"]);
		echo "<script>location.href='".$url_actual."';</script>"; die();
	}
	
if (isset($_POST['modifica_movimiento']))
	{
		$url_actual="panel.php?modulo=".enrosca("ctas_ctes/ctas_ctes",$_SESSION["clave"]);
	 $insertando=var_for();
	$database->update($tabla ,"$insertando","IDEN=".$user_id);
	echo "<script>location.href='".$url_actual."';</script>"; die();
		
	}
	

?>