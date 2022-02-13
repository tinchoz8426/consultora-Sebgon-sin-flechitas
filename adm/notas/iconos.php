<?php
$viewart = $_GET['viewart'];
include "../vars.php";

function fileExtension($file)
{
	$a = explode(".", $file);
	$b = count($a);
	return $a[$b-1];
}

function fileIcon($l)
{
	$l = strtolower($l);
	return "?img=".$l;
}


echo "hola";
print fileIcon($a_file["extension"]);
?>