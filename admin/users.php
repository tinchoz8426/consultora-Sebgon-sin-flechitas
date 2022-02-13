<?php
    session_start();
	if (!isset($_SESSION['logAdmin']))
	die(header("Location: index.php"));
	$root = '';
	include('../lib/init.php');
	include('../clases/clases_user.php');
	$sectionVar = '2';
	if($_POST["accion"]== 'save')
	{
		$em = new Users();
		if ($_POST['id']!=0)
		{
			$em->setId($_POST['id']);
			$eId=$_POST['id'];
			$em->getUserById($eId);
		}
		$em->setPassword($_POST["password"]);
		$em->setEstado($_POST["estado"]);
		$em->setEmail($_POST["email"]);
		$em->setFecha($_POST["fecha"]);
		$em->setApellido(limpiar_acentos($_POST["apellido"]));
		$em->setNombre(limpiar_acentos($_POST["nombre"]));
		$em->setDni($_POST["dni"]);
		$em->setFechanac($_POST['fechanac']);
		$em->setPerfil($_POST["perfil"]);
		$em->save();
		die(header("Location: users.php"));
	}
	
	if($_GET["step"]== '3')
	{
		$em = new Users();
		$em->setId($_GET['id']);
		$em->delete();
		die(header("Location: users.php"));
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
				<div class="pagelinks">Usuarios</div>
				<div id="adminGrilla">
					<?php
					if($_GET["step"]== '2')
					{
						$em = new Users();
						$id = $_GET['id'];
						if ($id == ''){$id=0;}
						$em->getUserById($id);
					?>
					<form action="<?php echo $PHP_SELF;?>" method="post" name="form">
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
									<th><p>E-Mail</p></th>
									<td><input accesskey="3" type="text" name="email" id="email" value="<?php echo $em->getEmail();?>" /></td>
								</tr>
								<tr>
									<th><p>Password</p></th>
									<td><input accesskey="2" maxlength="100" type="text" name="password" id="password" value="<?php echo $em->getPassword();?>" /></td>
								</tr>
								<tr>
									<th><p>Nombre</p></th>
									<td><input accesskey="4" type="text" name="nombre" id="nombre" value="<?php echo $em->getNombre();?>" />
									</td>
								</tr>
								<tr>
									<th><p>Apellido</p></th>
									<td><input accesskey="4" type="text" name="apellido" id="apellido" value="<?php echo $em->getApellido();?>" />
									</td>
								</tr>
								<tr>
									<th><p>Dni</p></th>
									<td><input accesskey="5" type="text" name="dni" id="dni" value="<?php echo $em->getDni();?>" />
									</td>
								</tr>
								<tr>
									<th><p>Fecha de Nacimiento *<br/>(AAAA-MM-DD)</p></th>
									<td><input type="text" name="fechanac" id="fechanac" value="<?php echo $em->getFechanac();?>" /></td>
								</tr>
								<tr>
									<th><p>Activo</p></th>
									<td><input style="width:20px" accesskey="6" type="checkbox" name="estado" id="estado" value="1" <?php echo  ($em->getEstado()=='1') ? ' Checked="true"' : ''  ?>/>
									</td>
								</tr>
								<tr>
									<th><p>Perfil</p></th>
									<td>
										<select name="perfil" id="perfil">
											<option value="1" <?php echo  ($em->getPerfil()=='1') ? ' Selected="true"' : ''  ?>>Web Admin</option>
											<option value="2" <?php echo  ($em->getPerfil()=='2') ? ' Selected="true"' : ''  ?>>Medico</option>
											<option value="3" <?php echo  ($em->getPerfil()=='3') ? ' Selected="true"' : ''  ?>>Paciente</option>
										</select>
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
								<td>E-mail</td>
								<td>Apellido</td>
								<td>Nombre</td>
								<td>Perfil </td>
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
									$col = new UsersManager();
									$contents = $col->getAllUsers("");
									foreach($contents as $content) { 
										$counter = $counter + 1;
									} 
									$counterRow = 0;
									$contents = $col->getAllUsers(" LIMIT ".$desde.",".$maxlines);
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
								<td><?php echo $content->getEmail();?></td>
								<td><?php echo $content->getApellido();?></td>
								<td><?php echo $content->getNombre();?></td>
								<td>
									<?php switch($content->getPerfil()) { 
										case 1: echo 'Web Admin'; break;
										case 2: echo 'Medico'; break;
										case 3: echo 'Paciente'; break;
									} ?>
								</td>
								<td><a href="users.php?step=2&id=<?php echo $content->getId();?>"><img src="images/edit.gif" border="0" /></a></td>
								<td><a href="users.php?step=3&id=<?php echo $content->getId();?>"><img src="images/delete.gif" border="0" /></a></td>
							</tr>
							<?php 
								} 
								?>
							<tr>
							  <td colspan="4">
								<a href="users.php?step=2">
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