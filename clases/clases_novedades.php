<?php
class Novedades{
	var $id = "NULL";
	var $Area = "";
	var $Nombre = "";
	var $Copete = "";
	var $Archivo = "";
	// ********** END VAR ************** 		
	function getNovedadesById($id){
		$whereCond = "WHERE id = ".$id;
		$query = "select *
				from 
					novedades
				".$whereCond.";";
		$result = mysql_query($query) or die(mysql_error()); 
			$row = mysql_fetch_array($result);
			$this->pack($row);
	}
	function pack($row){
		$this->setId($row["id"]);
		$this->setNombre($row["Nombre"]);
		$this->setArea($row["Area"]);
		$this->setCopete($row["Copete"]);
		$this->setArchivo($row["Archivo"]);
	}
	// ********** SETS ****************** 
	function setId($id) {
		$this->id = $id;
	}	
	function setNombre($Nombre) {
		$this->Nombre = $Nombre;
	}
	function setArea($Area) {
		$this->Area = $Area;
	}
	function setCopete($Copete) {
		$this->Copete = $Copete;
	}
	function setArchivo($Archivo) {
		$this->Archivo = $Archivo;
	}
	// ********** GETS ****************** 
	function getId() {
		return $this->id;
	}	
	function getNombre() {
		return $this->Nombre;
	}
	function getArea() {
		return $this->Area;
	}
	function getCopete() {
		return $this->Copete;
	}
	function getArchivo() {
		return $this->Archivo;
	}
	// ********** SAVE **************
	function save() {
		$query = "REPLACE INTO novedades (
		id,
		Nombre,
		Area,
		Copete,
		Archivo
		)
		VALUES (
		 $this->id, 
		'$this->Nombre', 
		'$this->Area', 
		'$this->Copete', 
		'$this->Archivo'
		)";
		mysql_query($query);
		$pid = mysql_insert_id();
		return $pid;	
	}
	function delete() {
		$query = "DELETE FROM novedades where id = $this->id";
		$verif = mysql_query($query);
		return $verif;		
	}
} //end class

/* -- Clase -- */
class NovedadesManager{
	function getAllNovedades($cond = ""){
		$query = "select * from novedades $cond";
		$res = mysql_query($query);
		$rep = array();	
		$i = 0;	
		while ($row = mysql_fetch_array($res)) {
			$rep[$i] = new Novedades();
			$rep[$i]->pack($row);
			$i++;
		}
		return $rep;	
	}
} //end class

?>