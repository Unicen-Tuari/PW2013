<?php

require('./libs/Smarty/Smarty.class.php');	

class View {

	private $smarty;
	private $template_file;
	


	public function __construct()
	{
		$this->smarty = new Smarty;
		$this->smarty->debugging = true;	
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