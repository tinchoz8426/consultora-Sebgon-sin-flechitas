<?php


function proteje($string, $key) {
   $result = '';
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)+ord($keychar));
      $result.=$char;
   }
   return base64_encode($result);
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

function grafico_circular_mediano($color,$porcentaje,$detalle)
{
echo'
<li class="circular-chart-inline">
<div class="circular-chart" data-percent="'.$porcentaje.'" data-size="90" data-bar-color="'.$color.'">'.$porcentaje.'%</div>
<span class="description">'.$detalle.'</span>
</li>';

}

function abonos_resumen()
{
$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * FROM  ctasctes_cuentas ";
$rowl = $database->list_assoc($clientes_sql);
$cantidad_abonos=0;
foreach($rowl as $row)
{ 			
$abonos_cuenta=abonos_suma($row['IDEN']);
$acumula_abonos=$abonos_cuenta[0]+$acumula_abonos;
if ($abonos_cuenta[0]>0)
{estadistica_simple($abonos_cuenta[1],'Anual '.$abonos_cuenta[0]*12,$row['DETALLE'],$abonos_cuenta[0]); 
$cantidad_abonos=$cantidad_abonos+$abonos_cuenta[1];
}
} 
estadistica_simple($cantidad_abonos,'Anual'.$acumula_abonos*12,'Estimado Mensual',$acumula_abonos);

}



function abonos_suma($cuenta)
{
$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * FROM  abonos_precios where CUENTA=".$cuenta;
$rowl = $database->list_assoc($clientes_sql);
$contador=0;
foreach($rowl as $row)
{ 
$contador=$contador+1;			
$ciclo=buscaregistro(ciclos,IDEN,MESES,$row['CICLO']);
$parcial=($row['IMPORTE']/$ciclo)+$parcial;

}
$salida=array(number_format($parcial,2,',',''),$contador);
return $salida; 
}



function estadistica_simple($destacado,$titulo,$link,$valor)

{
echo'
<div class="col-sm-3 col-md-2 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content">
								<div class="visual yellow">
									'.$destacado.'
								</div>
								<div class="title">'.$titulo.'</div>
								<div class="value">'.$valor.'</div>
								<a class="more" href="javascript:void(0);">'.$link.'<i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
</div> <!-- /.col-md-3 -->';
	
}



function sumarmeses($nuevafecha,$incremento)
{ 
$incremento=(int)$incremento;
$nuevafecha=strtotime($nuevafecha);
$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
//$nuevafecha=date_format($nuevafecha, 'Y-m-j');
$nuevafecha = strtotime ( '+'.$incremento.' month' , strtotime ( $nuevafecha ) ) ;
$nuevafecha = date ( 'd-m-Y' , $nuevafecha );
return $nuevafecha;
}

function sumarmeses2($nuevafecha,$incremento)
{ 
$incremento=(int)$incremento;
$nuevafecha=strtotime($nuevafecha);
$nuevafecha = date ( 'Y-m-d' , $nuevafecha );
//$nuevafecha=date_format($nuevafecha, 'Y-m-j');
$nuevafecha = strtotime ( '+'.$incremento.' month' , strtotime ( $nuevafecha ) ) ;
$nuevafecha = date ( 'Y-m-d' , $nuevafecha );
return $nuevafecha;
}

function abono_vigente($abono,$fecha)
{
$fecha=conviertefechas($fecha,"G");		
$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * FROM  abonos_precios where  ABONO=$abono AND VIGENCIA_DESDE<='$fecha' AND (VIGENCIA_HASTA >='$fecha' OR VIGENCIA_HASTA='0000-00-00')";
$rowl = $database->list_assoc($clientes_sql);	
$encontrados=count($rowl);
if ($encontrados==1)
{
foreach($rowl as $row)
{ 			
return $row['IMPORTE'];
} 
}	

else
{

return	$encontrados;
	
}
		
}

function abono_ciclo($abono,$fecha)
{
$fecha=conviertefechas($fecha,"G");		
$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * FROM  abonos_precios where  ABONO=$abono AND VIGENCIA_DESDE<='$fecha' AND (VIGENCIA_HASTA >='$fecha' OR VIGENCIA_HASTA='0000-00-00')";
$rowl = $database->list_assoc($clientes_sql);	
$encontrados=count($rowl);
if ($encontrados==1)
{
foreach($rowl as $row)
{ 			
return $row['CICLO'];
} 
}	

else
{

return	$encontrados." err";
	
}
		
}



