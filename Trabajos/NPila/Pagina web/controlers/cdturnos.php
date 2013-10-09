<?php
	class Controller
		{
			private $view;

    public function __construct($model, $view) {
$this->model = $model;		
$this->view = $view;
    }
	
	public function imprimirPagina()
	{
		$this->view->imprimirPagina();
	}

	public function ingresaTurno($form)
				{
					$this->model->guardaTurno($form);
				}
}
?>
