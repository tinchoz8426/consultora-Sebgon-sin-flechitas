<div id="bg_header_eng">
	<div id="header">
	</div>
</div>
<div id="navigationh">
	<div id="menu-h">
		<ul>
			<?php
			if ($_SESSION['logAdmin']=="ok")
			{
			?>
				<li <?php echo ($sectionVar=='1') ? 'id="current"' : ''  ?>><a href="index.php"> Home </a></li>
				<?php if($_SESSION['perfil']==1){?>
				<li <?php echo ($sectionVar=='2') ? 'id="current"' : ''  ?>><a href="users.php">Usuarios</a></li>
				<li <?php echo ($sectionVar=='7') ? 'id="current"' : ''  ?>><a href="novedades_gral.php">Busquedas Vigentes</a></li>
				<?php }?>
				<li <?php echo ($sectionVar=='6') ? 'id="current"' : ''  ?>><a href="logout.php">Salir</a></li>
			<?php
			}
			?>
		</ul>
	</div>
</div>