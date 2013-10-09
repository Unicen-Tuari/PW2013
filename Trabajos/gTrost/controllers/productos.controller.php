<?php

class ProductosController extends BaseController {

	public function indexAction() {
		$this->view->display('productos.tpl');
	}

	public function searchAction() {
		$model = new productos();
		$cat_array = array();
		$subcat = $this->params;
		
		$cat_array = $model->getByCategory($subcat);
		$this->view->assign('subcat', $subcat);
		$this->view->assign('productos', $cat_array);
		$this->view->display('productos.tpl');
		
	}
}