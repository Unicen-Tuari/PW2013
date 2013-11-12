<?php
class Controllerindex
{
	private $model;
	private $view;

	public function __construct($model, $view) {
		$this->model = $model;
		$this->view = $view;
	}
	public function imprimirPagina()
	{
		$this->view->muestraPagina();
	}
	public function imprimirConsulta($id_cliente)
	{
		$consulta=$this->model->consultaReparaciones($id_cliente);
		if ($consulta == null)
		{
			return false;
		}
		else
		{
			$this->view->generaTabla($consulta);
		}
	}
	public function enviaMail($datos)
	{
		$para = 'fdbailes@gmail.com';
		$asunto = "Consulta de $datos[nombre_apellido]";
		$mensaje = "<!DOCTYPE html><html><head><title>TT Taller de Reparacion</title><meta charset='UTF-8'></head><body><ul><li>Nombre y Apellido: $datos[nombre_apellido]</li><br><li>Telefono: $datos[telefono]</li><br><li>Mail: $datos[mail]</li><br><li>Consulta: $datos[consulta]</li><br></ul></body></html>";
		$headers = 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
		if(mail($para,$asunto,$mensaje,$headers))
		{
			$this->view->generaAlerta();
		}
	}
}
?>