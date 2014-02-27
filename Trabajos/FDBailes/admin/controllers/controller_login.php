<?php
class Controllerlogin
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
		if (!isset($_SESSION["username"]))
		{
			$this->view->imprimirPagina();
		}
		else
		{
			header('Location: admin.php');
		}
	}
	public function loginUsuario($formulario)
	{
		$user = $this->model->getUsuario($formulario["username"]);
		if (empty($user))
		{
			echo "user";
		} 	
		else if ($user[0]["password"] != md5($formulario["password"]))
		{
			echo "pass";
		}
		else
		{
			session_start();
			$_SESSION["username"] = $user[0]["username"];
			echo "admin.php";
		}
	}
}
?>