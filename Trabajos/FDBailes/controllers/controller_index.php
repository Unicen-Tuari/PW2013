<?php
class Controller
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
		if($consulta == null)
		{
			return false;
		}
		else
		{
			$this->view->generaTabla($consulta);
		}
	}
}
?>