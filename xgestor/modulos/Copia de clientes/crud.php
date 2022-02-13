<?php
$tabla="empresas";
$database = new db_mysql();
$database->connect();
if (isset($_POST['nuevo_registro']))
	{ 
		$insertando="USUARIO=".$_SESSION["IDEN"].",".var_for();	
		$database->insert($tabla ,"$insertando"); 
		$insercion_confirmada = $database->insert_id();
		if ($url_actual<>""){echo "<script>location.href='".$url_actual."';</script>"; die();}
	}
	
if (isset($_POST['modifica_registro']))
	{
	$insertando=var_for();
	$database->update($tabla ,"$insertando","IDEN=$empresa");

	}
?>