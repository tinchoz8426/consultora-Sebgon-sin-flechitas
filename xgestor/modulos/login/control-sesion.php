<?php
//session_start();
ob_start(); 
@session_start();
if ($logout == "yes")
	{
					session_unset();
					session_destroy();
					header("LOCATION: login.php");		
	}
	
if(!isset($_SESSION["IDEN"]))
{
header("LOCATION: login.php");
} 
else 
{} 

$minombre= $_SESSION["NOMBRE"].', '. $_SESSION["APELLIDO"];

?>