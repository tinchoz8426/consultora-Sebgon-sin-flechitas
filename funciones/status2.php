<?php
if ($rowEmp['CATEGORIA']=="ACT"){
ECHO '<span class="label label-green">ACTIVA</span>'; }

if ($rowEmp['CATEGORIA']=="NOA"){
ECHO '<span class="label label-red">CUBIERTA</span>'; }

if ($rowEmp['CATEGORIA']=="PAU"){
ECHO '<span class="label label-yellow">PAUSADA</span>'; }

if ($rowEmp['CATEGORIA']==""){
ECHO '<span class="label label-blue">CONSULTAR</span>'; }

?>