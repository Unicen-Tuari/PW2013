<?php
class Controller
{
	private $view;
	private $model;
 
    public function __construct($model,$view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirNoticia(){	

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
				if(isset($_GET['idSection'])){
					$noticias = $this->model->getNoticiasBySection($_GET['idSection']);
				}
				else
				{
					$noticias = $this->model->getNoticias();	
				}
			}

			if($noticias)
			{
					$this->view->setNoticias($noticias);
			}

			$this->view->imprimirNoticia();
	}
}	
?>