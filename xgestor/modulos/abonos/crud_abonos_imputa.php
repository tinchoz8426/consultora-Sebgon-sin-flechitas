<?php
$tabla="abonos_imputaciones";
$tabla_log="abonos_log";

$database = new db_mysql();
$database->connect();

$lotes_encontrados=0;
$lotes_sql = "SELECT * from abonos_imputaciones where CICLO=".$_POST['CICLO']. " AND  CUENTA=". $_POST['CUENTA']." AND  DESDE='".$_POST['DESDE']."' AND  HASTA='".$_POST['HASTA']."'";
$lotes_encontrados = $database->list_assoc($lotes_sql);
foreach($lotes_encontrados as $row3)
	{
	$repeticiones=$repeticiones+1;
	}


if ($repeticiones==0)
{
	if (isset($_POST['imputacion_masiva']))
		{ 
			$ahora=ahorita();
			
			$insertando=var_for();	
			$database->insert($tabla ,"$insertando"); 
			$lote= $database->insert_id();
				
			$clientes_sql = "SELECT * from abonos WHERE CICLO=".$_POST['CICLO']." AND  CUENTA=".$_POST['CUENTA'];
			$clientes_filtro = $database->list_assoc($clientes_sql);
			$modulo_pass="abonos/mas_abonos";
			$ingresos_ctastctes=0;
			foreach($clientes_filtro as $row3)
			{

			
			$confirmado=0;
			$detalle="'".$row3['DETALLE']." período ".conviertefechas($_POST['DESDE'],"C")." / ".conviertefechas($_POST['HASTA'],"C")." (*ref. ".$lote.")'";
			$database->insert('ctasctes' ,"CLIENTE_PROVEEDOR=".$row3['CLIENTE_PROVEEDOR'].", CUENTA_VINCULADA=".$row3['CUENTA'].", IMPORTE=".$row3['IMPORTE'] .", MONEDA=".$row3['MONEDA'] .", FECHA='".$_POST['DESDE']."', PERIODO_DESDE='".$_POST['DESDE']."', PERIODO_HASTA='".$_POST['HASTA']."', LOTE=".$lote.", ABONO_ID=".$row3['IDEN']." , TIPO_MOV=1, COMPRA_VENTA=1".", DETALLE=".$detalle );
			$confirmado= $database->insert_id();
			
			if ($confirmado>0)
			{
			$ingresos_ctastctes=$ingresos_ctastctes+1;	
			}
			
			}
			exito("Se generaron ". $ingresos_ctastctes." ingresos en cuentas corrientes con el lote ".$lote);
			log_r($id_usuario," procesamiento de lote de abonos en cuenta corriente  lote : ".$lote," " );
			$url_actual="panel.php?modulo=".enrosca("abonos/abonos",$_SESSION["clave"]);
			//echo "<script>location.href='".$url_actual."';</script>"; die();
		}
		//.", DETALLE="."período ".$_POST['DESDE']." / ".$_POST['HASTA']." ref. ".$lote
}
else

{

error("error, ya existe(n) ".$repeticiones." lote(s) con las mismas fechas, cuenta y ciclo, verifique en las cuentas corrientes");	
	
}


?>