<?php include "include/listayfiltratask2.php"; ?>
<div class="box">
	      <div class="box-header">
	        <span class="title">Tareas Pendientes (lista móvil)</span>
	        <ul class="box-toolbar">
	          <li><span class="label label-blue"><?php echo $totEmp; ?></span></li>
	        </ul>
	      </div>
      
	      <div class="box-content scrollable" style="height: 265px; overflow-y: auto">
	        <!-- find me in partials/news_with_icons -->
	      <?php include("include/listatareas2.php"); ?>   
	      </div>
</div>