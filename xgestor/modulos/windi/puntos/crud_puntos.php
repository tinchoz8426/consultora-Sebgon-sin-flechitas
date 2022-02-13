<?php
$tabla="empresas_canales";
$database = new db_mysql();
$database->connect();
if (isset($_POST['nuevo_registro']))
	{ 
		
		$busca_nombre=busca_registro(empresas_canales,URL,IDEN,"'".$_POST["URL"]."'");
		if ($busca_nombre==""){$aceptado="¡felicitaciones! tu nombre fué aceptado";}else {$aceptado="Lo sentimos ".$_POST["URL"]." se encuentra en uso, podés probar con otro nombre o agregar un número al final"; $_POST["URL"]=""; }
		$insertando="TEXTO_WHATSAPP='Hola, quiero esta oferta: ',EMPRESA=".$_SESSION["empresa"].",".var_for();	
		$database->insert($tabla ,"$insertando"); 
		$punto_id = $database->insert_id();
		
		//if ($url_actual<>""){echo "<script>location.href='".$url_actual."';</script>"; die();}
	//ECHO $punto_id;
	
	}
	
if (isset($_POST['modifica_registro']))
	{
		if ($punto_id=="") {$punto_id=desenrosca($_GET["punto"],$_SESSION["IDEN"]);}
	$busca_nombre=busca_registro(empresas_canales,URL,IDEN,"'".$_POST["URL"]."'");
		if (($busca_nombre<>"") and ($busca_nombre==$punto_id) or ($busca_nombre=="")){$aceptado="¡felicitaciones! tu nombre fué aceptado"; $insertando=var_for();
	$database->update($tabla ,"$insertando","IDEN=".$punto_id);}
	
	else {$aceptado="Lo sentimos ".$_POST["URL"]." se encuentra en uso, podés probar con otro nombre o agregar un número al final";	}	
	
	//$aceptado="¡felicitaciones! tu nombre fué aceptado";
//ECHO $insertando;
	}
	

if (isset($_POST['modifica_registro_pasodos']))
	{
			
	if ($punto_id=="") {$punto_id=desenrosca($_GET["punto"],$_SESSION["IDEN"]);}
	
	$_FILES['LOGO']['name'][1]=limpia_caracteres_especiales($_FILES['LOGO']['name'][1]);
	$ruta_logo='../biblioteca/logos/';
	$img_temporal = $_FILES['LOGO']['tmp_name'][1];
	
	$_FILES['LOGO']['name'][2]=limpia_caracteres_especiales($_FILES['LOGO']['name'][2]);
	$ruta_logo2='../biblioteca/logos_m/';
	$img_temporal2 = $_FILES['LOGO']['tmp_name'][2];
	$peso_archivo=filesize($img_temporal2);
	if ((int)$peso_archivo/1024>200){$img_temporal2="";$error_archivo="<br><b> - Error el archivo seleccionado excede los 200kb permitidos -> ".archivo_size($peso_archivo)."</b><br>";
	alerta("El punto se grabó con errores, controle por favor");
	}
	
	$insertando=var_for();
	if ($img_temporal<>"")
	{
	$extension = trim( strtoupper (substr($_FILES['LOGO']['name'][1], -4)), ".");
	$aleatorio=mt_rand(1000,11000);
	$archivo_logo=$punto_id."_".$aleatorio.".".$extension;
	move_uploaded_file ( $img_temporal, $ruta_logo.$archivo_logo ); 
	$insertando="LOGO='".$archivo_logo."',".$insertando;
	}
	
	if ($img_temporal2<>"")
	{
	$extension2 = trim( strtoupper (substr($_FILES['LOGO']['name'][2], -4)), ".");
	$aleatorio2=mt_rand(1000,11000);
	$archivo_logo_m=$punto_id."_m_".$aleatorio2.".".$extension2;
	move_uploaded_file ( $img_temporal2, $ruta_logo2.$archivo_logo_m ); 
	
	
	$insertando="LOGO_M='".$archivo_logo_m."',".$insertando;
	}
	
	
	
	$database->update($tabla ,"$insertando","IDEN=".$punto_id);
	//ECHO $insertando;
	}	
?>