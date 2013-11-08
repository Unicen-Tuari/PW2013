<?php
class ItemController extends BaseController {
	public function indexAction() {
		$this->view->display();
	}

	public function searchAction() {
		$model = new item();
		$item_array = array();
		$item = $this->params;

		$item_array = $model->getData($item);
		$this->view->assign('item_datos', $item_array);
		$this->view->display();
		
	}
}