<?php 
$IDEN=var_url($_GET['modulo'],1);
$MODIFICA=$_POST['IDEN'];
//echo $IDEN;
$database = new db_mysql();
$database->connect();


if (isset($_POST['cancela']))
{ 
$redirige='panel.php?modulo='.enrosca('configuracion/menu_opciones',$_SESSION["clave"]);
header("LOCATION: $redirige");
}


if (isset($_POST['elimina_op_niv_1']))
{ 
//$database->elimina("opciones_nivel2" ,"IDEN=$MODIFICA");

exito('Atención','Registro eliminado');

//echo carga();
//$redirige='panel.php?modulo='.enrosca('configuracion/menu_opciones',$_SESSION["clave"]);

include ('modulos/configuracion/menu_opciones.php');
//header("LOCATION: $redirige");
}

if (isset($_POST['op_niv_2']))
{ 
IF (($IDEN=="") AND ($MODIFICA==""))
{
	$insertando=var_for();	
	$database->insert("opciones_nivel2" ,"$insertando"); 
	//$insercion_confirmada = $database->insert_id();
	exito('Atención','Registro agregado');
	include ('modulos/configuracion/menu_opciones.php');
}
ELSE
{
$insertando=var_for();
$database->update("opciones_nivel2" ,"$insertando","IDEN=$MODIFICA");
exito('Atención','Registro actualizado');
include ('modulos/configuracion/menu_opciones.php');

}

}

else
{
	if (!isset($_POST['elimina_op_niv_1'])) 
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
	//$formulario .= $frm->abre_div();
	//$formulario .= $frm->addSelect("CLIENTE",$valores, "Cliente",0,"col-md-4","required",$row['CLIENTE'],$cliente_nombre);
	$formulario .= $frm->addInput("form-control ","text","NOMBRE","Nombre",$row['NOMBRE'],"col-md-8","required");
	//$formulario .= $frm->addInput("form-control ","text","SUPERIOR","Dependencia",$row['SUPERIOR'],"col-md-8","required");
	$formulario .= $frm->addInput("form-control ","text","LINK","Link",$row['LINK'],"col-md-8","required");
	$formulario .= $frm->addInput("form-control ","text","ORDEN","Orden",$row['ORDEN'],"col-md-8","required");
	$formulario .= $frm->addInput("form-control ","hidden","IDEN",'',$row['IDEN'],"col-md-8","required");
	//$formulario .= $frm->addInput("form-control","text","APELLIDO","UBICACION","","col-md-4","required");
	//$formulario .= $frm->cierra_div();
	$formulario .= $frm->addBoton('<button name="op_niv_2" type="submit" class="btn btn-primary">Confirma</button>');
	
	$formulario .= $frm->addBoton(' <button name="cancela" type="submit" class="btn btn-primary-black">Cancela</button>');
	
	$formulario .= $frm->addBoton(' <button name="elimina_op_niv_2" type="submit" class="btn btn-secondary">Elimina</button>');
	$formulario .= $frm->closeform();
	$formulario .= $frm->close_box_formulario();
	echo $formulario.' <br>';
	}
}
?>