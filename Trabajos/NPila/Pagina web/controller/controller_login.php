<?php
	class Controller
		{
			private $model;
			private $view;
		 
			public function __construct($model, $view) 
				{
					$this->model = $model;
					$this->view = $view;
				}
	
			public function imprimirPagina()
				{
					$this->view->imprimirPagina();
				}
	
			public function loginUsuario($formulario)
				{
					$user = $this->model->getUsuario($formulario['User']);

					if(empty($user))
						{					
							echo "1";						
						} 	
					else if($user['Pass'] != md5($formulario['Pass']))
						{
							echo "2";
						}
					else
						{
							$_SESSION['User']=$formulario['User'];
							echo "index.php";
						}
				}
		}
?>
