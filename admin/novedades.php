<?php
    session_start();
	if (!isset($_SESSION['logAdmin']))
	die(header("Location: index.php"));
	$root = '';
	include('../lib/init.php');
	include('../clases/clases_novedades.php');
	include('../clases/clases_area.php');
	$sectionVar = '3';
	$sectionManager=0;
	if($_POST["accion"]== 'save')
	{
		$em = new Novedades();
		if ($_POST['id']!=0)
		{
			$em->setId($_POST['id']);
			$eId=$_POST['id'];
		}
		$em->setNombre(limpiar_acentos($_POST['Nombre']));
		$em->setCopete(limpiar_acentos($_POST['Copete']));
		$em->setArea($_POST['Area']);
		$em->setArchivo($_REQUEST["archivo_old"]);
		$nombre_archivo = $_FILES["archivo"]["name"];
		$toChange = array(" ", "JPG", "GIF");
		$changed   = array("_", "jpg", "gif");
		$name=str_replace($toChange,$changed, $nombre_archivo);
		$lugar_fisico = $_FILES["archivo"]["tmp_name"];
		$destino = '../archivos/'.$name;
		if ($name!="")
		{
			if (!copy($lugar_fisico, $destino))
			{
			   echo "Ocurrió algún error al subir el Archivo y los datos no han sido guardados.";
			}
			$em->setArchivo($name);
		}
		$em->save();
		die(header("Location: novedades.php?Area=".$_POST['Area']));
	}
	
	if($_GET["step"]== '3')
	{
		$em = new Novedades();
		$em->setId($_GET['id']);
		$em->delete();
		die(header("Location: novedades.php?Area=".$_GET['Area']));
	}
	$ar = new Area();
	$idA = $_GET['Area'];
	if ($idA == ''){$idA=0;}
	$ar->getAreaById($idA);
	include('template/meta.php');
?>
<BODY>
<div id="general" style="margin:0px auto; width:900px;">
	<?php include('template/header.php'); ?>
	<div id="container">
		<div id="mainContainer">
			<div id="col1">
				<?php include('template/colLeft.php'); ?>
			</div>
			<div id="col23">
				<div class="pagelinks">Novedades | Area <?php echo $ar->getNombre();?></div>
				<div id="adminGrilla">
					<?php
					if($_GET["step"]== '2')
					{
						$em = new Novedades();
						$id = $_GET['id'];
						if ($id == ''){$id=0;}
						$em->getNovedadesById($id);
					?>
					<form action="<?php echo $PHP_SELF;?>" method="post" name="form" enctype="multipart/form-data">
						<input name="accion" id="accion" type="hidden" value="save">
						<input name="id" id="id" type="hidden" value="<?php echo $_GET['id'];?>">
						<input name="Area" id="Area" type="hidden" value="<?php echo $_GET['Area'];?>">
						<input name="archivo_old" id="archivo_old" type="hidden" value="<?php echo $em->getArchivo();?>" />
						<table id="contactForm">
							<tfoot>
								<tr>
									<td colspan="2">
										<input type="submit" name="enviar" value="Enviar" />
									</td>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<th><p>Nombre</p></th>
									<td><input accesskey="1" maxlength="100" type="text" name="Nombre" id="Nombre" value="<?php echo $em->getNombre();?>" /></td>
								</tr>
								<tr>
									<th><p>Copete</p></th>
									<td><textarea accesskey="9" name="Copete" id="Copete" style="height:50px;width:400px;" ><?php echo $em->getCopete();?></textarea></td>
								</tr>
								<tr>
									<th><p>Archivo</p></th>
									<td><input accesskey="3" type="file" name="archivo" id="archivo" class="file" /></td>
								</tr>
							</tbody>
						</table>
					</form>
					<script type="text/javascript">
					//<![CDATA[
						var editor = CKEDITOR.replace( 'Copete',{toolbar : 'Basic',	uiColor : '#9AB8F3'	});
					//]]>
					</script>
					<?php
						}
						else
						{
						?>
					<table>
						<thead>
							<tr>
								<td>Nombre</td>
								<td style="width:50px">Editar </td>
								<td style="width:50px">Eliminar </td>
							</tr>
						</thead>
						<tbody>
							<?php
									require("../lib/funciones.php"); 
									if (isset($_GET['page']))
									{
										$desde =  ($_GET['page'] * $maxlines) - $maxlines;
										$page = $_GET['page'];
									}
									else
									{
										$page = 1;
										$desde = 0;
									}
									$counter = 0;
									$col = new NovedadesManager();
									$contents = $col->getAllNovedades(" where Area = ".$_GET['Area']);
									foreach($contents as $content) { 
										$counter = $counter + 1;
									} 
	
									$contents = $col->getAllNovedades("  where Area = ".$_GET['Area']." LIMIT ".$desde.",".$maxlines);
									foreach($contents as $content) { 
										$counterRow = $counterRow + 1;
										$resto = $counterRow%2; 
										if($resto==0)
										{
											$gris="style='background:#e8e8e8;'";
										}
										else
										{
											$gris="";
										}
								?>
							<tr <?php echo $gris;?>>
								<td><?php echo $content->getNombre();?></td>
								<td><a href="novedades.php?step=2&id=<?php echo $content->getId();?>&Area=<?php echo $_GET['Area'];?>"><img src="images/edit.gif" border="0" /></a></td>
								<td><a href="novedades.php?step=3&id=<?php echo $content->getId();?>&Area=<?php echo $_GET['Area'];?>"><img src="images/delete.gif" border="0" /></a></td>
							</tr>
							<?php 
								} 
								?>
							<tr>
							  <td colspan="4">
								<a href="novedades.php?step=2&Area=<?php echo $_GET['Area'];?>">
								  <strong>Agregar Nuevo</strong>
								</a>
							  </td>
							</tr>
						</tbody>
					</table>
					<?php
						$table=paginador($counter,$page,$maxlines);
						echo $table;
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<?php include('template/footer.php'); ?>
</div>
</BODY>
</HTML>