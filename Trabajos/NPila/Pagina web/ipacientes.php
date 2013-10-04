<?php
	include './controlers/cipacientes.php';
	include './views/vipacientes.php';
	include './models/minfopaciente.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);
	$controller->imprimirPagina();

	if (isset($_POST['Nombre_Apellido']))
		{
			$form["Nombre_Apellido"] = $_POST["Nombre_Apellido"];
			$form["DNI"] = $_POST["DNI"];
			$form["Localidad"] = $_POST["Localidad"];
			$form["Calle"] = $_POST["Calle"];
			$form["Numero"] = $_POST["Numero"];
			$form["C_P"] = $_POST["C_P"];
			$form["Telefono"] = $_POST["Telefono"];
			$form["Movil"] = $_POST["Movil"];
			$form["Mail"] = $_POST["Mail"];
			/*Hacer lo propio para la fecha*/
			$form["Obr_soc"] = $_POST["Obr_soc"];
			$form["Num_afiliado"] = $_POST["Num_afiliado"];
			$form["Especialidad"] = $_POST["Especialidad"];
			$form["Antecedentes"] = $_POST["Antecedentes"];
			/*Ver como insertar estudios (Tabla diferente)*/
			$controler->ingresaPaciente($form);
		}
	else
		{			
			$this->view->imprimirPagina();
		}		
?>
