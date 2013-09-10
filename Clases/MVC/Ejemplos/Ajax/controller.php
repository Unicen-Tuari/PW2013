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
		$this->view->imprimirPagina($this->model->getNombresPersonas());
	}
	
	public function imprimirDatos($nombre)
	{
		$this->view->imprimirDatos($this->model->getPersonasPorNombre($nombre));
	}
}
?>