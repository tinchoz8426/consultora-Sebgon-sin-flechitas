<?php 
$IDEN=$modulos_param[1];
$database = new db_mysql();
$database->connect();
if (isset($_POST['agregar_aplicacion']))
{ 
IF ($IDEN=="")
{
	$insertando=var_for();	
	$database->insert("opciones_nivel2" ,"$insertando"); 
	$insercion_confirmada = $database->insert_id();
	error('Nuevo aplicación cargada');
}
ELSE
{
$insertando=var_for();
$database->update("opciones_nivel2" ,"$insertando","IDEN=$IDEN");
error('aplicación Actualizado'.$insertando);
}

}

else
{
	if ($IDEN<>"")
	{
		$clientes_sql = "SELECT * from opciones_nivel2 where IDEN=".$IDEN ;
		$rowl = $database->list_assoc($clientes_sql);
		foreach($rowl as $row) {}
	}


	$frm = new formulario_();
	
	$formulario = $frm->box_formulario('Ingrese los datos','12');
	$formulario .= $frm->openform("nombre_formulario","post","","multipart/form-data");
	$formulario .= $frm->abre_div();
	//$formulario .= $frm->addSelect("CLIENTE",$valores, "Cliente",0,"col-md-4","required",$row['CLIENTE'],$cliente_nombre);
	$formulario .= $frm->addInput("form-control ","text","NOMBRE","APLICACION","","col-md-8","required");
	//$formulario .= $frm->addInput("form-control","text","APELLIDO","UBICACION","","col-md-4","required");
	$formulario .= $frm->cierra_div();
	$formulario .= $frm->addBoton('<button type="submit" class="btn btn-primary">Confirma</button>');
	$formulario .= $frm->closeform();
	$formulario .= $frm->close_box_formulario();
	echo '<br>';
	echo $formulario;

}
?>