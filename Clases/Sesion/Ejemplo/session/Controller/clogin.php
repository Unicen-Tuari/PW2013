<?php
class Controllerlogin
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	
	
	public function loginUsuario($formulario)
	{
	    $error = $this->verificarFormulario($formulario);
		if(!$error)
		{
			$user = $this->model->getUsuario($formulario["mail"]);
			
			if(empty($user))
			{
				$this->view->MensajeError("Error: Usuario Inexistente");
			} 	
			if($user[0]["Pass"] != md5($formulario["pass"]))
			{
				$this->view->MensajeError("Error: Password Inválida");
			}
			
			session_start();
			$_SESSION["mail"]=$formulario["mail"];
			echo "index.php";
			
		}
		else
		{
			$this->view->MensajeError($error);
		}
		
	}
	
	private function verificarFormulario($formulario)
	{
		if(!$this->verificaremail($formulario["mail"]))
			return "Error: Email Inválido";
		if(strlen($formulario["pass"])<=0)
			return "Error: La password es vacía";
	}
	
	private function verificaremail($email){ 
	  if (!ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$email)){ 
		  return false; 
	  } else { 
		   return true; 
	  } 
	}
}
?>