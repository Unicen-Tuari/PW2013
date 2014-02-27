<?php
class Controller
{
	private $view;
	private $model;
 
    public function __construct($model,$view) {
        $this->model = $model;
		$this->view = $view;
    }
	

	public function imprimirPagina()
	{
		$this->view->imprimirPagina();
	}

	
	public function CrearSeccion($seccion)
	{
			$this->model->insertarSeccion($seccion);
		
	}
			
}
?>