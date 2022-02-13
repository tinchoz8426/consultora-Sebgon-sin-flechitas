<?php 
//include ("modulos/control-sesion.php");
//include ('clases/formularios.php');
$tabla="usuarios";
$APLICACION = (int) $_GET['IDEN'];
$IDEN="";
$database = new db_mysql();
$database->connect();
if (isset($_POST['agregar_permisos']))
{ 
IF ($IDEN=="")
{
	$insertando=var_for();	
	$database->insert($tabla ,"$insertando"); 
	$insercion_confirmada = $database->insert_id();
	error('nuevos permisos cargados');
}
ELSE
{
$insertando=var_for();
$database->update($tabla ,"$insertando","IDEN=$IDEN");
error('permisos actualizados'.$insertando);
}

}

else
{
if ($IDEN<>"")
{
$clientes_sql = "SELECT * from ".$tabla." where IDEN=".$IDEN ;
$rowl = $database->list_assoc($clientes_sql);
foreach($rowl as $row) {
}
//$cliente_nombre=buscaregistro_concat(contactos,numerador,"concat(Apellido,', ',Nombre,'  ',Organizacion)as salida",$row['CLIENTE'],'Seleccione Cliente');

}


//$contactos_sql = "SELECT numerador, trim(concat(Apellido,' ',Nombre, ' ', Organizacion)) as denominacion from contactos order by denominacion " ;
//$contactos = $database->list_assoc($contactos_sql);
//$valores="";
//$valores=array();

foreach($contactos as $contactos_1) 
{ 
//$valores[$contactos_1['numerador']]=$contactos_1['denominacion'];
//echo $contactos_1['Organizacion'];
}

$frm = new formulario();
$formulario = $frm->box_formulario('Asigne permisos','12');
$formulario .= $frm->openform("nombre_formulario","post","","multipart/form-data");
$formulario .= $frm->abre_div();
//$formulario .= $frm->addSelect("CLIENTE",$valores, "Cliente",0,"col-md-4","required",$row['CLIENTE'],$cliente_nombre);
$formulario .= $frm->addInput("form-control ","text","NOMBRE","Aplicación",$row['NOMBRE'],"col-md-8","required");
$formulario .= $frm->addInput("form-control","text","APELLIDO","Grupo",$row['APELLIDO'],"col-md-4","required");
$formulario .= $frm->cierra_div();
//$formulario .= $frm->abre_div();
//$formulario .= $frm->addInput("form-control","text","URL","URL",$row['URL'],"col-md-4","required");
//$formulario .= $frm->addInput("form-control","text","URL2","URL2",$row['URL2'],"col-md-4","required");
//$formulario .= $frm->addInput("form-control","text","ICONO","ICONO",$row['ICONO'],"col-md-4","required");
//$formulario .= $frm->cierra_div();
$formulario .= $frm->addInput("btn btn-primary pull-right","submit","agregar_permisos","","Agregar");
$formulario .= $frm->closeform();
$formulario .= $frm->close_box_formulario();
echo '<br>';
echo $formulario;

}
?>
<br><div></div>