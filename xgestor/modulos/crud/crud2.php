<?php 
$cliente_nombre="jorge";
	//include 'clases/formularios.php';
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

?>

