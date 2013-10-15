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
		public function consultaTurno($fecha, $especialidad)
		{	
			$sql = "SELECT T.Nombre_Apellido, T.Hora, E.Nom_especialidad, DATE_FORMAT( T.Fecha, '%m/%d/%Y' ) AS Fecha
			FROM Turnos T, Especialidad E, Medico M, Paciente P
			WHERE (T.Fecha = STR_TO_DATE( '$fecha', '%m/%d/%Y')) AND (T.Nombre_Apellido = P.Nombre_Apellido AND P.Id_medico = 				M.Id_medico AND	M.Id_especialidad = E.Id_especialidad AND E.Nom_especialidad = '$especialidad')";

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
