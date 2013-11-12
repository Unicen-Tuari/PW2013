<?php
class Controller
{
	private $view;
	private $model;
 
    public function __construct($view,$model) {
    	$this->model = $model;
		$this->view = $view;
    }
	

	public function imprimirPagina()
	{
		
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
			}

			$this->view->imprimirPagina();
	}

	public function enviarMail(){
		     $subject = 0;
			 $message = 0;
		if(isset($_POST['asunto'])){
			$subject = $_POST['asunto'];		
			//$message = '<html><body style="background: #eee;">';
			$message .= $_POST['mensaje'];
			//$message .= '</body></html>';
		}

			$to = 'perez.hgr@gmail.com';

			$headers = "From: tu-sitio@gmail.com \r\n";
			$headers .= "Reply-To: tu-mail@gmail.com\r\n";
			$headers .= "CC: alguien@gmail.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			if(mail($to,$subject,$message,$headers))
				echo 'success';
			else
				echo 'error';
	}
		
}
?>