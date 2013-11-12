<?php

class Cart extends Model {

	public function implodeProductos($productos) {
		$ids = array();
		foreach ($productos as $producto) {
			$ids[]=$producto['producto_id'];
		}
		$ids_productos= implode(',', $ids);
		
		
		return $ids_productos;
	}

	public function cargarOrden($productos, $total, $usuario){
		$productos_string=$this->implodeProductos($productos);

		echo $productos_string;
		echo $total;
		echo $usuario;
		$STH = $this->conn->prepare("INSERT INTO orders (productos, usuario_mail, total) 
									VALUES (:productos, :usuario_mail, :total)");

		$STH->bindParam(':productos', $productos_string);
		$STH->bindParam(':usuario_mail', $usuario);
		$STH->bindParam(':total', $total);
		
		$STH->execute();
	}

}
