<?php

class CartController extends BaseController {
	public function indexAction() {		
		
		$model = new productos();

		$cart_productos = $model->getProdArray($_SESSION['usuario_cart']);
		$this->view->assign('productos', $cart_productos);
		
		$total= $model->getTotal($cart_productos);
		$this->view->assign('total', $total);
		$this->view->display();
	}

	public function addToCartAction(){
		$producto_id = $this->params;
		$_SESSION['usuario_cart'][$producto_id] = $producto_id;

		header('Location: '. '/cart');
		
	}

	public function eraseAction(){
		$producto_id = $this->params;
		unset($_SESSION['usuario_cart'][$producto_id]) ;		
		header('Location: '. '/cart');
	}

	public function checkoutAction(){
		$model = new productos();

		$productos=$model->getProdArray($_SESSION['usuario_cart']);

		$total=$model->getTotal($productos);

		$modelcart = new cart();
		$modelcart->cargarOrden($productos,$total,$_SESSION['usuario_email']);
		
		//Mail
		$transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
		  ->setUsername('fretziweb')
		  ->setPassword('TDArqI8tBnPHvmf')
		  ;
		
		$mailer = Swift_Mailer::newInstance($transport);

		$message = Swift_Message::newInstance('Se ha registrado una nueva compra')
		  ->setFrom(array('fretziweb@gmail.com' => 'Fretzi'))
		  ->setTo(array('fretziweb@gmail.com' => 'Fretzi'))
		  ->setBody("Se ha registrado una nueva compra")		  
		  ;

		$result = $mailer->send($message);


		$_SESSION['message'] = 'Se ha registrado su compra, en breve nos pondremos en contacto con usted.';

		header('Location: '. '/');
	}
}