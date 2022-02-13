<?php
$carpeta="../CV/";
$nombrecv="CV_".$_POST['apellido']."_".rand(1111, 9999)."_".$_FILES['nombre_CV']['name'];
$descargar='<a href="www.consultorasebgon.com/CV/'. $nombrecv.'">descargar CV</a>';
$archivo_origen="../CV/".$nombrecv;

move_uploaded_file($_FILES['nombre_CV']['tmp_name'],$carpeta. $nombrecv);
include "../clases/phpmailer/class.phpmailer.php";
include "../clases/phpmailer/class.smtp.php";

$email = $_POST['email']; 
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$cargo = $_POST['cargo'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$archivo = $_FILES['nombre_CV'];

$email_user = "web@consultorasebgon.com";
$email_password = "Contacto1920";
$the_subject = "CV recibido desde la web : ". $cargo;
$address_to = "consultora@consultorasebgon.com";
$from_name = "Consultora Sebgon";

$phpmailer = new PHPMailer();
$phpmailer -> CharSet = "UTF-8";
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
$phpmailer->AddAttachment($archivo_origen,$nombrecv);
$phpmailer->Subject = $the_subject;	
$phpmailer->Body .="<h1 style='color:#3498db;'>CV</h1>";
$phpmailer->Body .= "<p><b>Nombre: </b>".$nombre."</p><p><b>Apellido: </b>".$apellido."</p><p><b>Cargo al que se postula: </b>".$cargo."</p><hr><p>Teléfono: ".$telefono."</p><p>Dirección: ".$direccion."</p><p>Localidad: ".$ciudad."</p><p>Email: ".$email."</p><p>Mensaje: ".$mensaje."</p>";
$phpmailer->Body .= "Control : <p>".date("d-m-Y h:i:s")." CV: ".$nombrecv."</p>";
$phpmailer->Body .= $descargar;
$phpmailer->IsHTML(true);
$phpmailer->Send();
header ("Location: http://www.consultorasebgon.com.ar");
?>