function abono_periodo($abono,$fecha)
{
$fecha=conviertefechas($fecha,"G");	
$fecha_2=	conviertefechas($fecha,"G");
$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * FROM  abonos_precios where  ABONO=$abono AND VIGENCIA_DESDE<='$fecha' AND (VIGENCIA_HASTA >='$fecha' OR VIGENCIA_HASTA='0000-00-00')";
$rowl = $database->list_assoc($clientes_sql);	
$encontrados=count($rowl);
if ($encontrados==1)
{
foreach($rowl as $row)
{ 
$cantidad_meses=buscaregistro(ciclos,IDEN,MESES,$row['CICLO']);
$ciclo_actual_desde=conviertefechas($row['VIGENCIA_DESDE'],"G");
//$ciclo_actual_hasta=conviertefechas(restardias(sumarmeses($row['VIGENCIA_DESDE'],$cantidad_meses),1),"G");
$ciclo_actual_hasta=conviertefechas(sumarmeses($row['VIGENCIA_DESDE'],$cantidad_meses),"G");

$ciclo_actual_desde_2= conviertefechas($ciclo_actual_desde,"G");
$ciclo_actual_hasta_2=conviertefechas($ciclo_actual_hasta,"G");		
$ciclo_p="";


if (($fecha_2>=$ciclo_actual_desde_2) and ($fecha_2<=$ciclo_actual_hasta_2))
{$ciclo_p="";}
else
{

for ($i = 1; ; $i++) 
{
$ciclo_actual_desde_2=sumarmeses2($ciclo_actual_desde_2,$cantidad_meses);
$ciclo_actual_hasta_2=sumarmeses2($ciclo_actual_hasta_2,$cantidad_meses);	
if (($fecha_2>=$ciclo_actual_desde_2) and ($fecha_2<$ciclo_actual_hasta_2))
//if ($fecha_2<=$ciclo_actual_hasta_2)
//if ($fecha_2<conviertefechas(restardias($ciclo_actual_hasta_2,2),"G"))
{	

break;
}
}


}	
$test=$ciclo_actual_hasta_2;
$salida1=conviertefechas($ciclo_actual_desde_2.$ciclo_p,"C")." / ".restardias($ciclo_actual_hasta_2,1).' '.$test;
$salida2=enrosca(conviertefechas($ciclo_actual_desde_2.$ciclo_p,"C")."*".restardias($ciclo_actual_hasta_2,1)."*".$row['CICLO']."*".$abono."*".$row['IDEN']."*".$row['CUENTA']."*".$row['OBSERVACIONES']."*".$row['IMPORTE']."*".$row['CLIENTE']);
$salida3=$row['CUENTA'];
$salida=array($salida1,$salida2,$salida3);

return  $salida;
} 
}	

else
{

return	$encontrados." err";
	
}
		
}




function tareas_pendientes($usuario)
{

$tareas=cuentaregistros("tareas where estado='pendiente' and para=".$usuario);
if ($tareas>0)
{
	error('Ud. tiene '.$tareas.' tareas pendientes ' ,'' ); 
}
}

function ultimo_dia($ref) { 
      $month = date('m');
      $year = date('Y');
      $day = date("d", mktime(0,0,0, $month+1, 0, $year));
 
      return date('Y-m-d', mktime(0,0,0, $month, $day, $year));
  };
  
  function ultimo_dia_ant($ref) { 
  //$mes_anterior=echo date("Y-m-d",mktime(0,0,0,date("m")-1,date("d"),date("Y")));
      $ref=$ref+1;
	  $month = date('m')-$ref;
      $year = date('Y');
      $day = date("d", mktime(0,0,0, $month+1, 0, $year));
 
      return date('Y-m-d', mktime(0,0,0, $month, $day, $year));
  };
 
  /** Actual month first day **/
  
  function primer_dia_ant($ref) {
      $ref=$ref+1;
	  $month = date('m')-$ref;
      $year = date('Y');
      return date('Y-m-d', mktime(0,0,0, $month, 1, $year));
  }

  
  
  function primer_dia() {
      $month = date('m');
      $year = date('Y');
      return date('Y-m-d', mktime(0,0,0, $month, 1, $year));
  }



function suma_columna ($nomscr,$col)
{
	$salida= "<script>
$(document).ready(function() {
    $('#".$nomscr."').DataTable( {
        'footerCallback': function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
			
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( ".$col." )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( ".$col.", { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( ".$col." ).footer() ).html(
                '$'+pageTotal +'<br>($'+ total +')'
            );
        }
    } );
} );
</script>";

echo $salida;

}

