<?php
include "clases/phpmailer/class.phpmailer.php";
include "clases/phpmailer/class.smtp.php";
$email_user  = "formularios@windi.com.ar";
$email_password = "Myaweb2120";
$the_subject = "Bienvenido a Windi";
$address_to = $usuario_reenvio;
$from_name = "Windi";
$phpmailer = new PHPMailer();
$linea1= "<tr><td align='center'>".utf8_decode("<p> Usuario: ".$usuario_reenvio."</p>")."</td></tr>";
$linea2= "<tr><td align='center'>"."<p> Clave: ".$usuario_clave."</p>"."</td></tr>";
$linea3= "<tr><td align='center'>"."<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p><br><p>Contacto: windi@windi.com.ar </p>"."</td></tr>";

$phpmailer->Username = $email_user;
$phpmailer->Password = $email_password; 

$phpmailer->Host = "mail.windi.com.ar"; 
$phpmailer->Port = 25;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;
$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($address_to);
$phpmailer->Subject = $the_subject;	

$phpmailer->Body.='<table width="600" border="0" cellspacing="1" cellpadding="8" align="center">
<tr><td><div align="center"><img src="https://windi.com.ar/img/logo.png" width="180" height="65"></div></td></tr>';
$phpmailer->Body.='<tr><td align="center">Datos de acceso a Windi</td></tr>';
$phpmailer->Body.=$linea1.$linea2.$linea3."</table>";


$phpmailer->IsHTML(true);

if (($usuario_reenvio <>"" )and  ($usuario_clave<>""))
{
$phpmailer->Send();
exito("contraseña reenviada al usuario ". $usuario_reenvio,"");
log_r($id_usuario," reenvío de contraseña : ".$usuario_reenvio," " );
}
?>
