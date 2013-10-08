<?php

class Item extends Model {

	public function getData($item) {
		$item_array = array();
		$sql_query = 'SELECT * FROM productos WHERE producto_id= ' . $item;

		$STH = $this->conn->query($sql_query);  
		$STH->setFetchMode(PDO::FETCH_ASSOC); 

		while($row = $STH->fetch()) {  
				
				$item_array['producto_id']=$row['producto_id'];
			    $item_array['producto_nombre']=$row['producto_nombre'];
			    $item_array['imagenes']=$row['imagenes'];
			    $item_array['descripcion']=$row['descripcion'];
			    $item_array['subcat_nombre']=$row['subcat_nombre'];
			    $item_array['precio']=$row['precio'];
			} 

		return $item_array;


	}

	
}