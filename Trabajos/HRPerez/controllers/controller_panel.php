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
						
			if($tags){
					$this->view->setTags($tags);
			}
			if($seccion){
					$this->view->setSecciones($seccion);
			}

			if(isset($_GET['idTag'])){
				$noticias = $this->model->getNoticiasByTag($_GET['idTag']);				
			}

			else
			{
				if(isset($_GET['idSection']))
				{
					$noticias = $this->model->getNoticiasBySection($_GET['idSection']);
				}
			}

			if($noticias)
			{
					$this->view->setNoticias($noticias);
			}

			$this->view->imprimirPanel();

	}
}	
?>