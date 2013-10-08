<?php


class AdminController extends BaseController {
	public function indexAction() {		
		
		$this->view->display('admin.tpl');
	}
	
}