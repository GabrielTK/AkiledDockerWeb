<?php

class Database extends PDO{
	private $tipodb 	= "mysql";
	private $servername = "localhost:3306";
	private $user 		= "root";
	private $password 	= "";
	private $dbname 	= "nuevocata";

	public function __construct() {
		try{
			parent::__construct("{$this->tipodb}:dbname={$this->dbname};host={$this->servername};charset=utf8mb4", $this->user, $this->password);
		}catch(PDOException $e){
			echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
			exit;
		}
	}
}

?>
