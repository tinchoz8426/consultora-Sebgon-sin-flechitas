<?php
$tabla="usuarios";
$database = new db_mysql();
$database->connect();
if (isset($_POST['nuevo_usuario']))
	{ 
		$ahora=ahorita();
		
		$insertando="REGISTRO='".$ahora."',GRUPO=4,ESTADO=1,".var_for();	
		$database->insert($tabla ,"$insertando"); 
		$user_id = $database->insert_id();
		$url_actual="panel.php?modulo=".enrosca("usuarios/usuarios_del_sistema",$_SESSION["clave"]);
		echo "<script>location.href='".$url_actual."';</script>"; die();
	}
	
if (isset($_POST['modifica_usuario']))
	{
	 $insertando=var_for();
	$database->update($tabla ,"$insertando","IDEN=".$user_id);
	echo "<script>location.href='".$url_actual."';</script>"; die();
		
	}
	

?>