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
					session_start();
					$this->view->imprimirPagina();
				}
	
			public function loginUsuario($formulario)
				{
					$user = $this->model->getUsuario($formulario['User']);

					if(empty($user))
					{
						print_r("Usuario Inexistente");					
						/*$this->view->MensajeError("Error: Usuario Inexistente");*/
					} 	
					if($user['Pass'] != md5($formulario['Pass']))
					{
						print_r("Usuario Inexistente");	
						/*$this->view->MensajeError("Error: Password Inválida");*/
					}
			
					session_start();
					$_SESSION['User']=$formulario['User'];
					echo "index.php";
				}
		}
?>
