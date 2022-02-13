<?php

function select_func($tabla, $value,$campo1,$campo2,$campo3,$orden1,$orden2,$orden3)
{
$database = new db_mysql();
$database->connect();
if ($orden1<>"")
{
$orden=$orden1;
$ordenamiento =" ORDER BY ".$orden;
}

if ($orden2<>"")
{
$orden=$orden1.",".$orden2;
$ordenamiento = " ORDER BY concat(".$orden.")";
}

if ($orden3<>"")
{
$orden=$orden1.",".$orden2.",".$orden3;
$ordenamiento = " ORDER BY concat(".$orden.")";
}

$consulta_mysql="select *  from " .$tabla.$ordenamiento;
$result = $database->list_assoc($consulta_mysql);
foreach($result as $row3)
{ 
echo '<option value="'.$row3["$value"].'">'.$row3["$campo1"]." ".$row3["$campo2"],' '.$row3["$campo3"].'</option>';}
}

function nombre_contacto($id)

{
	
$empresa=busca_registro(contactos, numerador,Organizacion,$id);
$nombre=busca_registro(contactos, numerador,Nombre,$id);
$apellido=busca_registro(contactos, numerador,Apellido,$id);

if ($nombre.$apellido<>""){$salida=$nombre." ".$apellido;}

if (($empresa<>"") and ($nombre.$apellido<>"")) {$salida=$salida." (".$empresa.")";}

if (($empresa<>"") and ($nombre.$apellido=="")) {$salida=$empresa;}

return $salida;
	
}

function resize_image($file, $w, $h, $crop=FALSE) {
    list($width, $height) = getimagesize($file);
    $r = $width / $height;
    if ($crop) {
        if ($width > $height) {
            $width = ceil($width-($width*abs($r-$w/$h)));
        } else {
            $height = ceil($height-($height*abs($r-$w/$h)));
        }
        $newwidth = $w;
        $newheight = $h;
    } else {
        if ($w/$h > $r) {
            $newwidth = $h*$r;
            $newheight = $h;
        } else {
            $newheight = $w/$r;
            $newwidth = $w;
        }
    }
    $src = imagecreatefromjpeg($file);
    $dst = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    return $dst;
}



function confirma_del()

{

echo '<script language="JavaScript">
function confirmar(url){
if (!confirm("¿Confirma eliminación?")) {
return false;
}
else {
document.location= url;
return true;
}
}
</script>
';	
}

function archivo_size($bytes) { if ($bytes >= 1073741824) { $bytes = number_format($bytes / 1073741824, 2) . ' GB'; } elseif ($bytes >= 1048576) { $bytes = number_format($bytes / 1048576, 2) . ' MB'; } elseif ($bytes >= 1024) { $bytes = number_format($bytes / 1024, 2) . ' KB'; } elseif ($bytes > 1) { $bytes = $bytes . ' bytes'; } elseif ($bytes == 1) { $bytes = $bytes . ' byte'; } else { $bytes = '0 bytes'; } return $bytes; }


function alerta ($alerta)
{
echo "<script>alert('".$alerta."');</script>";
}


function limpia_caracteres_especiales($string ){
 $string = htmlentities($string);
 $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
 return $string;
}


function limpia_espacios($cadena){
	$cadena = str_replace(' ', '', $cadena);
	$cadena = trim($cadena);
	return $cadena;
}


function conviertefechas ($fechaaconvertir,$formato) {
if ($fechaaconvertir<>"0000-00-00"){
if ($formato=="L") {
$fechaconvertida=date("d-m-Y H:i:s",strtotime($fechaaconvertir));}

if ($formato=="C") {
$fechaconvertida=date("d-m-Y",strtotime($fechaaconvertir));}

if ($formato=="G") {
$fechaconvertida=date("Y-m-d",strtotime($fechaaconvertir));}

if ($formato=="yy") {
$fechaconvertida=date("y-m-d",strtotime($fechaaconvertir));}

if ($formato=="A") {
$fechaconvertida=date("d-m",strtotime($fechaaconvertir));}

if ($formato=="T") {
$fechaconvertida=date("m-d",strtotime($fechaaconvertir));}

}

 return $fechaconvertida;}

function pass($largo)
{
   //Carácteres para la contraseña
   $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789";
   $password = "";
   //Reconstruimos la contraseña segun la longitud que se quiera
   for($i=0;$i<$largo;$i++) {
      //obtenemos un caracter aleatorio escogido de la cadena de caracteres
      $password .= substr($str,rand(0,62),1);
   }
   //Mostramos la contraseña generada
   return $password;
}

