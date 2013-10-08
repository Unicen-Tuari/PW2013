<?php

class Productos extends Model {

	public function get($new_query = null) {
		$productos_array = array();
		$limit = 20;
		if ($new_query != null)
			$sql_query = $new_query;
		else
			$sql_query = 'SELECT * FROM productos ORDER BY producto_id DESC LIMIT ' . $limit;

		$STH = $this->conn->query($sql_query);  
		$STH->setFetchMode(PDO::FETCH_ASSOC); 

		while($row = $STH->fetch()) {  
				$new_item = array();

			    $new_item['producto_id'] = $row['producto_id'];
			    $new_item['producto_nombre'] = $row['producto_nombre'];
			    $new_item['precio'] = $row['precio'];
			    $new_item['foto'] = $row['imagenes'];
			    $new_item['subcat_nombre'] = $row['subcat_nombre'];
			    
			    $productos_array[] = $new_item;
			} 

		return $productos_array;
	}

	public function getByCategory($cat_name) {
		$sql_query = "SELECT * FROM productos WHERE subcat_nombre='" . $cat_name . "'";
		
		return $this->get($sql_query);
	}

	public function getByKeyword($keyword) {
		$sql_query = "SELECT * FROM productos WHERE descripcion LIKE '%" . $keyword . "%'";

		return $this->get($sql_query);
	}
}