function despliega_full_requerido ($tabla,$nombre_a_mostrar,$resultado,$indice,$campos,$orden,$defectoI,$defectoN,$ancho) 
{
	$consulta_mysql="select ".$indice.",  ".$campos." as concatenado from " .$tabla. " order by ".$orden;
	$result=mysql_query($consulta_mysql)or trigger_error(mysql_error());
		
	echo '
	
	
	<div class="col-md-'.$ancho.'"><select name="'.$resultado.'" id="'.$resultado.'" class="select2-select-00 col-md-'.$ancho.' full-width-fix" required>\n';
	
	echo   "<option value='".$defectoI. "' selected='selected'> ".nl2br( $defectoN)." </option>\n" ;
		while($row = mysql_fetch_array($result)){
		
		foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
			
			echo   "<option value='".nl2br( $row["$indice"]). "'> ". nl2br( $row[concatenado])." </option>\n" ;
			
		} 
	echo '	
	</select>
	</div>
	
	'; 
}









    function leepais($abrebase)
	{
include $abrebase ; 
$query = "SELECT CODIGO, NOMBRE FROM paises ORDER BY NOMBRE";
$resultado=$mysqli->query($query);
echo '<div class="form-group">
		
			<label class="col-md-2 control-label" >PAÍS: </label>
			<div class="col-md-10">
			<select name="cbx_estado" id="cbx_estado" class="select2-select-00 col-md-12 full-width-fix">
			
			<option value="0">Seleccionar País</option>';
			
			while($row = $resultado->fetch_assoc()) { 
			echo '<option value="'. $row['CODIGO'].'">'. $row['NOMBRE'].'</option>';
			}
			echo '</select></div></div>
			
			<div class="form-group">
			<label class="col-md-2 control-label" for="input17">PROVINCIA: </label>
			<div class="col-md-10">
			<select name="cbx_municipio" id="cbx_municipio" class="select2-select-00 col-md-12 full-width-fix"></select></div></div>
			
			<div class="form-group">
			
			
			
			<label class="col-md-2 control-label" for="input17">LOCALIDAD: </label>
			<div class="col-md-10">
			<select name="cbx_localidad" id="cbx_localidad" class="select2-select-00 col-md-12 full-width-fix"></select></div></div>
			
			 ';
	
	
	}
	 

	function leeprovincias($abrebase)
	{
		include $abrebase ;
		$id_estado = $_POST['id_estado'];
		$queryM = "SELECT PAIS, NOMBRE, IDEN FROM provincias WHERE PAIS = '$id_estado' ORDER BY NOMBRE";
		$resultadoM = $mysqli->query($queryM);
		$html= "<option value='0'>Seleccion una provincia </option>";
		while($rowM = $resultadoM->fetch_assoc())
		{
		$html.= "<option value='".$rowM['IDEN']."'>".$rowM['NOMBRE']."</option>";
		}
		echo $html;
	}
	
	function leeciudad($abrebase)
	{
		include $abrebase;
		$id_municipio = $_POST['id_municipio'];
		$query = "SELECT IDEN, PROVINCIA, concat(CODIGOPOSTAL, ' ', NOMBRE) AS NOMBRE FROM localidad WHERE PROVINCIA = '$id_municipio' ORDER BY NOMBRE";
		$resultado=$mysqli->query($query);
		while($row = $resultado->fetch_assoc())
		{
		$html.= "<option value='".$row['IDEN']."'>".$row['NOMBRE']."</option>";
		}
		echo $html;
		echo "provincia ". $id_municipio;
	}






function buscatelefonos($filtrobusquedatel,$llamando)
{
include "include/openbase.php";
$user= $_SESSION['userextension'];
$queTel ="SELECT * FROM telefonos where telefonos.pointer='".$filtrobusquedatel."'" ;
$resTel = mysql_query($queTel, $conexion) or die(mysql_error());
$totTel = mysql_num_rows($resTel);
if ($totTel> 0) {
while ($rowTel = mysql_fetch_assoc($resTel)) {
																								
						if ($rowTel['pais']=="0054"){$rowTel['pais']="";} 
						if ($rowTel['area']=="11"){$rowTel['area']="";}
						$numallamar=trim($rowTel['pais']).trim($rowTel['area']).trim($rowTel['movil']).trim($rowTel['numero']);
						
						$printtel.= "<a href='modulos/llamador.php?ext=".$user."&num=".$numallamar."&visor=".$llamando."?iframe=true&width=25%&height=25%'  rel='modalBox'>"."(".substr($rowTel['tipo'],0,3). ") " .$numallamar."</a> - ";
						
						}}return $printtel;
}

function buscausuario($filtrobusquedatel)
{
include "include/openbase.php";
$queTel ="SELECT * FROM usuarios where ID='".$filtrobusquedatel."'" ;
$resTel = mysql_query($queTel, $conexion) or die(mysql_error());
$totTel = mysql_num_rows($resTel);
if ($totTel> 0) {
while ($rowTel = mysql_fetch_assoc($resTel)) {
																										
						$printtel.= $rowTel['Nombre']."  ".$rowTel['Apellido'];
						}} if ($filtrobusquedatel=="9999"){$printtel.="Todos los usuarios" ;}return $printtel;
}


function buscadireccion($filtrobusquedatel)
{
include "include/openbase.php";
$queTel ="SELECT * FROM direcciones where direcciones.pointer='".$filtrobusquedatel."'" ;
$resTel = mysql_query($queTel, $conexion) or die(mysql_error());
$totTel = mysql_num_rows($resTel);
if ($totTel> 0) {
while ($rowTel = mysql_fetch_assoc($resTel)) {																									
$printdir.="<br>".$rowTel['tipo']." : ".$rowTel['Calle']." ".$rowTel['Ciudad']." ".$rowTel['Provincia']." ".$rowTel['CP']." ".$rowTel['Pais']." ".$rowTel['observaciones']." ";
						
						
						
						
						}}
						return $printdir;
}
function ahorita(){
$ahorita=date("Y-m-d H:i:s");

return $ahorita;}

function mayuscula($cadena){
$ahorita=ucwords(strtolower($cadena));

return $ahorita;}




 function desdehasta ($atras) {
 
$fechaprocesada=date("Y-m-d");
$fechaprocesada = strtotime ( $atras ) ; 
$fechaprocesada = date ( 'Y-m-d' , $fechaprocesada);
 return $fechaprocesada;}
 

 
function vencimiento ($inicio) {
$ahorita=date("Y-m-d"); 
$fechaprocesada=date("Y-m-d",strtotime($inicio));
$dias=$ahorita-$fechaprocesada;
return $dias;}
 
 

