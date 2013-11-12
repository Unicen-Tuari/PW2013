<?php

	class Controller
	{
		private $model;

		public function __construct($model) {
			$this->model = $model;
		}

	public function consultaMail($fecha)
		{
			return $this->model->consultaE_mail($fecha);
		}
	
	}
?>