function ahorita(){
$ahorita=date("Y-m-d H:i:s");
return $ahorita;}

function DireccionIP()
{
    if (!empty($_SERVER ['HTTP_CLIENT_IP'] ))
      $ip=$_SERVER ['HTTP_CLIENT_IP'];
    elseif (!empty($_SERVER ['HTTP_X_FORWARDED_FOR'] ))
      $ip=$_SERVER ['HTTP_X_FORWARDED_FOR'];
    else
      $ip=$_SERVER ['REMOTE_ADDR'];

    return $ip;
}	

function log_r($usuario,$tipo_evento,$otro)
{
$database = new db_mysql();
$database->connect();
$direccion_ip=DireccionIP();
$fecha=ahorita();
$insertando_log="USUARIO='{$usuario}',EVENTO='{$tipo_evento}',IP='{$direccion_ip}',FECHA='{$fecha}',LOG='{$otro}'";	
$database->insert("log" ,"$insertando_log");
}

function levanta_registro($tabla,$filtro) 
{
$database = new db_mysql();
$database->connect();
$consulta_mysql="select *  from " .$tabla. " where ".$filtro;
$result = $database->list_assoc($consulta_mysql);
foreach($result as $row3)
{}
return $row3;										
}



function busca_registro($tabla,$indice,$campos,$filtro,$valorsinoencuentranada) 
{
$database = new db_mysql();
$database->connect();
$consulta_mysql="select ".$indice.",".$campos." from " .$tabla. " where ".$indice."=".$filtro;
$result = $database->list_assoc($consulta_mysql);
foreach($result AS $row) 
{ 
$salida=$row["$campos"] ;
} 
if ($salida=="") {$salida=$valorsinoencuentranada;}				
return $salida;										
}

function enrosca($string, $key) {
   $result = '';
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)+ord($keychar));
      $result.=$char;
   }
   return base64_encode($result);
}

function desenrosca($string, $key) {
   $result = '';
   $string = base64_decode($string);
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)-ord($keychar));
      $result.=$char;
   }
   return $result;
}

function var_url($var_url,$posicion)
{
$ruta=$var_url;
$ruta=str_replace(" ","+",$ruta);
$modulos_partes=desenrosca($ruta, $_SESSION["clave"]);
$modulos_param= explode('***',$modulos_partes);
$es_array= is_array($modulos_param)?'si':'no';
if ($es_array=="si")
{
$modulo = $modulos_param[$posicion];

}
else
{$modulo = $modulos_partes;}

return $modulo;	
}

function var_for()
{
$numero2 = count($_POST)-1;
$tags2 = array_keys($_POST); // obtiene los nombres de las varibles  
$valores2 = array_values($_POST);// obtiene los valores de las varibles  
for($i=0;$i<$numero2;$i++)
{ 

if (verifica_fecha($valores2[$i])=="SI") 
{$valores2[$i]=conviertefechas($valores2[$i],"G");}
 if ( $tags2[$i]<>"_wysihtml5_mode")
 {	 
$$tags2[$i]=$valores2[$i];   
//echo $tags2[$i];
//echo $i;
//$var_post=$tags2[$i]."='"."{".$$tags2[$i]."}'";
$var_post=$tags2[$i]."='".$valores2[$i]."'";
//$var_post="hola l";
//echo $var_post;
if ($i==$numero2-1)
{ 
$insertando=$insertando.$var_post; }
else
{
	$insertando=$insertando.$var_post." , "; } 

 }
	}    

	return $insertando;
}

function verifica_fecha($x) {
	$esfecha="NO";
    if (date('d-m-Y', strtotime($x)) == $x) {
		$esfecha="SI";
      return $esfecha;
    } else {
      return $esfecha;
    }
}

function noticia ($titulo,$msg)
{echo '<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>'.$titulo.'</strong> '.$msg.'</div>'; }
  
  function error ($titulo,$msg)
{echo '<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>'.$titulo.'</strong> '.$msg.'</div>'; }
  
    function exito ($titulo,$msg)
{echo '<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>'.$titulo.'</strong> '.$msg.'</div>'; }
  
  function carga()
  {
  $salida= '
  
  <div class="preloader-area">
            <div class="preloader">
                <div class="loader">
                    <div class="loader-dot"></div>
                    <div class="loader-dot"></div>
                    <div class="loader-dot"></div>
                    <div class="loader-dot"></div>
                    <div class="loader-dot"></div>
                    <div class="loader-dot"></div>
                    <div class="loader-text"></div>
                </div>
            </div>
        </div>
		';
		
		return sleep(20); $salida;
		
		}
  
?>