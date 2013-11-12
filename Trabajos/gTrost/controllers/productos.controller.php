<?php

class ProductosController extends BaseController {

	public function indexAction() {
		$this->view->display();
	}

	public function searchAction() {
		$model = new productos();
		$cat_array = array();
		$subcat = $this->params;

		$cat_array = $model->getByCategory($subcat, $this->page);
		$this->view->assign('subcat', $subcat);
		$this->view->assign('productos', $cat_array);

		$this->view->assign('total_paginas', $model->total_paginas);

		$this->view->display();
		
		
	}
}