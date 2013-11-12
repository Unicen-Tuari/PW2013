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

		public function consultaE_mail($fecha)
			{
				$sql = "SELECT T.Nombre_Apellido, T.Hora, P.Mail
				FROM Turnos T, Paciente P
				WHERE (T.Fecha = '$fecha') AND (T.Nombre_Apellido = P.Nombre_Apellido)";
				$resultado = $this->conn->prepare($sql);
				$resultado->execute();
				if(!$resultado){
					die(print($this->conn->errorInfo()[2]));
				}
				$resultado=$resultado->fetchAll(PDO::FETCH_ASSOC);
				return $resultado;

			}

	}
?>
