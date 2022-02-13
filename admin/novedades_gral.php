<?php
    session_start();
	if (!isset($_SESSION['logAdmin']))
	die(header("Location: index.php"));
	$root = '';
	include('../lib/init.php');
	include('../clases/clases_novedadesGral.php');
	$sectionVar = '7';
	$sectionManager=0;
	if($_POST["accion"]== 'save')
	{
		$em = new NovedadesGral();
		if ($_POST['id']!=0)
		{
			$em->setId($_POST['id']);
			$eId=$_POST['id'];
		}
		$em->setNombre(limpiar_acentos($_POST['Nombre']));
		$em->setCopete(limpiar_acentos($_POST['Copete']));
		$em->setFecha(limpiar_acentos($_POST['Fecha']));
		$em->setHome("0");
		if(isset($_POST['Home']))
		{
			$em->setHome($_POST['Home']);
		}
		$em->setArea("");
		$em->setArchivo(limpiar_acentos($_REQUEST["archivo"]));
		$em->save();
		die(header("Location: novedades_gral.php"));
	}
	
	if($_GET["step"]== '3')
	{
		$em = new NovedadesGral();
		$em->setId($_GET['id']);
		$em->delete();
		die(header("Location: novedades_gral.php"));
	}
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
				<div class="pagelinks">Busquedas Vigentes</div>
				<div id="adminGrilla">
					<?php
					if($_GET["step"]== '2')
					{
						$em = new NovedadesGral();
						$id = $_GET['id'];
						if ($id == ''){$id=0;}
						$em->getNovedadesGralById($id);
					?>
					<form action="<?php echo $PHP_SELF;?>" method="post" name="form" enctype="multipart/form-data">
						<input name="accion" id="accion" type="hidden" value="save">
						<input name="id" id="id" type="hidden" value="<?php echo $_GET['id'];?>">
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
									<th><p>Titulo</p></th>
									<td><input accesskey="1" maxlength="100" type="text" name="Nombre" id="Nombre" value="<?php echo $em->getNombre();?>" /></td>
								</tr>
								<tr>
									<th><p>Descripcion</p></th>
									<td><textarea accesskey="9" name="Copete" id="Copete" style="height:250px;width:400px;" ><?php echo volver_acentos($em->getCopete());?></textarea></td>
								</tr>
								<tr>
									<th><p>Referencia</p></th>
									<td><input accesskey="1" maxlength="100" type="text" name="archivo" id="archivo" value="<?php echo $em->getArchivo();?>" /></td>
								</tr>
								<tr>
									<th><p>Fecha</p></th>
									<td><input accesskey="1" maxlength="100" type="text" name="Fecha" id="Fecha" value="<?php echo $em->getFecha();?>" /></td>
								</tr>
								<tr>
									<th><p>Home</p></th>
									<td><input style="width:20px" accesskey="6" type="checkbox" name="Home" id="Home" value="1" <?php echo  ($em->getHome()=='1') ? ' Checked="true"' : ''  ?>/>
									</td>
								</tr>
							</tbody>
						</table>
					</form>
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
									$col = new NovedadesGralManager();
									$contents = $col->getAllNovedadesGral();
									foreach($contents as $content) { 
										$counter = $counter + 1;
									} 
	
									$contents = $col->getAllNovedadesGral(" LIMIT ".$desde.",".$maxlines);
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
								<td><a href="novedades_gral.php?step=2&id=<?php echo $content->getId();?>"><img src="images/edit.gif" border="0" /></a></td>
								<td><a href="novedades_gral.php?step=3&id=<?php echo $content->getId();?>"><img src="images/delete.gif" border="0" /></a></td>
							</tr>
							<?php 
								} 
								?>
							<tr>
							  <td colspan="4">
								<a href="novedades_gral.php?step=2">
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