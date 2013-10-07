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
			if (isset($_POST['fecha']))
			{
				$info = $this->model->consultaTurno($_POST['fecha'], $_POST['especialidad']);
				if($info)
				{
					$this->view->muestraTurnos($info);
				}
			}
			else
			{
				$this->view->imprimirPagina();
			}
		}
	}
?>
