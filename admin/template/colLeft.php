<div id="menu-secundario">
	<ul id="navmenu-v">
		<?php
		if ($sectionManager==1) // index
		{
		?>
			<li><a href="personal.php">Personal</a></li>
			<li><a href="activos.php">Activos</a></li>
		<?php
		}
		if ($sectionManager==3)
		{
		?>
			<li><a href="configuracion.php">Configuraci&oacute;n</a></li>
			<li><a href="empresas.php">Empresas</a></li>
			<li><a href="preguntas.php">Preguntas</a></li>
			<li><a href="novedades.php">Novedades</a></li>
		<?php
		}
		if ($sectionManager==2)
		{
		?>
			<li><a href="reporteUsuarios.php">Registrados</a></li>
			<li><a href="reporteSemana.php">Pregunta Semana</a></li>
			<li><a href="reporteSquiz.php">Trivia</a></li>
			<li><a href="reporteJuego.php">Juego</a></li>
			<li><a href="reporteDescarga.php">Descargas</a></li>
		<?php
		}
		if ($sectionManager==4)
		{
		?>
			<li><a href="puntos.php">Puntos</a></li>
			<li><a href="puntosExcel.php">Excel</a></li>
		<?php
		}
		?>
		<li><a href="logout.php">Salir</a></li>
	</ul>
</div>