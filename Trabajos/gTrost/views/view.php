<?php

require('./libs/Smarty/Smarty.class.php');	

class View {

	private $smarty;
	private $template_file;
	


	public function __construct()
	{
		$this->smarty = new Smarty;
		$this->smarty->debugging = true;	
		$this->smarty->assign('usuario_mail', $_SESSION['usuario_email']);
		$this->smarty->assign('admin', $_SESSION['admin']);
		$this->smarty->assign('message', $_SESSION['message']);	
		$_SESSION['message'] = -1;	
	}


	public function assign($key,$value) {
		$this->smarty->assign($key, $value);
	}

	public function setView($templateName) {
		$this->template_file = $templateName . '.tpl';
		
	}

	public function display() {
		$this->smarty->display($this->template_file);
	}
}