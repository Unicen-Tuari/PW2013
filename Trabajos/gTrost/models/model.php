<?php

abstract class Model {

	protected $conn;

	public function __construct() {
		$this->inicializar();
	}

	public function inicializar() {
		$host = "localhost";
		$db = "db5";
		$user = "rz";
		$pass = "rz";

		try{
			$this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
		}
		catch(PDOException $pe){
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
	}
	
}

