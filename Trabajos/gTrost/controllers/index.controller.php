<?php
class IndexController extends BaseController {
	public function indexAction() {		

		$model = new productos();
		$productos_array = $model->get();

		$view = $this->view;
		
		$view->assign('productos', $productos_array);
		$view->display('index.tpl');
	}
	
}