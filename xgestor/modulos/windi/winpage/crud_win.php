<?php
$tabla="avisos_winpage";
$database = new db_mysql();
$database->connect();

if (isset($_POST['modifica_metadatos']))
{
if ($win_id=="") {$win_id=desenrosca($_GET["id"],$_SESSION["IDEN"]);}
$insertando=var_for();	
//echo $insertando;
$database->update($tabla ,"$insertando","IDEN=".$win_id);
}

if (isset($_POST['nuevo_metadatos']))
{
$insertando="EMPRESA=".$_SESSION["empresa"].",".var_for();
$database->insert($tabla ,"$insertando"); 
$win_id = $database->insert_id();
}

if (isset($_POST['nuevo_producto']))
{
	
if ($win_id=="") {$win_id=desenrosca($_GET["id"],$_SESSION["IDEN"]);}

$_FILES['IMG']['name'][0]=limpia_caracteres_especiales($_FILES['IMG']['name'][0]);
$ruta_img='../biblioteca/promos/';
$img_temporal = $_FILES['IMG']['tmp_name'][0];
$insertando="EMPRESA=".$_SESSION["empresa"].","."WINPAGE=".$win_id.",".var_for();	
$tabla="avisos";

if ($img_temporal<>"")
	{
	$extension = trim( strtoupper (substr($_FILES['IMG']['name'][0], -4)), ".");
	$aleatorio=mt_rand(1000,11000);
	$archivo_ilustracion=$win_id."_".$aleatorio.".".$extension;
	move_uploaded_file ( $img_temporal, $ruta_img.$archivo_ilustracion ); 
	$insertando="ILUSTRACION='".$archivo_ilustracion."',".$insertando;
	}
	

$database->insert($tabla ,"$insertando"); 
//$producto_id = $database->insert_id();
}


if (isset($_POST['modifica_producto']))
{
if ($producto_id=="") {$producto_id=desenrosca($_GET["id_producto"],$_SESSION["IDEN"]);}
if ($producto_numero=="") {$producto_numero=desenrosca($_GET["numero_producto"],$_SESSION["IDEN"]);}
$insertando=var_for();
$tabla="avisos";

$_FILES['IMG']['name'][$producto_numero]=limpia_caracteres_especiales($_FILES['IMG']['name'][$producto_numero]);
$ruta_img='../biblioteca/promos/';
$img_temporal = $_FILES['IMG']['tmp_name'][$producto_numero];
$insertando="EMPRESA=".$_SESSION["empresa"].","."WINPAGE=".$win_id.",".var_for();	
$tabla="avisos";

if ($img_temporal<>"")
	{
	$extension = trim( strtoupper (substr($_FILES['IMG']['name'][$producto_numero], -4)), ".");
	$aleatorio=mt_rand(1000,11000);
	$archivo_ilustracion=$win_id."_".$aleatorio.".".$extension;
	move_uploaded_file ( $img_temporal, $ruta_img.$archivo_ilustracion ); 
	$insertando="ILUSTRACION='".$archivo_ilustracion."',".$insertando;
	}

$database->update($tabla ,"$insertando","IDEN=".$producto_id);

}

?>