function entredosfechas($fecha1,$fecha2) {
// fechas en formato AAAA/MM/DD
//defino fecha 1
//$fecha1=date("Y-m-d");
//$fecha2=date("Y-m-d");
$f1 = explode("-",$fecha1);
$ano1 = $f1[0];
$mes1 = $f1[1];
$dia1 = $f1[2];

//defino fecha 2
$f2 = explode("-",$fecha2);
$ano2 = $f2[0];
$mes2 = $f2[1];
$dia2 = $f2[2];

//calculo timestam de las dos fechas
$timestamp1 = mktime(0,0,0,$mes1,$dia1,$ano1);
$timestamp2 = mktime(0,0,0,$mes2,$dia2,$ano2);

//resto a una fecha la otra
$segundos_diferencia = $timestamp2 - $timestamp1;
//echo $segundos_diferencia;

//convierto segundos en días
$dias_diferencia = $segundos_diferencia / (60 * 60 * 24);

//obtengo el valor absoulto de los días (quito el posible signo negativo)
//$dias_diferencia = abs($dias_diferencia);

//quito los decimales a los días de diferencia
$dias_diferencia = floor($dias_diferencia);

return $dias_diferencia;
}

function vto($fecha2) {
// fechas en formato AAAA/MM/DD
//defino fecha 1
$fecha1=date("Y-m-d");
$f1 = explode("-",$fecha1);
$ano1 = $f1[0];
$mes1 = $f1[1];
$dia1 = $f1[2];

//defino fecha 2
$f2 = explode("-",$fecha2);
$ano2 = $f2[2];
$mes2 = $f2[1];
$dia2 = $f2[0];

//calculo timestam de las dos fechas
$timestamp1 = mktime(0,0,0,$mes1,$dia1,$ano1);
$timestamp2 = mktime(0,0,0,$mes2,$dia2,$ano2);

//resto a una fecha la otra
$segundos_diferencia = $timestamp2 - $timestamp1;
//echo $segundos_diferencia;

//convierto segundos en días
$dias_diferencia = $segundos_diferencia / (60 * 60 * 24);

//obtengo el valor absoulto de los días (quito el posible signo negativo)
//$dias_diferencia = abs($dias_diferencia);

//quito los decimales a los días de diferencia
$dias_diferencia = floor($dias_diferencia);

return $dias_diferencia;
}

function Fvto($fecha2) {
// fechas en formato AAAA/MM/DD
//defino fecha 1
$fecha1=date("Y-m-d");
$f1 = explode("-",$fecha1);
$ano1 = $f1[0];
$mes1 = $f1[1];
$dia1 = $f1[2];

//defino fecha 2
$f2 = explode("-",$fecha2);
$ano2 = $f2[0];
$mes2 = $f2[1];
$dia2 = $f2[2];

//calculo timestam de las dos fechas
$timestamp1 = mktime(0,0,0,$mes1,$dia1,$ano1);
$timestamp2 = mktime(0,0,0,$mes2,$dia2,$ano1);

//resto a una fecha la otra
$segundos_diferencia = $timestamp1 - $timestamp2;
//echo $segundos_diferencia;

//convierto segundos en días
$dias_diferencia = $segundos_diferencia / (60 * 60 * 24);

//obtengo el valor absoulto de los días (quito el posible signo negativo)
//$dias_diferencia = abs($dias_diferencia);

//quito los decimales a los días de diferencia
$dias_diferencia = floor($dias_diferencia);
if ($dias_diferencia>3 ){
$timestamp2 = mktime(0,0,0,$mes2,$dia2,$ano1+1);
} else {$timestamp2 = mktime(0,0,0,$mes2,$dia2,$ano1);}
return date('d-m-Y',$timestamp2);
}


function despliega ($resultado,$tabla,$indice,$campos,$orden,$defectoI,$defectoN) {
				$consulta_mysql="select ".$indice.",".$campos." from " .$tabla. " order by ".$orden;
				$result=mysql_query($consulta_mysql)or trigger_error(mysql_error());


				echo ' <div class="form-group"><label class="col-md-2 control-label" for="'.$resultado.'">'.$resultado.'</label><div class="col-md-10"><select name="'.$resultado.'" id="'.$resultado.'" class="select2-select-00 col-md-12 full-width-fix">\n';

				 
				echo   "<option value='".$defectoI. "' selected='selected'> ".nl2br( $defectoN)." </option>\n" ;
				while($row = mysql_fetch_array($result)){
				
				foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
				 
				echo   "<option value='".nl2br( $row["$indice"]). "'> ".nl2br( $row["$campos"])." </option>\n" ;

				} 

								
															
				echo '	</select>
				</div>
				</div>'; 
}

function despliega2 ($resultado,$tabla,$indice,$campos,$orden,$defectoI,$defectoN) {
				$consulta_mysql="select ".$indice.",".$campos." from " .$tabla. " order by ".$orden;
				$result=mysql_query($consulta_mysql)or trigger_error(mysql_error());


				echo ' <label class="col-md-2 control-label" for="'.$resultado.'">'.$resultado.'</label><div class="col-md-2"><select name="'.$resultado.'" id="'.$resultado.'" class="select2-select-00 col-md-12 full-width-fix">\n';

				 
				echo   "<option value='".$defectoI. "' selected='selected'> ".nl2br( $defectoN)." </option>\n" ;
				while($row = mysql_fetch_array($result)){
				
				foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
				 
				echo   "<option value='".nl2br( $row["$indice"]). "'> ".nl2br( $row["$campos"])." </option>\n" ;

				} 

								
															
				echo '	</select>
				</div>
				'; 
}

