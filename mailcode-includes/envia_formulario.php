<?php
include "../clases/phpmailer/class.phpmailer.php";
include "../clases/phpmailer/class.smtp.php";

$remitente = $_POST['email'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
//$archivo = $_FILES['hugo'];

$email_user = "web@consultorasebgon.com";
$email_password = "Contacto1920";
$the_subject = "Mensaje de sitio Consultora Sebgon";
//$address_to = "chv@qu4tro.com.ar";
$address_to = "ventas@consultorasebgon.com";
$from_name = "Consultora Sebgon";

$phpmailer = new PHPMailer();
// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = $email_user;
$phpmailer->Password = $email_password; 
//-----------------------------------------------------------------------
// $phpmailer->SMTPDebug = 1;
//$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "mail.consultorasebgon.com"; // GMail
$phpmailer->Port = 25;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;
$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($address_to); // recipients email
$phpmailer->Subject = $the_subject;	
$phpmailer->Body .="<h1 style='color:#3498db;'>Formulario</h1>";
$phpmailer->Body .= "<p>".$nombre."</p><p>".$apellido."</p><p>".$telefono."</p><p>".$empresa."</p><p>".$remitente."</p><p>".$mensaje."</p>";
$phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
$phpmailer->IsHTML(true);
$phpmailer->Send();
header ("Location: http://www.consultorasebgon.com.ar");
?>
