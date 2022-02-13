<?php
session_start(); 
$_SESSION['controlando'] = 'noataques';
include('mailcode-includes-cv/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="Cargar CV - Consultora SEBGON" />
<meta name="keywords" content="consultores de recursos humanos, consultores de rrhh" />
<meta name="description" content="Cargá tu curriculum para poder participar en las búsquedas laborales" />
<meta name="robots" content="all" />
<title>Cargar CV - Consultora SEBGON</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<style>label, input{
    display:block;
}
 
.error{
    color:#ff0000;
    font-weight:bold;
}
 
.sent{
    color:#00D60E;
    font-weight:bold;
}</style>

</head>
<body>





		<div id="header-wrapper">

			<div id="header" class="container">

				<?php include 'template/navegacion.php';?>

			</div>

		</div>



		
					<div id="page" class="container cargar"><div class="content">
						
							<h2 class="title">Envíenos aquí su CV</h2>



    <form name="contactform" method="post" action="invioform.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
 </td>
</tr>
</table>
</form>
							
						
						
					</div></div>
		

<?php include 'template/footerMain.php';?>
</body>
</html>