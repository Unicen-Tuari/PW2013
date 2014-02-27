<?php
	include 'funciones_comprobacion.php';
	class Controller
		{
			private $model;
			private $view;

			public function __construct($model, $view) 
				{
					$this->model = $model;
					$this->view = $view;
				}

/*-------------------------------------------- Agregar paciente --------------------------------------------*/	
			public function imprimirPaginaAgr()
				{
					$this->view->imprimirPaginaAgr();
				}

			

			public function comprueba_error($formulario)
				{	
					if (comprobar_nombre($formulario['Nombre_Apellido']))
						{
							if (comprobar_dni($formulario['DNI']))
								{
									if (comprobar_localidad($formulario['Localidad']))
										{
											if (comprobar_calle($formulario['Calle']))
												{
													if (comprobar_num($formulario['Numero']))
														{
															if (comprobar_cp($formulario['C_P']))
																{
																	if (comprobar_telf($formulario['Telefono']))
																		{
																			if (comprobar_tel($formulario['Movil']))
																				{
																					if (comprobar_fecha($formulario['Fecha']))
																						{
																							if (comprobar_email($formulario['Mail']))
																								{
																									if (comprobar_numero_afiliado($formulario['Num_afiliado']))
																										{
																											echo("correcto");
																											return true;
																										}
																									else
																										{
																											echo("El numero de afiliado contiene caracteres no validos");
																											return false;
																										}
																								}
																							else
																								{
																									echo("La direccion de E-mail es incorrecta o no fue completada");
																									return false;
																								}
																						}
																					else
																						{
																							echo("La fecha de nacimiento no fue completada");
																							return false;
																						}
																				}
																			else
																				{
																					echo("El numero de movil contiene caracteres no validos");
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
																	echo("El numero codigo postal contiene caracteres no validos o no fue completado");
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
									echo("El DNI contiene caracteres no validos o no fue completado");
									return false;
								}
						}
					else
						{
							echo("El nombre contiene caracteres no validos o no fue completado");
							return false;
						}
				}	



			public function ingresaPaciente($form)
				{
					if ($this->comprueba_error($form))
						{	
							$this->model->guardaPaciente($form);
						}
				}

/*-------------------------------------------- Consultar pacientes --------------------------------------------*/

		public function consultaPaciente($dato)
			{
				if (comprobar_nombre($dato))
					{
						$nombre = $this->model->consultaPaciente($dato);
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

		public function actClinica($dato)
			{
				$this->model->actHistclinica($dato);
			}
		

/*-------------------------------------------- Borrado de Medicos --------------------------------------------*/
			public function borrarPaciente($idpaciente)
				{
					$this->model->eliminaPaciente($idpaciente);			
				}
		}
?>
