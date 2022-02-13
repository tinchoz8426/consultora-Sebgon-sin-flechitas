<html>
<head>
    <title>filtro</title>
<link rel="stylesheet" href="../estilos.css" type="text/css">
</head>

<body>

<label class="titform">Ingrese su c&oacute;digo</label> 

<? $redireccion='<form action="index.php?viewart='.$testercito.'" method="post">';?>
<? $redireccion2='<form action="prueba.php" method="post">';?>
<? echo $redireccion2 ;?>
  <label class="nombresform" for="log"></label>
<p> 
    
  <input class="campoform" type="password" name="nombre" size="6">
    <input type="submit" name="submit2" value="" class="botonform" />
    <label class="nombresform" for="log"></label></p>
  <br>
</form>
<?  
//echo "codigo " .$viewart;
global $viewart;
$testercito=24159;
	$viewart=$_POST["nombre"];
	$filtro2=$_POST["email"];
	include "index.php?viewart=Buzios";

?>
</body>
</html> 