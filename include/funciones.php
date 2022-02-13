<?php
function zona($zona)
{
$host="localhost";
$user="c1600138_sebgon";
$passw="18WEgiveri";
$db="c1600138_sebgon";
if (!($conexion=mysql_connect($host,$user,$passw)))
{
echo "Error conectando a la base de datos.";
}
if (!mysql_select_db($db,$conexion))
{
echo "Error seleccionando la base de datos.";
}
@mysql_query("SET NAMES 'utf8'");
$consulta = "SELECT * FROM zonas  Where IDEN=".$zona;
$resEmp_2 = mysql_query($consulta, $conexion) or die(mysql_error());
@mysql_query("SET NAMES 'utf8'");

while ($lista_zonas = mysql_fetch_assoc($resEmp_2)) 
{
$zona_nombre=$lista_zonas['ZONA'];
};
return $zona_nombre;
}
?>