function despliegarequerido ($resultado,$tabla,$indice,$campos,$orden,$defectoI,$defectoN) {
				$consulta_mysql="select ".$indice.",".$campos." from " .$tabla. " order by ".$orden;
				$result=mysql_query($consulta_mysql)or trigger_error(mysql_error());


				echo ' <label class="col-md-2 control-label" for="'.$resultado.'">'.$resultado.'<span class="required">*</span></label><div class="col-md-2"><select name="'.$resultado.'" id="'.$resultado.'" class="col-md-12 select2 full-width-fix required">\n';

				 
				echo   "<option value='".$defectoI. "' selected='selected'> ".nl2br( $defectoN)." </option>\n" ;
				while($row = mysql_fetch_array($result)){
				
				foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
				 
				echo   "<option value='".nl2br( $row["$indice"]). "'> ".nl2br( $row["$campos"])." </option>\n" ;

				} 

								
															
				echo '	</select><label for="'.$resultado.'" generated="true" class="has-error help-block" style="display:none;"></label>
				</div>
				'; 
}

function supergaleria ($primerlinea,$tercerlinea,$foto,$segundalinea,$cuartalinea) {

 echo '<div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src='.str_replace(" ","%20",$foto).' alt="..." class="team-img">
          <div class="caption">
		   <p>'.$cuartalinea.'</p>
            <h3>'.$primerlinea.'</h3>
			<p>'.$segundalinea.'</p>
            <p>'.$tercerlinea.'</p>
            
          </div>
        </div>
      </div>';

}

function sumardias($nuevafecha,$incremento)
{ 
$incremento=(int)$incremento;
$nuevafecha=strtotime($nuevafecha);
$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
//$nuevafecha=date_format($nuevafecha, 'Y-m-j');
$nuevafecha = strtotime ( '+'.$incremento.' day' , strtotime ( $nuevafecha ) ) ;
$nuevafecha = date ( 'd-m-Y' , $nuevafecha );
return $nuevafecha;
}

function restardias($nuevafecha,$incremento)
{ 
$incremento=(int)$incremento;
$nuevafecha=strtotime($nuevafecha);
$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
//$nuevafecha=date_format($nuevafecha, 'Y-m-j');
$nuevafecha = strtotime ( '-'.$incremento.' day' , strtotime ( $nuevafecha ) ) ;
$nuevafecha = date ( 'd-m-Y' , $nuevafecha );
return $nuevafecha;
}




function sumardias2($nuevafecha,$incremento,$operacion,$importecuota)
{ 

$incremento=(int)$incremento;
$nuevafecha=strtotime($nuevafecha);
$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
$contador=1;
echo "Cantidad de cuotas".$incremento."</br>";
	while($contador<= $incremento){
	$diadelasemana = (int)date('N', strtotime($nuevafecha));
	//echo $diadelasemana;
		if($diadelasemana== 7 ){echo "domingo ".$nuevafecha."</br>";} else {
				
			echo "cuota ".$contador." fecha ". $nuevafecha. "</br>";
			$sql2="INSERT INTO `calendario_cobranzas` ( `OPERACION` , `FECHA` , `CUOTA`, `IMPORTE`) VALUES ('{$operacion}' , '{$nuevafecha}' , '{$contador}' , '{$importecuota}' )";
			mysql_query($sql2) or die(mysql_error());
			
			$contador++;
			}
		
			IF ($contador<=$incremento){
			$nuevafecha = strtotime ( '+1 day' , strtotime ( $nuevafecha ));
			$nuevafecha = date ( 'Y-m-j' , $nuevafecha );}
			//echo $nuevafecha;
	}
$nuevafecha=strtotime($nuevafecha);
$nuevafecha = date ( 'd-m-Y' , $nuevafecha );
echo "numdecuotas".$incremento;
echo $contador;
echo $nuevafecha;
return $nuevafecha;


}
function identificadoraleatorio ($sinvariable)
{$identificador=time().substr(md5(microtime()),0, rand(5, 12));

return strval($identificador);}


function fechapordefecto($incremento)
{ 
$incremento=(int)$incremento;
$nuevafecha=date('Y-m-j');
$nuevafecha = strtotime ( '+'.$incremento.' day' , strtotime ( $nuevafecha ) ) ;
$nuevafecha = date ( 'd-m-Y' , $nuevafecha );
return $nuevafecha;
}

function exito($titulo,$msg){
echo '<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>'.$titulo.'</strong> '.$msg.'
								</div>';
}



function error($titulo,$msg){
echo '<div class="alert alert-danger fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>'.$titulo.'</strong> '.$msg.'
								</div>';
}



						
function buscaregistro($tabla,$indice,$campos,$filtro,$valorsinoencuentranada) 
{
	$consulta_mysql="select ".$indice.",".$campos." from " .$tabla. " where ".$indice."=".$filtro;
	$result=mysql_query($consulta_mysql)or trigger_error(mysql_error());
	$coincidencias = mysql_num_rows($result);
	while($row = mysql_fetch_array($result))
		{ 
		foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
		$salida=$row["$campos"] ;
		} 
	if ($coincidencias<1) {$salida=$valorsinoencuentranada;}				
	return $salida;												
}

