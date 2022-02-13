<?php ob_start();?> 
<?php @session_start();?>
<?php 
require 'clases/clases_db.php';
require 'funciones/funciones_comunes.php';
$usuario= htmlspecialchars ($_POST['usuario']) ;
//$password2    = md5(htmlspecialchars($_POST['password']));
$pass= htmlspecialchars($_POST['pass']);
if (($usuario<>"") and ($pass<>""))
{
$error="";	
$database = new db_mysql();
$database->connect();
$login_sql = "SELECT * from usuarios where user='".$usuario."' and PIN='".$pass."'" ;
$rowl = $database->list_assoc($login_sql);
$contador=0;
foreach($rowl as $row)
{ $contador=$contador+1 ;}
$resultado = $contador;
if ($contador==0){$error="Verifique usuario y contraseña e intente de nuevo o contacte con nuestro ";
log_r($usuario,"login fallido : ".$pass," " );}
if ($contador>1){$error="Se ha producido un error en el inicio de sesión, consulte al soporte técnico";}	
}
if ($resultado<>1)
{	
include 'modulos/login/login_form.php';
}
else
{
session_start();
if ($row['grupo']==4)
{
$_SESSION["Nombre"]=$row['Nombre'];
$_SESSION["Apellido"]=$row['Apellido'];
$_SESSION["IDEN"]=$row['ID'];
$_SESSION['mail']=$row['email'];
$_SESSION["grupo"]=$row['grupo'];
$_SESSION["clave"]=$row['ID'].$row['grupo'].$row['email'];
//$_SESSION["start"]=busca_registro(grupos,IDEN,START,$row['GRUPO']).".php";
$modulo=enrosca("ctas_ctes/ctas_ctes",$_SESSION["clave"]);
$_SESSION["start"]="panel.php?modulo=".$modulo;
$start=$_SESSION["start"];
}
echo "<script>location.href='".$start."';</script>";
die();
}
?>