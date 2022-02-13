<?php
function saldo_cuentas($cliente_proveedor,$tipo_movimiento)
{

$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * from ctasctes WHERE COMPRA_VENTA=".$tipo_movimiento. " AND CLIENTE_PROVEEDOR=".$cliente_proveedor;
$clientes_filtro = $database->list_assoc($clientes_sql);
$saldo=0;
foreach($clientes_filtro as $row3)
{
if ($row3['TIPO_MOV']==2){ $row3['IMPORTE']=$row3['IMPORTE']*-1;}
$saldo=$saldo+$row3['IMPORTE'];	
	
}

return $saldo;	
}

?>