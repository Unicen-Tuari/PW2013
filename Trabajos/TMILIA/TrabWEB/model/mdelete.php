<?php
class Modeldelete
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

   /* public function eliminarMensaje($id_mensaje){

		$sql = "SELECT nombre FROM usuario where id = $id ";
		$q = $this->conn->prepare($sql);
		$q->execute();
		// fetch
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}*/

	public function eliminarMensaje($pepito){

		$sql= "DELETE FROM consulta
				WHERE id_auto = $pepito";
				
    	
		$q = $this->conn->prepare($sql);
		$q->execute();

		$sql= "DELETE FROM auto
				WHERE id = $pepito";
		$q = $this->conn->prepare($sql);
		$q->execute();

    	$sql= "DELETE FROM auto_imagen
				WHERE id_auto = $pepito";
    	
		$q = $this->conn->prepare($sql);
		$q->execute();
		// fetch


		

		/*$sql= "DELETE FROM imagen
				WHERE id = $pepito";
		$q = $this->conn->prepare($sql);
		$q->execute();*/
		//return $q->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
