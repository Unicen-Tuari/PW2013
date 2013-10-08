<?php
//Controlador base. Cada contrlador específico va a ser precargado por el autoloader después, evitando todos los require
require('controllers/faq.controller.php');	
require('controllers/item.controller.php');	
require('controllers/contacto.controller.php');	
require('controllers/admin.controller.php');	
require('controllers/productos.controller.php');	
require('controllers/search.controller.php');	
require('controllers/index.controller.php');	


class FrontController {
	private $router;
	private $controllerName;
	private $controllerAction;

	private $view;

	public function __construct($view) {
		
		$this->view = $view;

		$this->router = new Router();

		$this->controllerName = $this->router->controllerName . 'Controller';
		$this->controllerAction = $this->router->controllerAction . 'Action';


		if(class_exists($this->controllerName)) {
			$controller = new $this->controllerName($this->view,
													$this->router->controllerParams);

			if(method_exists($controller, $this->controllerAction)) {
				call_user_func(array($controller,
					$this->controllerAction));
			} else {
				die('404 - error/invalid method');
			}
		} else {
			die('404 - error/invalid controller');
		}
	}
}

abstract class BaseController {
	protected $model;
	protected $view;
	protected $params;

	public function __construct($view, $params=null) {
		$this->view = $view;
		$this->params = $params;

		$model = new categorias();
		$categorias_array = $model->getCat();
		$subcat_array = array();
		$view = $this->view;

		$view->assign('categorias', $categorias_array);
		
		foreach ($categorias_array as $categoria) {
			$catNombre=$categoria['cat_nombre'];
			$subcat_array[$catNombre] = $model->getSubCat($catNombre); 
			
		}
		
		
		$view->assign('subcategorias', $subcat_array);
	}

}