function buscaregistro_concat ($tabla,$indice,$campos,$filtro,$valorsinoencuentranada) {
$consulta_mysql="select ".$indice.",".$campos." from " .$tabla. " where ".$indice."=".$filtro;
$result=mysql_query($consulta_mysql)or trigger_error(mysql_error());
$coincidencias = mysql_num_rows($result);

while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 

//$salida=$row["$campos"] ;
$salida=$row["salida"] ;

} 
if ($coincidencias<1) {$salida=$valorsinoencuentranada;}				
return $salida;										
	
}


function buscaregistro2 ($tabla,$indice1,$indice2,$indice3,$campos,$filtro1,$filtro2,$filtro3,$valorsinoencuentranada) {
		$consulta_mysql="select ".$indice1.",".$campos." from " .$tabla. " where ".$indice1."=".$filtro1." and " .$indice2."=".$filtro2." and " .$indice3."=".$filtro3;
		$result=mysql_query($consulta_mysql)or trigger_error(mysql_error());
$coincidencias = mysql_num_rows($result);

		while($row = mysql_fetch_array($result)){ 
		foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
		 
		$salida=$row["$campos"] ;
		
		
		

		} 

		if ($coincidencias<1) {$salida=$valorsinoencuentranada;}				
			return $salida;										
		
}



function sumavalores ($tabla,$campos) {
		$consulta_mysql="select  sum(".$campos.") as acumulador from " .$tabla;
		$result=mysql_query($consulta_mysql)or trigger_error(mysql_error());
$row = mysql_fetch_array($result, MYSQL_ASSOC);
		
		return $row["acumulador"];

		} 
		
		function cuentaregistros ($tabla) {
		$consulta_mysql="select  * from " .$tabla;
		$result=mysql_query($consulta_mysql)or trigger_error(mysql_error());
$row_cnt = mysql_num_rows($result);
		
		return $row_cnt;

		} 

