<?php
if ($rowEmp['CATEGORIA']=="ACT"){
ECHO '<li><span class="label label-green">ACTIVA</span></li>'; }

if ($rowEmp['CATEGORIA']=="NOA"){
ECHO '<li><span class="label label-red">CUBIERTA</span></li>'; }

if ($rowEmp['CATEGORIA']=="PAU"){
ECHO '<li><span class="label label-yellow">PAUSADA</span></li>'; }

if ($rowEmp['CATEGORIA']==""){
ECHO '<li><span class="label label-blue">CONSULTAR</span></li>'; }

?>