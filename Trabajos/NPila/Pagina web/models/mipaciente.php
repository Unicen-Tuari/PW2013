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
					$arrfecha = explode('/',$formulario['Fecha']);/*Buscar funcion para rearmar el string (cadena a array) $formulario['Fecha'] */
					$fecha = $arrfecha[2].$arrfecha[0].$arrfecha[1];
					/*$arrhora = explode(':',$formulario['Fecha']);
					$hora = $arrhora[0].$arrhora[0]."00";*
					/*$fecha = "19990718";/*Buscar funcion para rearmar el string (cadena a array) $formulario['Fecha'] */
					$sql = "INSERT INTO Paciente VALUES ('".$formulario['Nombre_Apellido']."','".$formulario['DNI']."','".$formulario['Localidad']."','".$formulario['Calle']."','".$formulario['Numero']."','".$formulario['C_P']."','".$formulario['Telefono']."','".$formulario['Movil']."','".$formulario['Mail']."','".$fecha."','".$formulario['Obr_soc']."','".$formulario['Num_afiliado']."','".$formulario['Antecedentes']."','1','1');";
					/*ver idmedico*/
					$resultado = $this->conn->prepare($sql);
					$resultado->execute();
					if (!$resultado)
						{
							die(print($this->conn->errorInfo()[2]));
						}
				}
		}
?>
