<?php
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
echo mysql_error($conexion);
function dump($str){
echo "<pre>";
print_r($str);
echo "</pre>";
}
?>

