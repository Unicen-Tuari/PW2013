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
			if (isset($_POST['search-text']))
			{
				$nombre = $this->model->consultaPaciente($_POST['search-text']);
				if($nombre)
				{
					$this->view->muestraInfo($nombre);
				}
			}
			else
			{
				$this->view->imprimirPagina();
			}
		}
	}
?>
