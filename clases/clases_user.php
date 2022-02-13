<?php
class Users{
	var $id = "NULL";
	var $password = "";
	var $estado = "";
	var $email = "";
	var $fecha = "";
	var $apellido = "";
	var $nombre = "";
	var $dni = "";
	var $fechanac = "";
	var $perfil = "";
	// ********** END VAR ************** 		
	function getUserById($id){
		$whereCond = "WHERE usuarios.id = ".$id;
		$query = "select * from usuarios ".$whereCond.";";
		$result = mysql_query($query) or die(mysql_error()); 
			$row = mysql_fetch_array($result);
			$this->pack($row);
	}
	function getUserLogin($mail,$pass){
		$whereCond =" WHERE email = '".$mail."' and password='".$pass."' and estado=1";
		$query = "SELECT * FROM usuarios ".$whereCond.";";
		$result = mysql_query($query) or die(mysql_error()); 
			$row = mysql_fetch_array($result);
			$this->pack($row);
	}
	function pack($row){
		$this->setId($row["id"]);
		$this->setPassword($row["password"]);
		$this->setEstado($row["estado"]);
		$this->setEmail($row["email"]);
		$this->setFecha($row["fecha"]);
		$this->setApellido($row["apellido"]);
		$this->setNombre($row["nombre"]);
		$this->setDni($row["dni"]);
		$this->setFechanac($row["fechanac"]);
		$this->setPerfil($row["perfil"]);
	}
	// ********** SETS ****************** 
	function setId($id) {
		$this->id = $id;
	}	
	function setPassword($password) {
		$this->password = $password;
	}
	function setEstado($estado) {
		$this->estado = $estado;
	}
	function setEmail($email) {
		$this->email = $email;
	}	
	function setFecha($fecha) {
		$this->fecha = $fecha;
	}	
	function setApellido($apellido) {
		$this->apellido = $apellido;
	}
	function setNombre($nombre) {
		$this->nombre = $nombre;
	}
	function setDni($dni) {
		$this->dni = $dni;
	}
	function setFechanac($fechanac) {
		$this->fechanac = $fechanac;
	}
	function setPerfil($perfil) {
		$this->perfil = $perfil;
	}
	// ********** GETS ****************** 
	function getId() {
		return $this->id;
	}	
	function getPassword() {
		return $this->password;
	}
	function getEstado() {
		return $this->estado;
	}
	function getEmail() {
		return $this->email;
	}
	function getFecha() {
		return $this->fecha;
	}	
	function getApellido() {
		return $this->apellido;
	}
	function getNombre() {
		return $this->nombre;
	}
	function getDni() {
		return $this->dni;
	}
	function getFechanac() {
		return $this->fechanac;
	}
	function getPerfil() {
		return $this->perfil;
	}
	// ********** SAVE **************
	function save() {
		$query = "REPLACE INTO usuarios (
		id, 
		password, 
		estado, 
		email, 
		fecha, 
		apellido,
		nombre,
		dni,
		fechanac,
		perfil
		)
		VALUES (
		 $this->id, 
		'$this->password', 
		 $this->estado, 
		'$this->email', 
		 now(), 
		'$this->apellido', 
		'$this->nombre', 
		'$this->dni', 
		'$this->fechanac',
		 $this->perfil
		)";
		
		mysql_query($query);
		$pid = mysql_insert_id();
		return $pid;		
	}
	function delete() {
		$query = "DELETE FROM usuarios where id = $this->id";
		$verif = mysql_query($query);
		return $verif;		
	}
} //end class

/* -- Clase -- */
class UsersManager{
	function getAllUsers($cond = ""){
		$query = "select 
					*
				from 
					usuarios 
				$cond";
		$res = mysql_query($query);
		$user_rep = array();	
		$i = 0;	
		while ($row = mysql_fetch_array($res)) {
			$user_rep[$i] = new Users();
			$user_rep[$i]->pack($row);
			$i++;
		}
		return $user_rep;	
	}
} //end class
?>