function pingDomain($domain){
    $starttime = microtime(true);
    $file      = @fsockopen ($domain, 80, $errno, $errstr, 10);
    $stoptime  = microtime(true);
    $status    = 0;
 
    if (!$file) $status = -1;  // Site is down
    else {
        fclose($file);
        $status = ($stoptime - $starttime) * 1000;
        $status = floor($status);
    }
    
    if ($status <> -1) {
        return true;
    }
 
    return false;
    
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

function visor($nombre, $apellido, $organizacion) {
   $result = '';
   if ((strlen($nombre) + strlen($apellido))>0){
   
			$result=$nombre." ".$apellido;
   
   
		   if (strlen($organizacion)>0){ $result=$result." (".$organizacion.")";
		   
		   }
   
   
   } else { $result=$organizacion;  }
   
   return $result;
}
function mensaje ($color,$mensaje){

$alerta= '<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="'.$color.'"></i>'.$mensaje.'
									
								</div><br />';
								
return $alerta;								
								
								}
								



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
								
								
function registrolog($registro,$campo,$valor_campo)
{
    $identificador=identificadoraleatorio();
    $ip=DireccionIP();
	$fecha=ahorita();
	$str = preg_replace("/\=([A-F][A-F0-9])/","%$1",$str);
    $str = urldecode($str);
    $str = utf8_encode($str);
	$nombre=$_SESSION["Nombre"]. " ".$_SESSION["Apellido"];
	$registrolog = "INSERT INTO `log` ( `UNIQUEID` , `FECHA`, `EVENTO` , `".$campo."`, `IPV4`, `USUARIO_NOMBRE` , `USUARIO`) VALUES (  '{$identificador}' ,   '{$fecha}' ,  '{$registro}' ,  '{$valor_campo}',  '{$ip}', '{$nombre}', {$_SESSION["ID"]} )";

$grabalog = mysql_query($registrolog);

    return $str;
}		


function traza($tabla,$legajo,$campo_anterior,$valor_anterior, $campo_actual, $valor_actual,$referencia)
{
    $identificador=identificadoraleatorio();
    $ip=DireccionIP();
	$fecha=ahorita();
	
	$nombre=$_SESSION["Nombre"]. " ".$_SESSION["Apellido"];
	$registrolog = "INSERT INTO `".$tabla."` ( `FECHA`, `LEGAJO`,`USUARIO`,`".$campo_anterior."`,`".$campo_actual."`,`OBSERVACIONES` ) VALUES (   '{$fecha}','{$legajo}','{$_SESSION["ID"]}','{$valor_anterior}','{$valor_actual}','{$referencia}' )";
	$grabalog = mysql_query($registrolog);

    return $str;
}		





						

function botonimprimir($texto) {

echo '<div class="buttons">
											<a class="btn btn-success btn-lg hidden-print" href="javascript:void(0);" onclick="javascript:window.print();"><i class="icon-print"></i>'. $texto.'</a>
											
					</div>';

}	

function botonverde($texto,$ruta,$link) { echo '<a href="'.$ruta.'='.enrosca($link).'"><button class="btn btn-xs btn-success">'.$texto.'</button></a>';}
function botonrojo($texto,$ruta,$link) { echo '<a href="'.$ruta.'='.enrosca($link).'"><button class="btn btn-xs btn-alert">'.$texto.'</button></a>';}
function botonverde_e($texto,$ruta,$link) { echo '<a href="'.$ruta.'='.$link.'"><button class="btn btn-xs btn-success">'.$texto.'</button></a>';}
function botonverdeemergente($texto,$ruta,$link,$ancho,$alto) { echo '<a href="'.$ruta.$link.'" rel="modalBox" ><button class="btn btn-xs btn-success">'.$texto.'</button></a>';}



function presentismo($dia,$idempleado,$sede,$mes,$año)
{
$presente_hoy="s";
$fecha_evaluada=$año."-".$mes."-".$dia;	
//$fecha_evaluada=strtotime($fecha_evaluada);
$dia_semana=date("w", strtotime($fecha_evaluada));
if (($dia_semana==6) or ($dia_semana==0)){$fondo_celda='bgcolor="#D1DEE5"';}
//date_format(fecha, '%d')

$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * FROM  contratos_ausentismo where  SERVICIO=$sede and LEGAJO=$idempleado and EXTRAS=0 and  FECHA = '$fecha_evaluada' and ERROR<>'S'";
$rowl = $database->list_assoc($clientes_sql);	

foreach($rowl as $row)
		{ 		
			$presente_hoy="n";
			$modifica="'emerge.php?modulo=servyar/presentismo/modifica_ausente_extra&iden=".$row['IDEN']."?iframe=true&width=500&height=500'".  'rel="modalBox"' ;		
			
			if (((int)$row['DESCUENTOS_HORAS']>0) or ((int)$row['DESCUENTOS_MINUTOS']>0))
			{return '<td '.$fondo_celda.'><b><a class="text-danger" href='.$modifica.'>'."T".'</a></b></td>';}
		
			$motivo_a=buscaregistro(contratos_motivo_a,CODIGO,CODIGO_VISIBLE,"'".$row['MOTIVO_A']."'");
			
			if ( buscaregistro(contratos_motivo_a,CODIGO,DESCUENTA,"'".$row['MOTIVO_A']."'")=="1")
			{return '<td '.$fondo_celda.'><b><a class="text-danger" href='.$modifica.'>'.$motivo_a.'</a></b></td>';}
		    else {
				
			return '<td '.$fondo_celda.'><b><a class="text-info" href='.$modifica.'>'.$motivo_a.'</a></b></td>';} 
		

		
		} 	
	//echo $idempleado;
	if ($presente_hoy=="s"){ 
	
	$clientes_sql = "SELECT * FROM  contratos_personal where  SERVICIO=$sede and LEGAJO_IDEN=$idempleado   and ERROR<>'S'";
$rowl = $database->list_assoc($clientes_sql);	

foreach($rowl as $row)
		{ 		
			$modifica="'emerge.php?modulo=servyar/presentismo/modifica_ausente_extra&iden=".$row['IDEN']."?iframe=true&width=500&height=500'".  'rel="modalBox"' ;		
			
			if ($dia_semana==6){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['SAB']);}
			if ($dia_semana==0){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['DOM']);}
			if ($dia_semana==1){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['LAV']);}
			if ($dia_semana==2){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['LAV']);}
			if ($dia_semana==3){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['LAV']);}
			if ($dia_semana==4){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['LAV']);}
			if ($dia_semana==5){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['LAV']);}
		
		} 	
	
	$cargahoras="'emerge.php?modulo=servyar/presentismo/ausente&LEGAJO=".$row['LEGAJO_IDEN']."&sede=".$sede."&fecha=".$fecha_evaluada."?iframe=true&width=400&height=500'".  'rel="modalBox"' ;
	
	if ($horas_pactadas==0){return '<td '.$fondo_celda.' ></td>';} else {return '<td '.$fondo_celda.'><a class="text-info" href='.$cargahoras.'>'.$horas_pactadas.'</a></b></td>';}}
	//'<a href='.$modifica.'>'.$horas_pactadas.'</a>'
	
}

