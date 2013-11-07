<?php
class Modeladmin
{
	private $host = "localhost";
	private $db = "autosBD";
	private $user = "root";
	private $pass = "";
	private $conn;
    
	
    public function __construct(){
        try{
			$this->conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass);
		}
		catch(PDOException $pe){
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
    }
    public function consultaCategoria()
	{

		$sql= "SELECT * FROM  marca WHERE id IN (select distinct a.id_marca from auto a)";
		$q = $this->conn->prepare($sql);
		$q->execute();
		return $q->fetchAll(PDO::FETCH_ASSOC);

	}

	
	public function buscarAuto($id){

		$sql = "SELECT * FROM auto WHERE id= $id";
		$q = $this->conn->prepare($sql);
		$q->execute();
		// fetch
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}

	public function consultaImagen($id)
	{
		$sql = "SELECT i.path FROM auto_imagen ai JOIN imagen i ON (ai.id_imagen = i.id) WHERE ai.id_auto = $id ";
		$q = $this->conn->prepare($sql);
		$q->execute();
		// fetch
		$resultado = $q->fetchAll(PDO::FETCH_ASSOC);
		return $resultado[0]['path']; // imagenes/527a93bb42188.jpg
	}


		public function insertarConsulta($consulta)
	{
		$id_auto= 1;

		$sql = " INSERT INTO  `autosbd`.`consulta` (`texto` ,`nombre` ,`email` ,`telefono`,`id_auto`) VALUES ( :texto, :nombre, :email, :telefono, :id_auto)";
		$q = $this->conn->prepare($sql);
		$a=$q->execute(array(':id_auto'=>$id_auto,':texto'=>$consulta["texto"],':nombre'=>$consulta["nombre"],':email'=>$consulta["email"],':telefono'=>$consulta["telefono"],));
	}

	public function buscarCat($id)
	{
		//$sql= "SELECT * FROM  marca WHERE id IN (select distinct a.id_marca from auto a)";
		$sql = "SELECT a.titulo, a.valor,a.anio FROM auto a JOIN marca m ON (a.id_marca = m.id) where a.id_marca = $id";
		$q = $this->conn->prepare($sql);
		$q->execute();
		
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>