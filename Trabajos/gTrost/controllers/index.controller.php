<?php
class IndexController extends BaseController {
	public function indexAction() {		
		$this->page = $this->params;

		$model = new productos();		
		if($this->page == '') $this->page = 1;

		$productos_array = $model->get(NULL, $this->page, true);

		$view = $this->view;
		
		$view->assign('productos', $productos_array);
		$this->view->assign('total_paginas', $model->total_paginas);				
		$view->display();

	}

	public function loginAction() {

		$login_array = array('usuario_mail' => $_POST['usuario_mail'],
							'usuario_pass' => md5($_POST['usuario_pass']));

		$model = new usuario();

		$user_array = $model->getUserPass($login_array['usuario_mail']);
		if ($login_array['usuario_pass'] == $user_array['usuario_pass']){
			$_SESSION['usuario_email'] = $login_array['usuario_mail'];
			if ($login_array['usuario_mail'] == 'fretziweb@gmail.com') {
				$_SESSION['admin'] = 1;
			}
		} else {
			$_SESSION['message'] = "El password no corresponde al email";
		}

		header('Location: '. '/');
		

	}

	public function logoutAction() {
		session_destroy();
		header('Location: '. '/');
	}

	
}