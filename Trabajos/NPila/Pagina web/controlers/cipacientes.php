<?php
	class Controller
		{
			private $view;
			private $model;

    public function __construct($model, $view) {
		$this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirPagina()
	{
		if (isset($_POST['Nombre_Apellido']))
			{
				$this->model->guardaPaciente($_POST);
			}
		else
			
				$this->view->imprimirPagina();
			}		
	}
}
?>
