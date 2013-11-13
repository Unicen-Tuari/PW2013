<?php
class Router {
	private $uri;

	public $controllerName;
	public $controllerAction;
	public $controllerParams;
	public $controllerPage;

	public function __construct() {
		$uri = explode("/", $_SERVER['REQUEST_URI']);

		$this->controllerName = (isset($uri[1]) ? $uri[1] : 'index');
		$this->controllerAction = (isset($uri[2]) ? $uri[2] : 'index');
		$this->controllerParams = (isset($uri[3]) ? $uri[3] : '');
		$this->controllerPage = (isset($uri[4]) ? $uri[4] : '1');

		if($this->controllerName == '') 
			$this->controllerName = 'index';

		if($this->controllerAction == '') 
			$this->controllerAction = 'index';		
		
		if($this->controllerPage == '') 
			$this->controllerPage = 1;	
		
		$this->prepareParams();
	}

	public function prepareParams() {
		$this->controllerParams = str_replace("%20", " ", $this->controllerParams);
	}
}