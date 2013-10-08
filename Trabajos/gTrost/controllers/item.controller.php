<?php
class ItemController extends BaseController {
	public function indexAction() {
		$this->view->display('item.tpl');
	}

	public function searchAction() {
		$model = new item();
		$item_array = array();
		$item = $this->params;

		$item_array = $model->getData($item);
		$this->view->assign('item_datos', $item_array);
		$this->view->display('item.tpl');
	}
}