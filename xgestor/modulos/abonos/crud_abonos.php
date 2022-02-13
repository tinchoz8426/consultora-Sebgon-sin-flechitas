<?php
$tabla="abonos";
$tabla_log="abonos_log";
$tipo_movimiento="FV";
$database = new db_mysql();
$database->connect();
if (isset($_POST['nuevo_abono']))
	{ 
		$ahora=ahorita();
		
		$insertando=var_for();	
		$database->insert($tabla ,"$insertando"); 
		$user_id = $database->insert_id();
		$url_actual="panel.php?modulo=".enrosca("abonos/abonos",$_SESSION["clave"]);
		echo "<script>location.href='".$url_actual."';</script>"; die();
	}
	
if (isset($_POST['modifica_abono']))
	{
		$url_actual="panel.php?modulo=".enrosca("abonos/abonos",$_SESSION["clave"]);
	 $insertando=var_for();
	 $insertando2="ABONO='".$user_id."',CUENTA='{$_POST['CUENTA']}',IMPORTE='{$_POST['IMPORTE']}',CLIENTE_PROVEEDOR='{$_POST['CLIENTE_PROVEEDOR']}'";	
	$database->update($tabla ,"$insertando","IDEN=".$user_id);
	$database->insert($tabla_log ,"$insertando2");
	echo "<script>location.href='".$url_actual."';</script>"; die();
		
	}
	

?>