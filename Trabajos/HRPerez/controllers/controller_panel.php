<?php
class Controller
{
	private $view;
	private $model;
 
    public function __construct($view,$model) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirPanel()
	{					
			$noticias = $this->model; // Definición de una variables que luego utilizaré,pero en el controller y no en el model.
			$tags = $this->model->getTags();
			$seccion = $this->model->getSecciones();
			$panel = $this->model->ConsultaNoticia();
			//$panel1 = $this->model->ConsultaSeccion();
						
			if($tags){
					$this->view->setTags($tags);
			}
			if($seccion){
					$this->view->setSecciones($seccion);
			}

			if($panel){
					$this->view->setNoticias($panel);
			}

			/*if($panel1){
					$this->view->setSecciones($panel1);
			}*/
			
			$this->view->imprimirPanel();

	}
}	
?>