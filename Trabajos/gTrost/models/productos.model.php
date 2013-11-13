<?php

define('PRODUCTOS_PAGINA', 20);

class Productos extends Model {

	public $total_productos;
	public $total_paginas;


	public function get($new_query = null, $page=1, $es_index = false) {
		
		if($es_index) {
			$sql_total = "SELECT COUNT(*) FROM productos ORDER BY producto_id DESC";
			$total_productos = $this->getTotalProds($sql_total);		
			$total_paginas = $this->getTotalPaginas($total_productos);
			$offset = ($page-1) * PRODUCTOS_PAGINA;
			$this->total_paginas = $total_paginas;
		}

		$productos_array = array();
		$limit = 20;
		if ($new_query != null)
			$sql_query = $new_query;
		else
			$sql_query = 'SELECT * FROM productos ORDER BY producto_id DESC LIMIT ' . $limit . ' OFFSET ' . $offset;

		$STH = $this->conn->query($sql_query);  
		$STH->setFetchMode(PDO::FETCH_ASSOC);
		
		while($row = $STH->fetch()) {  
				$new_item = array();

			    $new_item['producto_id'] = $row['producto_id'];
			    $new_item['producto_nombre'] = $row['producto_nombre'];
			    $new_item['precio'] = $row['precio'];

			    $new_item['imagenes'] = explode(",", $row['imagenes']);
			    $new_item['foto'] = $new_item['imagenes'][0];

			    $new_item['subcat_nombre'] = $row['subcat_nombre'];
			    
			    $productos_array[] = $new_item;
			} 
		return $productos_array;
	}

	public function getTotalProds($sql_query) {	
		$STH = $this->conn->query($sql_query);  		
		$row = $STH->fetch();

		$this->total_productos = $row[0];

		return $row[0];
	}

	public function getTotalPaginas($total_productos) {
		return ceil($total_productos / PRODUCTOS_PAGINA);
	}

	public function getByCategory($cat_name, $page=1) {		
		$sql_total = "SELECT COUNT(*) FROM productos WHERE subcat_nombre='" . $cat_name . "'";
		$total_productos = $this->getTotalProds($sql_total);			
		$total_paginas = $this->getTotalPaginas($total_productos);
		$this->total_paginas = $total_paginas;
		$offset = ($page-1) * PRODUCTOS_PAGINA;

		$sql_query = "SELECT * FROM productos WHERE subcat_nombre='" . $cat_name . "' ORDER BY producto_id LIMIT 20 OFFSET " . $offset;
		
		return $this->get($sql_query);
	}

	public function getByKeyword($keyword, $page=1) {
		$sql_query = "SELECT * FROM productos WHERE descripcion LIKE '%" . $keyword . "%' OR producto_nombre LIKE '%" . $keyword . "%' LIMIT 20";

		return $this->get($sql_query);
	}

	public function getAllProd() {
		$productos_array = array();
		$sql_query = 'SELECT * FROM productos ORDER BY producto_id DESC';

		$STH = $this->conn->query($sql_query);  
		$STH->setFetchMode(PDO::FETCH_ASSOC); 

		while($row = $STH->fetch()) {  
				$new_item = array();

			    $new_item['producto_id'] = $row['producto_id'];
			    $new_item['producto_nombre'] = $row['producto_nombre'];
			    
			    
			    $productos_array[] = $new_item;
			} 

		return $productos_array;

	}

	public function getProdInfo($product_id){
		$prod_array = array();
		$prod_array['producto_id']=$product_id;
		$sql_query = "SELECT producto_nombre, precio FROM productos where producto_id = '" . $product_id . "'";

		$STH = $this->conn->query($sql_query);  
		$STH->setFetchMode(PDO::FETCH_ASSOC); 

		while($row = $STH->fetch()) {  
				
			    $prod_array['producto_nombre'] = $row['producto_nombre'];
			    $prod_array['precio'] = $row['precio'];
			    
			} 

		return $prod_array;
	}

	public function getProdArray($productos){
		$productos_array = array();
		
		foreach ($productos as $producto) {
			$productos_array[] = $this->getProdInfo($producto);
		}

		return $productos_array;
	}

	public function getTotal($cart_productos){
		$total = 0;
		foreach ($cart_productos as $producto) {
			$total += $producto['precio'];
		}
		return $total;
	}
}

