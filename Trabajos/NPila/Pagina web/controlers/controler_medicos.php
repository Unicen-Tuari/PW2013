<?php

include 'funciones_comprobacion.php';
	class Controller
	{
		private $view;
		private $model;

		public function __construct($model, $view) {
			$this->model = $model;				
			$this->view = $view;
		}

/*---------------------------Muestra datos medico--------------------------------------------*/

		public function consultaMedico($dato)		
			{
				if (comprobar_nombre($dato))
					{
						$nombre = $this->model->consultaMedico($dato);
						if($nombre)
						{
							$this->view->muestraInfo($nombre);
						}
					}
				else
					{
						echo("El nombre contiene caracteres no validos o no fue completado");
					}
			}


		public function imprimirPaginaInfo()
			{
				$this->view->imprimirPaginaInfo();
			}
		

/*-----------------------------Ingresa Medico---------------------------------------------------*/

	public function comprueba_error($formulario)
		{
			if (comprobar_nombre($formulario['nombre']))
				{
					if (comprobar_localidad($formulario['localidad']))
						{
							if (comprobar_calle($formulario['calle']))
								{
									if (comprobar_num($formulario['num']))
										{
											if (comprobar_telf($formulario['tel']))
												{
													if (comprobar_email($formulario['mail']))
														{
															echo("correcto");
															return true;
														}
													else
														{
															echo("La direccion de E-mail es incorrecta o no fue completada");
															return false;
														}
												}
											else
												{
													echo("El numero de telefono contiene caracteres no validos o no fue completado");
													return false;
												}			
										}
									else
										{
											echo("El numero de domicilio contiene caracteres no validos o no fue completado");
											return false;
										}
								}
							else
								{
									echo("La direccion contiene caracteres no validos o no fue completada");
									return false;
								}
						}
					else
						{
							echo("La localidad contiene caracteres no validos o no fue completada");
							return false;
						}
				}
			else
				{
					echo("El nombre contiene caracteres no validos o no fue completado");
					return false;
				}
		}	

public function imprimirPaginaAgr()
		{
			$this->view->imprimirPaginaAgr();
		}

	public function ingresaMedico($form)
		{
			if ($this->comprueba_error($form))
				{
					$this->model->guardaMedico($form);
				}
		}

	}
?>
