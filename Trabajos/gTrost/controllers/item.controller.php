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
		$imagenes = explode(",", $item_array['imagenes']);

		$this->view->assign('item_datos', $item_array);
		$this->view->assign('imagenes', $imagenes);
		$this->view->display();
		
	}
}

