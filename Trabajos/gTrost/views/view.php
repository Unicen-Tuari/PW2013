<?php

require('./libs/Smarty/Smarty.class.php');	

class View {

	private $smarty;

	public function __construct()
	{
		$this->smarty = new Smarty;
		$this->smarty->debugging = true;	
	}

	public function display($template_name) {
		$this->smarty->display($template_name);
	}

	public function assign($key,$value) {
		$this->smarty->assign($key, $value);
	}
}