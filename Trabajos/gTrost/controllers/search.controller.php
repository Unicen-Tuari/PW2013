<?php
class SearchController extends BaseController {
	public function indexAction() {

		$search_keyword = $_POST['search_kw'];
		
		$model = new productos();
		$search_array = array();
		$search_array = $model->getByKeyword($search_keyword);

		$this->view->assign('productos', $search_array);
		$this->view->display();
		
		
	}
}