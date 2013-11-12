<?php
	class Model
	{ 
		private $conn;
	    
		public function __construct()
			{
				include ('./conexion.php');
				try
					{
						$this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
					}
				catch(PDOException $pe)
					{
						die('Error de conexion, Mensaje: ' .$pe->getMessage());
					}
			}
		
		public function consultaMedico($nombre)
			{	
				$sql = "SELECT * FROM Medico WHERE Nombre_Apellido = '$nombre'";
				$resultado = $this->conn->prepare($sql);
				$resultado->execute();
				if(!$resultado)
					{
						die(print($this->conn->errorInfo()[2]));
					}
				$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
				return $resultado;
			}
		
		public function guardaMedico($formulario)
			{
				$sql = "INSERT INTO Medico VALUES (NULL,'".$formulario['especialidad']."','".$formulario['nombre']."','".$formulario['calle']."','".$formulario['num']."','".$formulario['localidad']."','".$formulario['tel']."','".$formulario['mail']."');";
				$resultado = $this->conn->prepare($sql);
				$resultado->execute();
				if (!$resultado)
					{
						die(print($this->conn->errorInfo()[2]));
					}
			}

		public function eliminaTurno($idmedico)
			{
				$sql = "DELETE FROM Medico WHERE Id_medico = '$idmedico';";
				$resultado = $this->conn->prepare($sql);
				$resultado->execute();
				if (!$resultado)
					{
						die(print($this->conn->errorInfo()[2]));
					}
			}
	}
?>
