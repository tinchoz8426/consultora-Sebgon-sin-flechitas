<?php
class db_mysql {
	var $connection;
	var $host;
	var $user;
	var $pass;
	var $base;
	var $id;

	function connect(){
		$this->host = 'localhost';
		$this->user = 'qu4tro';
		$this->pass = '';
		$this->base = 'groupware';
			
		$this->connection = mysqli_connect($this->host, $this->user, $this->pass) or die("<b>Error:</b> No se pudo conectar con la base.");
		
		mysqli_select_db($this->connection,$this->base)or die("<b>Error:</b> conexión no establecida.");
		//mysqli_query("SET NAMES 'ANSI'");

		//$this->connection = new mysqli($this->host, $this->user, $this->pass,$this->base) or die(mysqli_error());
        $this->connection->set_charset("utf8");
		
	}
 
	function close(){
		mysqli_close($this->connection);
	}

	function query($query){
		$result = mysqli_query ($this -> connection,$query);
		return $result;
	}

	function strip($string){
		return "'" . mysqli_real_escape_string($string, $this->connection) . "'";
	}

	function list_assoc($query){
		$results = array();
		$resource = $this->query($query);
		while ($row = mysqli_fetch_assoc($resource)) {
			$results[] = $row;
		}
		mysqli_free_result($resource);
		return $results;
	}

	function row_assoc($query){
		$resource = $this->query($query);
		$result = @mysql_fetch_assoc($resource);
		@mysql_free_result($resource);
		return $result;
	}
	
    function update($table, $values, $where) {
		$result = $this->query("UPDATE $table SET $values WHERE $where");
		 		
		return $result;
    }
	
	function elimina($table, $where) {
		$result = $this->query("Delete from $table WHERE $where");
		 		
		return $result;
    }
	

    function insert($table, $values) {
		$result = $this->query("INSERT INTO $table SET $values");
		$this->id = mysqli_insert_id($this->connection);	
	 		
		return $result;
    }
	
	
	
	function insert_id(){
		return $this->id;
	}	
	
	function suma($table, $values, $where) {
		$result = $this->query("SELECT SUM($values) as TOTAL FROM $table WHERE $where");	
		while($rows=mysqli_fetch_assoc($result)){
      $salida=$rows['TOTAL'];
}
		return $salida;
	}
}
?>