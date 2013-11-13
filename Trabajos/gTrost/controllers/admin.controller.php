<?php


class AdminController extends BaseController {
	public function indexAction() {		
		
		$model = new categorias();
		$modelprod = new productos();

		$subcategorias_array = $model->getAllSub();
		$categorias_array = $model->getAllCat();
		$productos_array =$modelprod->getAllProd();
		$view = $this->view;

		$view->assign('subcategorias', $subcategorias_array);
		$view->assign('categorias', $categorias_array);
		$view->assign('productos', $productos_array);

		$this->view->display();
		
	}

	public function uploadProductAction() {

		$target = "img/productos/"; 
 		$target = $target . basename( $_FILES['prod_img']['name']); 

		$producto_array = array('prod_nombre' => $_POST['prod_nombre'], 
								'prod_precio' => $_POST['prod_precio'],
								'prod_subcategoria' => $_POST['prod_subcategoria'],
								'prod_info' => $_POST['prod_info'],
								'prod_img' => '/'. $target);

 		move_uploaded_file($_FILES['prod_img']['tmp_name'], $target);
		$model = new admin();
		$model->CargarProducto($producto_array);

		$template = 'uploadSuccess';
		$this->view->setView($template);
		$this->view->display();
		

	}

	public function eraseProductAction() {
		$producto_id = $_POST['erase_id'];

		$model = new admin();
		$model->BorrarProducto($producto_id);
		
		$template = 'uploadSuccess';
		$this->view->setView($template);
		$this->view->display();
	}

	public function uploadSubCatAction() {

		$subcat_array = array('subcat_nombre' => $_POST['subcat_nombre'],
							'cat_nombre' => $_POST['subcat_cat']);

		$model = new admin();
		
		$model->CargarSubCat($subcat_array);

		$template = 'uploadSuccess';
		$this->view->setView($template);
		$this->view->display();

	}

	public function uploadCatAction() {

		$cat_nombre = $_POST['cat_nombre'];

		$model = new admin();
		$model->CargarCat($cat_nombre);

		$template = 'uploadSuccess';
		$this->view->setView($template);
		$this->view->display();
		
	}
	
	public function eraseCatAction() {

		$cat_nombre = $_POST['cat_nombre'];

		$model = new admin();
		$model->BorrarCat($cat_nombre);

		$template = 'uploadSuccess';
		$this->view->setView($template);
		$this->view->display();
	}

	public function eraseSubCatAction() {

		$subcat_nombre = $_POST['subcat_nombre'];

		$model = new admin();
		$model->BorrarSubCat($subcat_nombre);

		$template = 'uploadSuccess';
		$this->view->setView($template);
		$this->view->display();

	}
}