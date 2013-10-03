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
		public function guardaPaciente($formulario)
		{
		$sql = "INSERT INTO Paciente VALUES ('".$formulario['Nombre_Apellido']."','".$formulario['DNI']."','".$formulario['Localidad']."','".$formulario['Calle']."','".$formulario['Numero']."','".$formulario['C_P']."','".$formulario['Telefono']."','".$formulario['Movil']."','".$formulario['Mail']."','".$formulario['Obr_soc']."','".$formulario['Num_afiliado']."','".$formulario['Antecedentes']."','".1."');";
/*ver tema fecha nacimiento e idmedico*/
		$formulario = $this->conn->prepare($sql);
		$formulario->execute();
		if(!$formulario)
		{
			die(print($this->conn->errorInfo()[2]));
		}
	}
}
?>