function jornada($dia,$idempleado,$sede,$mes,$año)
{
$presente_hoy="s";
$fecha_evaluada=$año."-".$mes."-".$dia;	
//$fecha_evaluada=strtotime($fecha_evaluada);
$dia_semana=date("w", strtotime($fecha_evaluada));
if (($dia_semana==6) or ($dia_semana==0)){$fondo_celda='bgcolor="#D1DEE5"';}
//date_format(fecha, '%d')

$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * FROM  contratos_ausentismo where  SERVICIO=$sede and LEGAJO=$idempleado and EXTRAS=0 and  FECHA = '$fecha_evaluada' and ERROR<>'S'";
$rowl = $database->list_assoc($clientes_sql);	

foreach($rowl as $row)
		{ 		
			$presente_hoy="n";
			$modifica="'emerge.php?modulo=servyar/presentismo/modifica_ausente_extra&iden=".$row['IDEN']."?iframe=true&width=500&height=500'".  'rel="modalBox"' ;		
			if ($row['MOTIVO_A']=="I")
			{return '<td '.$fondo_celda.'><b><a class="text-danger" href='.$modifica.'>'."A".'</a></b></td>';}
		    else {
				if ($row['MOTIVO_A']=="V")
			{return '<td '.$fondo_celda.'><b><a class="text-info" href='.$modifica.'>'."V".'</a></b></td>';} else {return '<td '.$fondo_celda.'><b><a class="text-info" href='.$modifica.'>'."J".'</a></b></td>';}}
		

		
		} 	
	//echo $idempleado;
	if ($presente_hoy=="s"){ 
	
	$clientes_sql = "SELECT * FROM  contratos_personal where  SERVICIO=$sede and LEGAJO_IDEN=$idempleado   and ERROR<>'S'";
$rowl = $database->list_assoc($clientes_sql);	

foreach($rowl as $row)
		{ 		
			$modifica="'emerge.php?modulo=servyar/presentismo/modifica_ausente_extra&iden=".$row['IDEN']."?iframe=true&width=500&height=500'".  'rel="modalBox"' ;		
			
			if ($dia_semana==6){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['SAB']);}
			if ($dia_semana==0){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['DOM']);}
			if ($dia_semana==1){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['LAV']);}
			if ($dia_semana==2){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['LAV']);}
			if ($dia_semana==3){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['LAV']);}
			if ($dia_semana==4){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['LAV']);}
			if ($dia_semana==5){$horas_pactadas=buscaregistro(legajos_turnos, IDEN,HORAS,$row['LAV']);}
		
		} 	
	
	
	
	if ($horas_pactadas==0){} else {return $horas_pactadas;}}
	
	
}
 

function hsextras($dia,$idempleado,$sede,$mes,$año)
{
$fecha_evaluada=$año."-".$mes."-".$dia;	
//$fecha_evaluada=strtotime($fecha_evaluada);
$dia_semana=date("w", strtotime($fecha_evaluada));
if (($dia_semana==6) or ($dia_semana==0)){$fondo_celda='bgcolor="#D1DEE5"';}	
$database = new db_mysql();
$database->connect();

$clientes_sql = "SELECT * FROM  contratos_ausentismo where  SERVICIO=$sede and LEGAJO=$idempleado and EXTRAS<>0 and  FECHA = '$fecha_evaluada' and ERROR<>'S'";

$rowl = $database->list_assoc($clientes_sql);	

foreach($rowl as $row)
		{ 	

		} 	$modifica="'emerge.php?modulo=servyar/presentismo/modifica_extra&iden=".$row['IDEN']."?iframe=true&width=300&height=260'".  'rel="modalBox"' ;		
			return '<td '.$fondo_celda.'>'.'<a href='.$modifica.'>'.$row['EXTRAS'].'</a>'.'</td>';
	//echo $idempleado;
}









function presentismo2($dia,$idempleado,$sede)
{
	
$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * FROM  contratos_ausentismo where  SERVICIO=$sede and LEGAJO=$idempleado and EXTRAS=0 and  date_format(fecha, '%d') = $dia";
$rowl = $database->list_assoc($clientes_sql);	

foreach($rowl as $row)
		{ 		
			return "A";
		} 	
	//echo $idempleado;
}








function tabladedatos($rowl,$tipodetabla,$nombredecolumna,$campostabla)

{

	echo ' <div class="widget box">
			<div class="widget-header">
			<h4><i class="icon-reorder"></i></h4>
			<div class="toolbar no-padding">
			<div class="btn-group">
			<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
			</div>
			</div>
			</div>
			<div class="widget-content no-padding">
				<table  class= '.$tipodetabla.'>
				<thead>';

	echo "<tr>"; 
	foreach($nombredecolumna as $nombre => $valor)
	{
	
	echo "<th data-hide='phone'>".$valor."</th>"; 
	
	
	}
	echo "</tr>";
	
	
	echo"</thead>	<tbody>"; 
		

	foreach($rowl as $row){
	foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
	echo "<tr>";  
	
	foreach($campostabla as $nombre => $valor)
	{
	echo "<td>" . nl2br( $row["$valor"]) . "</td>";
	}
		
	echo "</tr>"; 
	} 
	echo "</tbody></table>";
	echo"</div></div>"; 


}	

function despliega_select($tabla,$valor,$detalle,$filtro)
{
$database = new db_mysql();
$database->connect();
$clientes_sql = "SELECT * FROM ".$tabla." order by ".$detalle;
$rowl = $database->list_assoc($clientes_sql);	

foreach($rowl as $row)
		{ 	

			echo '<option value="'.$row["$valor"].'">'.$row["$detalle"].'</option>';
		
		}
}

function avance()
{
	 
    
     echo '  
        <div class="barra">
            <div class="progreso"><div class="porcentaje"></div></div>
        </div>';
		
    echo '<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-info" style="width: 20%"></div>
								</div>';


@ob_flush();
flush();
$total = 200;
for ($i = 0; $i <= $total; $i = $i + 10):
    $actual = $i;
    $porcentaje = round(($actual / $total) * 100, 0);
    echo '
    <script type="text/javascript">
        document.getElementsByClassName("progress-bar progress-bar-info")[0].style= "<?php echo "width: ".$porcentaje; ?>%">;
        document.getElementsByClassName("porcentaje")[0].innerHTML = "<?php echo $porcentaje; ?>%";
    </script> ';
   
    @ob_flush();
    flush();
    usleep(500000);
endfor;

}
	?>
						