<?php
class NovedadesGral{
	var $id = "NULL";
	var $Area = "";
	var $Nombre = "";
	var $Copete = "";
	var $Archivo = "";
	var $Home = "";
	var $Fecha = "";
	// ********** END VAR ************** 		
	function getNovedadesGralById($id){
		$whereCond = "WHERE id = ".$id;
		$query = "select *
				from 
					novedades_gral
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
		$this->setHome($row["home"]);
		$this->setFecha($row["Fecha"]);
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
	function setHome($Home) {
		$this->Home = $Home;
	}
	function setFecha($Fecha) {
		$this->Fecha = $Fecha;
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
	function getHome() {
		return $this->Home;
	}
	function getFecha() {
		return $this->Fecha;
	}
	// ********** SAVE **************
	function save() {
		$query = "REPLACE INTO novedades_gral (
		id,
		Nombre,
		Area,
		Copete,
		Archivo,
		home,
		Fecha
		)
		VALUES (
		 $this->id, 
		'$this->Nombre', 
		'$this->Area', 
		'$this->Copete', 
		'$this->Archivo',
		 $this->Home, 
		'$this->Fecha'
		)";
		mysql_query($query);
		$pid = mysql_insert_id();
		return $pid;	
	}
	function delete() {
		$query = "DELETE FROM novedades_gral where id = $this->id";
		$verif = mysql_query($query);
		return $verif;		
	}
} //end class

/* -- Clase -- */
class NovedadesGralManager{
	function getAllNovedadesGral($cond = ""){
		$query = "select * from novedades_gral $cond ";
		$res = mysql_query($query);
		$rep = array();	
		$i = 0;	
		while ($row = mysql_fetch_array($res)) {
			$rep[$i] = new NovedadesGral();
			$rep[$i]->pack($row);
			$i++;
		}
		return $rep;	
	}
} //end class

?>